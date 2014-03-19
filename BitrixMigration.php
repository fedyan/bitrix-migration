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

            $this->filter = explode('&iblocks=','&'.$_REQUEST['results']);

            if (count($this->filter)>0) $this->setFilter = true;
            $this->getIbStructure();
            print_r($this->generateFileContent());

            die();
        }

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
                                var formInputs =  $("#iblocks-list").serialize();
                              $.post("index.php", { ajax_call: "Y", results: formInputs },      function(data) {
                                 //$("#addShowSuccess").empty().slideDown("slow").append(data);
                                 $("#result_textarea").text(data);
                              });

                          });
                    });

                </script>
            </head>
            <body>
                <div class="iblocks-lists">
                    <form name="iblocks-list" id="iblocks-list">
                    <ul>
                    <?foreach ($this->arResult as $arIblockType):?>
                        <li><b><?=$arIblockType['NAME']?></b>
                            <ul>
                            <?foreach ($arIblockType['IBLOCKS'] as $arIblock):?>
                                <li>                                    
                                    <input class="iblocks" id="iblock<?=$arIblock['ID']?>" type="checkbox" CHECKED name="iblocks" value="<?=$arIblock['ID']?>">
                                    <label for="iblock<?=$arIblock['ID']?>">
                                        <?=$arIblock['NAME']?>
                                    </label>
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


    protected function getIbStructure()
    {
        //CModule::IncludeModule("iblock");
        $db_iblock_type = CIBlockType::GetList(array(),array()); //"id"=>"help"
        $arResult = array();
        while($ar_iblock_type = $db_iblock_type->Fetch()){
            if($arIBType = CIBlockType::GetByIDLang($ar_iblock_type["ID"], LANG)){
                //echo htmlspecialcharsEx($arIBType["NAME"])."<br>";

                $arIBType['IBLOCKS'] = $this->getIBlocksArray($arIBType['IBLOCK_TYPE_ID']);
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

            $ar_res['PROPS'] = $this->getIBlocksProperties($ar_res['ID']);

            $arResult[$ar_res['CODE']] = $ar_res;

            if ( $this->setFilter && !in_array($ar_res['ID'],$this->filter) )
                unset($arResult[$ar_res['CODE']]);



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
}

?>