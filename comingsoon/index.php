<? use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetTitle("OutSider | Coming Soon");

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.validate.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/contact.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.countdown.min.js');

?>
<!-- Coming Soon -->
<main class="main coming-soon flex flex-middle" role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="text-center">
                    <h1 class="page-title">Outsider</h1>
                    <h3 class="snserif">Will be back soon</h3>
                    <br />
                    <span id="timer" class="timer"></span>
                </section>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <? $APPLICATION->IncludeComponent("bitrix:main.feedback", "comingsoon_feedback", array(
                    "USE_CAPTCHA" => "Y",
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "EMAIL_TO" => "my@email.com",
                    "REQUIRED_FIELDS" => array("EMAIL")
                ),
                ); ?>
            </div>
        </div>
        <article class="principle sevena">
            <div class="shape-container">
                <div class="shape a"></div>
            </div>
        </article>
    </div>
</main>


<script>
    $('#timer').countdown('2015/12/31', function (event) {   //set date YYYY/MM/DD or YYYY/MM/DD HH:MM:SS
        var format = '%D days %H:%M:%S';
        $(this).html(event.strftime(format));
    });
</script>
