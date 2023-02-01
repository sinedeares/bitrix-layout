<header class="<?= $arParams['classHeader'] ?? '' ?>" role="banner">
    <div class="container">
        <div class="row">
            <div class="<?= $arParams['classDiv'] ?? '' ?>">

                <h1 class="<?= isset($arParams['classH1']) ? $arParams['classH1'] : 'page-title' ?>">
                    <?= $arParams['h1'] ?>
                </h1>

                <? if (isset($arParams['h4'])) : ?>
                    <h4 class="<?= $arParams['classH4'] ?>"><?=$arParams['h4']?></h4>
                <?endif;?>

                <? if (isset($arParams['customBlock'])) : ?>
                <<?= $arParams['customBlock']['tag'] ?> class="<?= $arParams['customBlock']['class'] ?? '' ?>">
                <?= $arParams['customBlock']['text'] ?></<?= $arParams['customBlock']['tag'] ?>>
            <? endif ?>
        </div>
    </div>
    </div>
</header>