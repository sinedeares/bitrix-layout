<?

use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetTitle("OutSider | Contact");


Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.validate.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/contact.js');
Asset::getInstance()->addString('<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/gmap3.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/mymap.js');


//Header
$APPLICATION->IncludeComponent(
    'rustam:header', 'contact',
    [
        'classHeader' => 'site-header',
        'h1' => 'Contact',
        'classDiv' => 'col-md-12',
        'customBlock' => ['tag' => 'address', 'class' => 'address', 'text' => '795 Folsom Ave, San Francisco, CA 94107', 'sliceTag' => 'br', 'aTag' => 'a',
            'href' => 'mailto:#', 'aText' => 'first.last@example.com',],
    ]);
?><!-- Content -->
<main class="main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="mymap" class="mymap">
                </div>
                <!-- Google Map -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <article class="contact">
                    <h3><? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/contact/contact_h3.php"
                            )
                        ); ?></h3>
                    <p>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/contact/contact_p.php"
                            )
                        ); ?>
                    </p>
                </article>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <? $APPLICATION->IncludeComponent("bitrix:main.feedback", ".default", array(
                            "USE_CAPTCHA" => "Y",
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "EMAIL_TO" => "my@email.com",
                            "REQUIRED_FIELDS" => Array("NAME","EMAIL","MESSAGE")
                        ),
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>Ц
</main><?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>