<?php
/**
 * Class BitrixMigration
 * Класс позволяет экспортировать структуру инфоблоков в PHP массив,
 * который можно использовать для создания новых инфоблоков.
 * @author Verbovenko Fyodor <4fyodor@gmail.com>
 * @version 1.0
 */
//TODO Сделать проверку доступа

class BitrixMigration
{
    protected $arResult = array();
    protected $arrayName = NULL;
    protected $fullFileName = '';
    protected $file = '';
    protected $dir = '';

    protected $filter = array();
    protected $setFilter = false;

    protected $arRequiredProps =  array("CODE","NAME","ACTIVE","SORT","IS_REQUIRED","MULTIPLE","MULTIPLE_CNT","PROPERTY_TYPE","LINK_IBLOCK_ID", "USER_TYPE","FILE_TYPE");
    protected $arRequiredEnumFields =  array("VALUE","DEF","SORT","EXTERNAL_ID");

    protected $arIblockKeys = array(
        "ID","SITE_ID","IBLOCK_TYPE_ID","CODE","NAME","ACTIVE","SORT","LIST_PAGE_URL","DETAIL_PAGE_URL","SECTION_PAGE_URL","INDEX_ELEMENT",
        "INDEX_SECTION","WORKFLOW","BIZPROC","SECTION_CHOOSER","LIST_MODE","RIGHTS_MODE","VERSION","EDIT_FILE_BEFORE",
        "EDIT_FILE_AFTER","SECTIONS_NAME","SECTION_NAME","ELEMENTS_NAME","ELEMENT_NAME","PROPS"
    );

    protected $arIblockTypeKeys = array(
        "IBLOCK_TYPE_ID","LID","NAME","SECTION_NAME","ELEMENT_NAME","ID","SECTIONS","EDIT_FILE_BEFORE","EDIT_FILE_AFTER","IN_RSS","SORT","IBLOCKS"
    );



    protected $iblockIdByCode = array();

    public function __construct()
    {
        CModule::IncludeModule("iblock");
    }

    protected function init($file="restore.php")
    {
        $this->arrayName = 'arResult';
        $this->dir = $_SERVER['DOCUMENT_ROOT'].'/bm/';
        $this->fullFileName = $this->dir.$file;
        $this->file = $file;

    }

    protected function ajax()
    {
        //iblockType=mind&iblocks=27&iblock_elements=27
        $this->filter = $this->parseAjaxRequest($_REQUEST['results']); //explode('&iblocks=','&'.$_REQUEST['results']);
        if (count($this->filter)>0) $this->setFilter = true;
        $this->getIbStructure();
        print_r($this->generateFileContent());

        exit();
    }

    protected function saveFile()
    {
        $fileName = $_REQUEST['file'];
        $scriptString = $_REQUEST['script'];
        $res = file_put_contents($fileName,$scriptString);
        if ($res>0)
            echo 'True';
        else
            echo 'False';

        exit();
    }




    //iblockType=mind&iblocks=27&iblock_elements=27
    protected function parseAjaxRequest($request)
    {
        $arParams = explode('&',$request);
        $arResult = array();
        foreach ($arParams as $sParam){
            $arTemp = explode('=', $sParam);
            $arResult[$arTemp[0]][] = $arTemp[1];
        }
        return $arResult;
    }

