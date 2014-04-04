<?php
class BitrixMigration
{
    protected $arResult = array();
    protected $arrayName = NULL;
    protected $fullFileName = '';
    protected $file = '';
    protected $dir = '';

    protected $filter = array();
    protected $setFilter = false;

    protected function init($file="restore.php")
    {
        CModule::IncludeModule("iblock");
        $this->arrayName = 'arResult';
        $this->dir = $_SERVER['DOCUMENT_ROOT'].'/_adv/bm/';
        $this->fullFileName = $this->dir.$file;
        $this->file = $file;

    }

    protected function ajax()
    {
        if ($_REQUEST['ajax_call']=="Y"){

            //iblockType=mind&iblocks=27&iblock_elements=27
            $this->filter = $this->parseAjaxRequest($_REQUEST['results']); //explode('&iblocks=','&'.$_REQUEST['results']);
            /*echo '<pre>';
            print_r($this->filter);
            echo '</pre>';
            die();*/
            if (count($this->filter)>0) $this->setFilter = true;
            $this->getIbStructure();
            print_r($this->generateFileContent());

            die();
        }

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
        $this->ajax();
        $this->getIbStructure();

        
        ?>

            <html>
            <head>
                <title>Импорт Инфоблоков 1c-Bitrix</title>
                <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                <script>
                    $(document).ready(function(){
                          $("#iblocks-list").find("input").change( function(){
                              sendRequest();

                          });

                           $("#unselect_all").click(function(){
                                $(".iblocks-lists").find("input[type=checkbox]").prop('', false);
                                sendRequest();
                           });

                        $("#select_all").click(function(){
                            $(".iblocks-lists").find("input[type=checkbox]").attr('checked','checked');
                            sendRequest();
                        });


                        var sendRequest = function()
                        {
                            var formInputs =  $("#iblocks-list").serialize();
                            //console.log(formInputs);
                            $.post("index.php", { ajax_call: "Y", results: formInputs },      function(data) {
                                //$("#addShowSuccess").empty().slideDown("slow").append(data);
                                $("#result_textarea").text(data);
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
                    <?foreach ($this->arResult as $arIblockType):?>
                        <li>
                            <input id="iblockType<?=$arIblockType['ID']?>" type="checkbox"  name="type" value="<?=$arIblockType['ID']?>">
                            <label for="iblockType<?=$arIblockType['ID']?>">
                                <b><?=$arIblockType['NAME']?></b>
                            </label>
                            <ul>
                            <?foreach ($arIblockType['IBLOCKS'] as $arIblock):?>
                                <li>                                    
                                    <input class="iblocks" id="iblock<?=$arIblock['ID']?>" type="checkbox"  name="iblocks" value="<?=$arIblock['ID']?>">
                                    <label for="iblock<?=$arIblock['ID']?>">
                                        <?=$arIblock['NAME']?>
                                    </label>
                                    <ul>
                                        <li>
                                            <input class="iblocks" id="elements_<?=$arIblock['ID']?>" type="checkbox"  name="iblocks-elements" value="<?=$arIblock['ID']?>">
                                            <label for="elements_<?=$arIblock['ID']?>">Элементы</label>

                                        </li>
                                        <li>
                                            <input class="iblocks" id="sections_<?=$arIblock['ID']?>" type="checkbox"  name="iblocks-sections" value="<?=$arIblock['ID']?>">
                                            <label for="sections_<?=$arIblock['ID']?>">Разделы</label>
                                        </li>
                                        <li>
                                            <input class="iblocks" id="files_<?=$arIblock['ID']?>" type="checkbox"  name="iblocks-files" value="<?=$arIblock['ID']?>">
                                            <label for="files_<?=$arIblock['ID']?>">Файлы</label>
                                        </li>
                                    </ul>
                                </li>
                            <?endforeach;?>
                            </ul>
                        </li>
                    <?endforeach;?>
                    </ul>
                    </form>


                </div>
               <textarea id="result_textarea" style="width:100%; height: 50%; position: relative; bottom: 0;">
                <?                
                print_r($this->generateFileContent());
                ?>
                </textarea>

            </body>
        </html>


        
        <?
        

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
        $content .= $arrayString;
        $content .= "echo '<pre>';\n";
        $content .= "print_r(\$".$this->arrayName.");\n";
        $content .= "echo '</pre>';\n";
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

                $arIBType['IBLOCKS'] = $this->getIBlocksArray($arIBType['IBLOCK_TYPE_ID']);
                if ($this->filterItem($arIBType['ID'],'type'))
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

            if ($this->filterItem($ar_res['ID'],'iblocks')){
                $ar_res['PROPS'] = $this->getIBlocksProperties($ar_res['ID']);
                $arResult[$ar_res['CODE']] = $ar_res;
            }
        }
        return $arResult;
    }

    protected function getIBlocksProperties($iblockId)
    {
        $arResult = array();
        $properties = CIBlockProperty::GetList(Array(), Array("IBLOCK_ID"=>$iblockId));
        while ($prop_fields = $properties->GetNext()){
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

    public function import($array)
    {

        $this->importIbStructure($array);

    }
    protected function importIbStructure($array)
    {
        //импорт Типов Инфо-блоков
        foreach($array as $arIblockType){
            $this->importIblockType($arIblockType);


            //импорт инфоблоков
            if (count($arIblockType['IBLOCKS'])>0){
                foreach ($arIblockType['IBLOCKS'] as $arIblock){
                    $this->importIblock($arIblock);


                    //импорт свойств
                    if (count($arIblockType['PROPS'])>0){
                        foreach ($arIblockType['PROPS'] as $arProperty){
                            $this->importProperty($arProperty);
                        }
                    }
                }
            }
        }
    }

    protected function importIblockType($arIblockType)
    {
        CModule::IncludeModule("iblock");
        unset($arIblockType['IBLOCKS']);
        $db_iblock_type = CIBlockType::GetList(array(),array('ID'=>$arIblockType['ID']));
        $arResult = array();
        if(!$db_iblock_type->Fetch()){

            echo '$obBlocktype->Add<pre>';
            print_r($arIblockType);
            echo '</pre>';
            /*$obBlocktype = new CIBlockType;
            $DB->StartTransaction();
            $res = $obBlocktype->Add($arIblockType);
            if(!$res)
            {
                $DB->Rollback();
                echo 'Error: '.$obBlocktype->LAST_ERROR.'<br>';
            }
            else
                $DB->Commit();
            */
        }else{
            echo 'Такой тип инфоблоков уже существует '.$arIblockType['ID'];
        }
    }

    protected function importIblock($arIblock)
    {

        unset($arIblock['ID']);
        unset($arIblock['PROPS']);
        unset($arIblock['ELEMENT_CNT']);
        unset($arIblock['TMP_ID']);
        $arIblock['SITE_ID'] = $arIblock['LID'];
        unset($arIblock['LID']);


        $res = CIBlock::GetList(
            Array(),
            Array(
                'TYPE'=>$arIblock['IBLOCK_TYPE_ID'],
                "CODE"=>$arIblock['CODE']
            ), true
        );

        $arFields = $this->clearFields($arIblock);
        if(!$res->Fetch()){

            $ib = new CIBlock;

            echo '$ib->Add<pre>';
            print_r($arFields);
            echo '</pre>';
            //$ID = $ib->Add($arFields);
            //$res = ($ID>0);

        }else {
            echo 'Такой инфоблок уже существует '.$arFields['CODE'];
            echo '$ib->Add<pre>';
            print_r($arFields);
            echo '</pre>';
        }

    }

    /*
     * "PRICE" => Array (
                        "ID" => "16",
                        "~ID" => "16",
                        "TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "~TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Цена всего",
                        "~NAME" => "Цена всего",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "20",
                        "~SORT" => "20",
                        "CODE" => "PRICE",
                        "~CODE" => "PRICE",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "N",
                        "~PROPERTY_TYPE" => "N",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
     * */
    protected function importProperty($arProperty,$iblockId)
    {

        $arProperty = $this->clearFields($arProperty);
        unset($arProperty['ID']);
        $properties = CIBlockProperty::GetList(Array("sort"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$iblockId,"CODE"=>$arProperty['CODE']));
        if (!$properties->GetNext()){

            $ibp = new CIBlockProperty;
            if ($PropID = $ibp->Add($arProperty)) echo 'Свойство добавлено!';

        }else {
            echo 'Свойство "'.$arProperty['NAME'].'" уже есть.';
        }

    }



    protected function clearFields($arFields)
    {
        $arNewFields = array();
        foreach ($arFields as $key=>$value){
            if (substr($key,0,1)!='~')
                $arNewFields[$key] = $value;
        }
        return $arNewFields;
    }
}

?>