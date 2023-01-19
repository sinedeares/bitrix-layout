<header class="<?= $arResult['classHeader'] ?? '' ?>" role="banner">
    <div class="container">
        <div class="row">
            <div class="<?= $arResult['classDiv'] ?? '' ?>">

                <h1 class="<?= isset($arResult['classH1']) ? $arResult['classH1'] : 'page-title' ?>">
                    <?= $arResult['h1'] ?>
                </h1>

                <? if (isset($arResult['h4'])) : ?>
                    <h4 class="<?= $arResult['classH4'] ?>"><?=$arResult['h4']?></h4>
                <?endif;?>

                <? if (isset($arResult['customBlock'])) : ?>
                <<?= $arResult['customBlock']['tag'] ?> class="<?= $arResult['customBlock']['class'] ?? '' ?>">
                <?= $arResult['customBlock']['text'] ?></<?= $arResult['customBlock']['tag'] ?>>
                <? endif ?>
            </div>
        </div>
    </div>
</header>