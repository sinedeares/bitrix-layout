<?

use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//APPLICATION->SetTitle("OutSider | Shortcodes");

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/shortcodes.css');
//Header
$APPLICATION->IncludeComponent(
    'rustam:header', '',
    [
        'classHeader' => 'site-header',
        'classDiv' => 'col-md-12',
        'h1' => 'Shortcodes',
        'classH1' => 'post-title',
        "h4" => "Showcase of Outsider's Elements",
        'classH4' => 'snserif'
    ]);
?>


<!-- Content -->
        <main class="main" role="main">
            <div class="container">
                <!-- Grid system -->
                <? $APPLICATION->IncludeComponent(
                        'rustam:shortcode.grid', ''
                );?>
                
                <!-- Slider -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.slider', ''
                );?>

                <!-- Typography -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.typography', ''
                );?>
                
                <!-- Cards: Services -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.cards.services', ''
                );?>
                
                <!-- Accordion Toggle -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.accordion', ''
                );?>

                <!-- Tabs -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.tabs', ''
                );?>

                <!-- Alerts -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.alerts', ''
                );?>

                <!-- Counters -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.counters', ''
                );?>

                <!-- Pricing Tables -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.pricingtables', ''
                );?>

                <!-- Progress Bars -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.progressbars', ''
                );?>

                <!-- Post Article -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.postarticle', ''
                );?>

                <!-- Buttons -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.buttons', ''
                );?>
                
                <!-- Icons -->
                <? $APPLICATION->IncludeComponent(
                    'rustam:shortcode.icons', ''
                );?>

            </div>
        </main>


        <!-- Scripts used in Shortcodes -->
        <script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/jquery.countTo.js"></script>
        <script>
            // Counters
            $('.number').appear(function () {
                $('.number').countTo();
            });
            // Progressbar
            $('.progress-wrap').appear(function () {
                $('.progress').each(function () {
                    var value = $(this).find('.progress-bar').attr('aria-valuenow');
                    $(this).find('.progress-bar').animate({
                        'width': value + '%'
                    }, 100, function () {
                        $(this).find('.bar-value').countTo({
                            from: 0,
                            to: value,
                            refreshInterval: 10
                        }).fadeTo(3300, 1);
                    });
                });
            });
            // Slick Slider
            $(document).ready(function () {
                $('.example-slider').slick({
                    slide: 'ul>li',
                    autoplay: true,
                    autoplaySpeed: 5000,
                    dots: true
                });
            });
        </script>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>
