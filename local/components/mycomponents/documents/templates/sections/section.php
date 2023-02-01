<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die;

?>
<div>

    <? foreach ($arResult['SECTIONS'] as $section):?>
    <a href="<?= $section['LINK']?>" download>
        <div><?= $section['NAME']?></div> </a> <br>
    <? endforeach; ?>


</div>
