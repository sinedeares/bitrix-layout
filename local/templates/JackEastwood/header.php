<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die;
    use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html class="no-js">
    <head>

        <title><?$APPLICATION->ShowTitle();?></title>

        <?
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString(' <meta name="author" content="Your Name">');

        Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>");
        Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>");

        Asset::getInstance()->addString('<link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/img/apple-touch-icon.png">');
        Asset::getInstance()->addString('<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/favicon.png">');

        ?>

        <?
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/font-awesome.min.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/linea-icomoon.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/magnific-popup.css');
        ?>

        <!-- Scripts
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/modernizr.js');


        Asset::getInstance()->addString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>');

        $path = SITE_TEMPLATE_PATH;
        Asset::getInstance()->addString("<script>window.jQuery || document.write('<script src= $path/js/vendor/jquery-1.11.3.min.js><\/script>')</script>");
        ?>


        <?
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.appear.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/imagesloaded.pkgd.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/isotope.pkgd.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.infinitescroll.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/slick.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.tweet.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.magnific-popup.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');

        ?>

        <?$APPLICATION->ShowHead();?>

    </head>
    <body>
    <? if ($APPLICATION->GetDirProperty('isMenuHidden')) {
        return;
    } else {
        $APPLICATION->IncludeComponent(

            'rustam:preloader', ''
        );
    }
    ?>

        <? if ($APPLICATION->GetDirProperty('isMenuHidden'))
        {
            return;
        }
        else
        {
            $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu",
                array(
                    "COMPONENT_TEMPLATE" => "menu",
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false
            );
        }
        ?>
