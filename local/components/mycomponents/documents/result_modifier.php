<?php
$arResult["DOCUMENTS"] = array();
if (isset($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"]) && is_array($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"]))
{
    foreach ($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"] as $FILE){
        $FILE = CFile::GetFileArray($FILE);
        if(is_array($FILE)){
            $arResult["DOCUMENTS"][] = $FILE;
        }
    }
}
