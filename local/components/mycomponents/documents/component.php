<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die;

CModule::IncludeModule('iblock');


$arResult = array();
if(!isset($arParams["CACHE_TIME"]))
    $arParams["CACHE_TIME"] = 36000000;

/*$arParams['IBLOCK_ID'] = intval('IBLOCK_ID');
$arParams['PROPERTY_CODE'] = intval('PROPERTY_CODE');*/

$arListOfSections = [];
//if (isset($arCurrentValues["IBLOCK_ID"]) && intval($arCurrentValues["IBLOCK_ID"]) > 0) {
    $arFilter = array(
        'IBLOCK_ID' => intval($arParams["IBLOCK_ID"]),
        'GLOBAL_ACTIVE' => 'Y',
        'IBLOCK_ACTIVE' => 'Y',
    );

    $arSec = CIBlockSection::GetList(array('LEFT_MARGIN' => 'ASC'), $arFilter, false, array("ID", "DEPTH_LEVEL", "NAME"));
    while ($arRes = $arSec->Fetch()) {
        $arListOfSections[$arRes['ID']] = ['ID' => $arRes['ID'], 'NAME' => $arRes['NAME'], 'LINK' => "/?SECTION_ID={$arRes['ID']}"];
    }
$arResult["SECTIONS"] = $arListOfSections;
    //$arListOfSections["123"]= ['ID' => 1, 'NAME' => "fdsf", 'LINK' => "/?SECTION_ID=43&ELEMENT_ID=432"];
$arComponentVariables = [
    "SECTION_ID",
    "SECTION_CODE",
    "ELEMENT_ID",
    "ELEMENT_CODE",
];
$arVariables=[];
$arVariableAliases= [];
CComponentEngine::initComponentVariables(false, $arComponentVariables, $arVariableAliases, $arVariables);
//}


if($arVariables["ELEMENT_ID"] )
{
    $this->IncludeComponentTemplate('element');

}
elseif ($arVariables["SECTION_ID"])
{
    unset($arResult['SECTIONS']);

    //список элементов в разделе
    $iBlockElements = CIBlockElement::GetList(
        array("SORT" => "ASC"),
        array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "SECTION_ID" => $arVariables["SECTION_ID"]),
        false,
        false,
        array("ID", "NAME")
    );
    $arElements=[];
    $arProperty= [];

    //temp - конкретный элемент
    while($temp = $iBlockElements->GetNext())
    {

        //свойства элемента
        $property = \CIBlockElement::GetProperty($arParams["IBLOCK_ID"], $temp["ID"], '', '');
        while ($someProperty = $property->GetNext()) {
            $a = \CFile::GetList(['SORT' => 'ASC'], ['ID' => $someProperty["VALUE"]]);
            //перебор всех проперти элементов
            while ($file = $a->GetNext()) {
                $arProperty[] = $file;
            }
        }

        $arElements[$temp['ID']] = ['ID' => $temp['ID'], 'NAME' => $temp['NAME'], 'LINK' => "/?SECTION_ID={$arVariables["SECTION_ID"]}&ELEMENT_ID={$temp['ID']}"];
    };
    //$arResult["ELEMENTS"] = $arProperty
    //$arResult["ELEMENTS"] = $arElements;
    $arResult["ELEMENTS"] = $arElements+$arProperty;
    echo "<pre>";
    var_dump($arResult);
    die();
    $this->IncludeComponentTemplate('element');

}

else
{
    $this->IncludeComponentTemplate('section');
}
?>