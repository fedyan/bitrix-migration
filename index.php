<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');



BitrixMigration::start();



class BitrixMigration 
{
    protected static $arResult = array();
    protected static $arrayName = NULL;
    
    function init()
    {
        CModule::IncludeModule("iblock");
        self::$arrayName = 'arResult';
        
    }
    
    public static function start()
    {
        self::init();
        self::ibStructure();
        
    }     
    
    
    protected static function ibStructure()
    {

        $arResult = self::getTypesArray();
        
        echo self::arrayToString($arResult); 
    }
    
    
    protected static function getTypesArray()
    {
        //CModule::IncludeModule("iblock");
        $db_iblock_type = CIBlockType::GetList(array(),array("id"=>"help"));
        $arResult = array();
        while($ar_iblock_type = $db_iblock_type->Fetch()){
            if($arIBType = CIBlockType::GetByIDLang($ar_iblock_type["ID"], LANG)){
                //echo htmlspecialcharsEx($arIBType["NAME"])."<br>";                
                                
                $arIBType['IBLOCKS'] = self::getIBlocksArray($arIBType['IBLOCK_TYPE_ID']);
                $arResult[] =  $arIBType; 
                
            }   
        }
        return $arResult;
        
    }
    
    protected static function getIBlocksArray($type)
    {
        $arResult = array();
        $res = CIBlock::GetList(
            Array(), 
            Array(
                'TYPE'=>$type,              
        ), true);
            
        while($ar_res = $res->Fetch()){
            
            $ar_res['PROPS'] = self::getIBlocksProperties($ar_res['ID']);
            $arResult[$ar_res['CODE']] = $ar_res;  
            
        }
        return $arResult;
    }
    
    protected static function getIBlocksProperties($iblockId)
    {
        $arResult = array();        
        $properties = CIBlockProperty::GetList(Array(), Array("IBLOCK_ID"=>$iblockId));
        while ($prop_fields = $properties->GetNext()){
            $arResult[$prop_fields['CODE']] = $prop_fields;            
        }
        return $arResult;
    }
    
    
    
    
    
    protected static function arrayToString($array,$indent='    ')
    {                      
        if ($indent=='    ')
            $resultText = "\$".self::$arrayName." = Array (\n";                 
            
        foreach ($array as $key=>$value){            
            if (is_array($value)){
                $resultText .= $indent."\"".$key."\" => Array (\n";                 
                $resultText .= self::arrayToString($value,$indent.'    ');
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