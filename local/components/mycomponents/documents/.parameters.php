<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if(!CModule::IncludeModule('iblock'))
    return;

$rsIBlock = CIBlock::GetList(['SORT' => 'ASC'], ['ACTIVE' => 'Y']);

$arIBlock = array();

while ($item = $rsIBlock->Fetch()) {
    $arIBlock[$item['ID']] = "[{$item['ID']}] {$item['NAME']}";
}



$arComponentParameters = [
    "PARAMETERS" => [
        "IBLOCK_ID" => [
            'NAME' => 'Инфоблок',
            'TYPE' => 'LIST',
            'VALUES' => $arIBlock,
            "REFRESH" => "Y",
        ],

        "SHOW_TO_UNAUTHORIZED_PERSONS" => [
            "NAME" => 'Показывать неавторизованным пользователям',
            "DEFAULT" => 'Y',
            'TYPE' => "CHECKBOX"
        ],

        'SEF_MODE' => [
            "SECTION_ID" => array(
                "NAME" => GetMessage("SECTION_PAGE"),
                "DEFAULT" => "#SECTION_ID#/",
                "VARIABLES" => array(
                    "SECTION_ID",
                    "SECTION_CODE",
                    "SECTION_CODE_PATH",
                ),
            ),
            "ELEMENT_ID" => array(
                "NAME" => GetMessage("DETAIL_PAGE"),
                "DEFAULT" => "#SECTION_ID#/#ELEMENT_ID#/",
                "VARIABLES" => array(
                    "ELEMENT_ID",
                    "ELEMENT_CODE",
                    "SECTION_ID",
                    "SECTION_CODE",
                    "SECTION_CODE_PATH",
                ),
            ),
        ],
        "CACHE_TIME"  =>  array("DEFAULT"=>36000000),

        "FIELD_CODE" => CIBlockParameters::GetFieldCode(GetMessage("IBLOCK_FIELD"), "DATA_SOURCE"),
        "PROPERTY_CODE" => array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => GetMessage("T_IBLOCK_PROPERTY"),
            "TYPE" => "LIST",
            "MULTIPLE" => "Y",
            "VALUES" => $arProperties,
            "ADDITIONAL_VALUES" => "Y",
        ),

    ],
];

/*echo "<pre>";
var_dump($arCurrentValues);
die();*/