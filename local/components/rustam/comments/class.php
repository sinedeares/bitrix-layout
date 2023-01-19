<?php

class Comments extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->IncludeComponentTemplate();
    }

    public function onPrepareComponentParams($arParams)
    {
        $this->arResult['comments'] = $arParams['comments'];

        return $this->arParams;
    }
}