    public function start()
    {
        $this->init();
        if ($_REQUEST['ajax_call']=="Y") $this->ajax();
        if ($_REQUEST['save']=="Y") $this->saveFile();
        $this->getIbStructure();
        ?>
        <html>
        <head>
            <title>Импорт Инфоблоков 1c-Bitrix</title>
            <style>
                .disabled {
                    color: #ddd;
                }
            </style>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script>
                var ajaxPath = "index.php";
                $(document).ready(function () {
                    $("#iblocks-list").find("input").change(function () {
                        sendRequest();

                    });

                    $("input[name=save]").click(function () {
                        var context$ = $(this);
                        if (!$(this).hasClass("disabled")) {
                            $(this).addClass("disabled");
                            $("#save-results").remove();
                            var sFileName = $("input[name=file-name]").val();
                            var sScript = $("#result_textarea").val();

                            $(".iblocks-lists").after("<div id='loader'>Загружается...</div>")

                            $.post( ajaxPath,{save:"Y",file:sFileName, script: sScript}, function( data ) {
                                 //console.log(data);

                                 if (data=="True") {
                                     var fileLink = $("<a>").attr("href",sFileName).text("Запустить его.");
                                     var resDiv = $("<div>").attr("id","save-results").text("Файл сохранен.").append(fileLink);
                                     $(".iblocks-lists").after(resDiv);
                                 }

                                 $("#loader").remove();
                                 context$.removeClass("disabled");
                             });
                        }

                        return false;
                    });

                    $("#unselect_all").click(function () {
                        $(".iblocks-lists").find("input[type=checkbox]").prop('', false);
                        sendRequest();
                    });

                    $("#select_all").click(function () {
                        $(".iblocks-lists").find("input[type=checkbox]").attr('checked', 'checked');
                        sendRequest();
                    });


                    var sendRequest = function () {
                        $("#result_textarea").text("");
                        $(".iblocks-lists").after("<div id='loader'>Загружается...</div>")
                        var formInputs = $("#iblocks-list").serialize();
                        $.post("index.php", { ajax_call: "Y", results: formInputs }, function (data) {
                            $("#result_textarea").text(data);
                            $("#loader").remove();
                        });
                    }

                });

            </script>
        </head>
        <body>
        <input type="button" id="unselect_all" name="unselect_all" value="Снять для всех">
        <input type="button" id="select_all" name="select_all" value="Установить для всех">
        <div class="iblocks-lists">
            <form name="iblocks-list" id="iblocks-list">
                <ul>
                    <? foreach ($this->arResult as $arIblockType): ?>
                        <? foreach ($arIblockType['IBLOCKS'] as $arIblock): ?>
                            <li>
                                <input class="iblocks" id="iblock<?= $arIblock['ID'] ?>" type="checkbox" name="iblocks"
                                       value="<?= $arIblock['ID'] ?>">
                                <label for="iblock<?= $arIblock['ID'] ?>">
                                    <?= $arIblock['NAME'] ?>
                                </label>
                            </li>
                        <? endforeach; ?>
                    <? endforeach; ?>
                </ul>
            </form>
        </div>
        <input type="text" name="file-name" value="import.php">
        <input type="button" name="save" value="Сохранить в файл"> Внимание! Если такой файл уже существует, он будет перезаписан. Будьте внимательны!
        <textarea id="result_textarea" style="width:100%; height: 50%; position: relative; bottom: 0;">
            Выберите один из инфоблоков.
        </textarea>
        </body>
        </html>
        <?
    }

    public function uploadArray( $arResult )
    {
        echo '<pre>';
        print_r($arResult);
        echo '</pre>';
        foreach($arResult as $arType){

            $this->addType( $arType );
            foreach($arType['IBLOCKS'] as $arIblock){

                $this->addIblock( $arIblock );
                foreach($arIblock['PROPS'] as $arProperties){
                    $arProperties['IBLOCK_ID'] = $this->iblockIdByCode[$arIblock['CODE']];
                    $this->addProperty( $arProperties );

                }
            }
        }


    }

    protected function addType( $arType )
    {
        $db_iblock_type = CIBlockType::GetList(false, array("=ID"=>$arType["ID"]));
        if($ar_iblock_type = $db_iblock_type->Fetch()){
            echo 'Тип инфоблока '.$arType["ID"].' уже есть.';
        }else {
            $obBlocktype = new CIBlockType;
            $res = $obBlocktype->Add($arType);
        }
    }

    protected function addIblock($arIblock)
    {
        $res = CIBlock::GetList(
            Array(),
            Array(
                'TYPE'=>$arIblock['IBLOCK_TYPE_ID'],
                "CODE"=>$arIblock['CODE']
            ), true
        );

        if($arFindedIblock = $res->Fetch() ){

            $this->iblockIdByCode[$arFindedIblock['CODE']] = $arFindedIblock['ID'];
            echo 'Инфоблока '.$arIblock["CODE"].' уже есть.';

        }else {
            echo 'Инфоблок не найден.';
            $ib = new CIBlock;
            if ($this->iblockIdByCode[$arIblock['CODE']] = $ib->Add($arIblock)) echo 'Инфоблок успешно добавлен.';
            else echo $ib->LAST_ERROR;
            unset($ib);

        }
    }

    protected function addProperty( $arProperty )
    {
        $properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("IBLOCK_ID"=>$arProperty['IBLOCK_ID'],"CODE"=>$arProperty["CODE"]));

