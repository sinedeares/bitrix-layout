<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die;

?>
<div>
    <? foreach ($arResult['ITEMS'] as $item):?>
        <div><?= $item['PROPERTIES']['DOCUMENT']['VALUE'] ?></div>
    <? endforeach; ?>
</div>
