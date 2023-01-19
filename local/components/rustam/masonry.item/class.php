<?php

class MasonryItem extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $this->arParams = $arParams;

        return $this->arParams;
    }

    public function  executeComponent()
    {
        $this->IncludeComponentTemplate();
    }
}