        if($prop_fields = $properties->GetNext()){
            echo '<br />Свойство '.$arProperty["CODE"].' уже есть.';
        }else {
            $ibp = new CIBlockProperty;
            if ($PropID = $ibp->Add($arProperty)){
                echo '<br /><b>Свойство '.$arProperty["CODE"].' добавлено.</b>';
            }
            unset( $ibp );
        }
    }

    public function writeToFile($array)
    {
        if ($this->writeArrayToFile($array))
            echo 'Файл записан. <a href="'.$this->file.'">'.$this->file.'</a>';
        else
            echo 'возникли проблемы с записью! '.$this->fullFileName;
    }


    protected function generateFileContent()
    {
        $arrayString = self::arrayToString( $this->arResult ,$this->arrayName,'    ');
        $content = "<?php \n";
        $content .= "require(\$_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php'); \n";
        $content .= "include(\"bm.php\");\n";
        $content .= $arrayString;
        $content .= "\$bm = new BitrixMigration();\n";
        $content .= "\$bm->uploadArray(\$arResult);\n";

        //$content .= "echo '<pre>';\n";
        //$content .= "print_r(\$".$this->arrayName.");\n";
        //$content .= "echo '</pre>';\n";
        $content .= "?>";
        return $content;
    }


    protected function writeArrayToFile($content)
    {
        return file_put_contents($this->fullFileName,$content);

    }

    protected function filterItem($id,$type)
    {
        if (!$this->setFilter) return true;

        return  in_array($id,$this->filter[$type]);
    }

    protected function getIbStructure()
    {
        //CModule::IncludeModule("iblock");
        $db_iblock_type = CIBlockType::GetList(array(),array()); //"id"=>"help"
        $arResult = array();
        while($ar_iblock_type = $db_iblock_type->Fetch()){
            if($arIBType = CIBlockType::GetByIDLang($ar_iblock_type["ID"], LANG)){
                //echo htmlspecialcharsEx($arIBType["NAME"])."<br>";
                $arIBType = array_intersect_key($arIBType, array_flip( $this->arIblockTypeKeys ) );
                $arIBType['IBLOCKS'] = $this->getIBlocksArray($arIBType['IBLOCK_TYPE_ID']);
                //if ($this->filterItem($arIBType['ID'],'type'))
                $arResult[] =  $arIBType;

            }
        }

        $this->arResult = $arResult;

    }

    protected function getIBlocksArray($type)
    {
        $arResult = array();
        $res = CIBlock::GetList(
            Array(),
            Array(
                'TYPE'=>$type,
        ), true);

        while($ar_res = $res->Fetch()){

            $iIBlockID = $ar_res['ID'];
            if ($this->filterItem($ar_res['ID'],'iblocks')){

                $ar_res = array_intersect_key($ar_res, array_flip( $this->arIblockKeys ) );
                $ar_res['SITE_ID']  = array(SITE_ID);
                $ar_res['PROPS'] = $this->getIBlocksProperties( $iIBlockID );
                //myPrintR($ar_res,__FILE__,__LINE__ );

                $arResult[] = $ar_res;
            }
        }
        return $arResult;
    }

    protected function getIBlocksProperties($iblockId)
    {
        $arResult = array();
        $properties = CIBlockProperty::GetList(Array(), Array("IBLOCK_ID"=>$iblockId));

        while ($prop_fields = $properties->GetNext()){

            foreach ($prop_fields as $sFieldName=>$sValue){
                if ( !in_array( $sFieldName, $this->arRequiredProps) ){
                    unset( $prop_fields[ $sFieldName ]);
                }
            }


            if ( $prop_fields["PROPERTY_TYPE"] == "L" ){

                $prop_fields['VALUES'] = Array();
                $property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockId, "CODE"=>$prop_fields['CODE']));
                while($enum_fields = $property_enums->GetNext()){


                    foreach ($enum_fields as $sEnumFieldName=>$sValue){
                        if ( !in_array( $sEnumFieldName, $this->arRequiredEnumFields) ){
                            unset( $enum_fields[ $sEnumFieldName ]);
                        }
                    }
                    $prop_fields['VALUES'][] = $enum_fields;
                    //echo $enum_fields["ID"]." - ".$enum_fields["VALUE"]."<br>";
                }
            }

            $arResult[$prop_fields['CODE']] = $prop_fields;

        }
        return $arResult;
    }


    protected static function arrayToString($array,$arrayName, $indent='    ')
    {
        if ($indent=='    ')
            $resultText = "\$".$arrayName." = Array (\n";

        foreach ($array as $key=>$value){
            if (is_array($value)){
                $resultText .= $indent."\"".$key."\" => Array (\n";
                $resultText .= self::arrayToString($value,'',$indent.'    ');
                $resultText .= $indent."),\n";
            }else {
                $resultText.= $indent."\"".$key."\" => \"".$value."\",\n";
            }
        }

        if ($indent=='    ')
            $resultText .= ");\n";

        return $resultText;
    }

}
?>