<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetTitle("OutSider | About Me");

//Header
$APPLICATION->IncludeComponent(
    'rustam:header', '',
    [
        'classHeader' => 'site-header',
        'classDiv' => 'col-md-12',
        'h1' => 'About Me',
        'customBlock' => ['text' => 'Not another blogger', 'tag' => 'p', 'class' => ''],
    ]);
?><main class="main" role="main">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:photo.detail",
	"figure",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "figure",
		"DETAIL_URL" => "",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "20",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PROPERTY_CODE" => array(0=>"figureClass",1=>"classImg",),
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N"
	)
);?>
		</div>
		<div class="col-md-8 col-md-offset-2">
            <article class="about">
			<h3 class="bold"><? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                array(
                        "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . "/includes/about/about_h3.php",
                )); ?></h3>
			<p>
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/about/about_p1.php",
                    )); ?>
			</p>
			<p>
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/about/about_p2.php",
                    )); ?>
			</p>
 </article>
			<!-- Twitter Carousel --> <article class="twitter-carousel">
			<h4>Latest Tweets</h4>
			<div class="twitter-feed">
			</div>
			 <!-- Twitter Feed --> </article>
		</div>
	</div>
</div>
 </main><?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>