<?php

class ShortcodeProgressBars extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $this->arResult = $arParams;

        return $this->arParams;
    }

    public function  executeComponent()
    {
        $this->IncludeComponentTemplate();
    }
}



