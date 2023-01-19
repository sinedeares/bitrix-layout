<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<li class="dropdown" role="menuitem">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <?= $arResult['title'] ?>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
        <? foreach ($arResult['submenu'] as $submenu) : ?>
            <li role="menuitem"><a href="<?= $submenu['link'] ?>"><?= $submenu['title'] ?></a></li>
        <? endforeach ?>
    </ul>
</li>