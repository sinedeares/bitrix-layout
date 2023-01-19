<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<? if (!empty($arResult)): ?>
    <nav class="navbar navbar-default navbar-fixed-top <? $APPLICATION->ShowProperty('navClass'); ?>" role="navigation">
        <?
        global $USER;
        if ($USER->IsAdmin())
        {
            echo '<div id="panel">';
            $APPLICATION->ShowPanel();
        }
        ?>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">OutSider</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" role="menubar">
                    <?
                    $previousLevel = 0;
                    foreach ($arResult

                    as $arItem) : ?>

                    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) : ?>
                        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                    <? endif ?>

                    <? if ($arItem["IS_PARENT"]) : ?>

                    <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
                    <li class="dropdown" role="menuitem"><a href="<?= $arItem["LINK"] ?>" class="dropdown-toggle" data-toggle="dropdown"
                                                            role="button" aria-expanded="false"><?= $arItem["TEXT"] ?> <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <? else : ?>
                            <li li role="menuitem"><a href="<?= $arItem["LINK"] ?>"></a>
                                <ul>
                                    <? endif ?>

                                    <? else : ?>

                                        <? if ($arItem["PERMISSION"] > "D") : ?>

                                            <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
                                                <li role="menuitem"><a href="<?= $arItem["LINK"] ?>"
                                                                       class="<? if ($arItem["SELECTED"]) : ?>root-item-selected<? else : ?>root-item<? endif ?>"><?= $arItem["TEXT"] ?></a>
                                                </li>
                                            <? else : ?>
                                                <li role="menuitem"><a
                                                            href="<?= $arItem["LINK"] ?>" <? if ($arItem["SELECTED"]) : ?> class="item-selected" <? endif ?><?= $arItem["TEXT"] ?></a>
                                                </li>
                                            <? endif ?>

                                        <? endif ?>

                                    <? endif ?>

                                    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                                    <? endforeach ?>

                                    <? if ($previousLevel > 1) : //close last item tags
                                        ?>
                                        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                                    <? endif ?>

                                </ul>
                        </ul>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <? $APPLICATION->IncludeComponent(
                            'bitrix:main.share', 'share'
                        ); ?>
                    </li>
                    <li>
                        <? $APPLICATION->IncludeComponent(
                            'bitrix:search.form', 'search'
                        ); ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<? endif ?>