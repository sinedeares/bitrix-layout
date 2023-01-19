<?php

class CommentsItem extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $this->arResult['comments'] = $arParams['comments'];

        return $this->arParams;
    }
    public function executeComponent()
    {
        $this->IncludeComponentTemplate();
    }


}