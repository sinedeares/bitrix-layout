<?php

class MenuSubmenu extends \CBitrixComponent
{
    public function executeComponent()
    {
        $this->IncludeComponentTemplate();
    }

    public function onPrepareComponentParams($arParams)
    {
        $this->arResult = $arParams;

        return $arParams;
    }
}