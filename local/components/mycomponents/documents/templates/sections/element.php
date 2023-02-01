<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die;

?>
<div>

    <? foreach ($arResult['ELEMENTS'] as $element):?>
        <a href="<?= $element['LINK']?>">
            <div><?= $element['NAME']?></div> </a> <br>
    <? endforeach; ?>


</div>
