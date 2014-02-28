<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');


$bm = new BitrixMigration();
$bm->start('restore.php');



class BitrixMigration 
{
    protected $arResult = array();
    protected $arrayName = NULL;
    protected $fullFileName = '';
    protected $file = ''; 
    protected $dir = '';
    
    protected function init($file="restore.php")
    {
        CModule::IncludeModule("iblock");
        $this->arrayName = 'arResult';
        $this->dir = $_SERVER['DOCUMENT_ROOT'].'/_adv/bm/';
        $this->fullFileName = $this->dir.$file;
        $this->file = $file;
        
    }
    
    public function start()
    {
        $this->init();
        $this->getIbStructure();        
        if ($this->writeArrayToFile($this->generateFileContent())) 
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
        $db_iblock_type = CIBlockType::GetList(array(),array("id"=>"help"));
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