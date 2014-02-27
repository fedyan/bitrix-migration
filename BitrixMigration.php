<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');



BitrixMigration::start();



class BitrixMigration 
{
    protected static $arResult = array();
    
    function init()
    {
        CModule::IncludeModule("iblock");
        
        
    }
    
    public static function start()
    {
        self::init();
        self::ibStructure();
        
    }     
    
    
    protected static function ibStructure()
    {

        //CModule::IncludeModule("iblock");
        $db_iblock_type = CIBlockType::GetList();
        $arResult = array();
        while($ar_iblock_type = $db_iblock_type->Fetch()){
            if($arIBType = CIBlockType::GetByIDLang($ar_iblock_type["ID"], LANG)){
                //echo htmlspecialcharsEx($arIBType["NAME"])."<br>";                
                $arResult['TYPES'][] =  $arIBType; 
                $res = CIBlock::GetList(
                    Array(), 
                    Array(
                        'TYPE'=>'catalog', 
                        'SITE_ID'=>SITE_ID, 
                        'ACTIVE'=>'Y', 
                        "CNT_ACTIVE"=>"Y", 
                        "!CODE"=>'my_products'
                    ), true
                );
                while($ar_res = $res->Fetch()){
                    echo self::arrayToString($ar_res); 
                }
            }   
        }
        echo self::arrayToString($arResult); 
    }
    
    protected static function arrayToString($array,$indent='    ')
    {                      
        if ($indent=='    ')
            $resultText = "\$arrayName => Array (\n";                 
            
        foreach ($array as $key=>$value){            
            if (is_array($value)){
                $resultText .= $indent."\"".$key."\" => Array (\n";                 
                $resultText .= self::arrayToString($value,$indent.'    ');
                $resultText .= $indent."),\n"; 
            }else {
                $resultText.= $indent."\"".$key."\" => \"".$value."\",\n"; 
            }                        
        }        
        
        if ($indent=='')
            $resultText .= "),\n"; 
            
        return $resultText;
    }
}


?>