<aside class="sidebar row" role="complementary">
    <div class="widget text-justify col-md-4 col-lg-12">
        <h5 class="small-title">Text Widget</h5>
        <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are.</p>
    </div>
    <div class="widget small-12 col-md-4 col-lg-12">
        <h5 class="small-title">Latest post</h5>
        <?$APPLICATION->IncludeComponent(
            'rustam:latestposts', '',
        )?>
    </div>
    <div class="widget col-md-4 col-lg-12">
        <h5 class="small-title">Categories</h5>
        <?$APPLICATION->IncludeComponent(
            'rustam:categorieslist', '',
        )?>
    </div>
    <div class="widget col-md-4 col-lg-12">
        <h5 class="small-title">Tags</h5>
        <?$APPLICATION->IncludeComponent(
            'rustam:tagslist', '',
        )?>
    </div>

    <div class="widget col-md-4 col-lg-12">
        <h5 class="small-title">Subscribe</h5>
        <!-- Subscribe Form -->
        <? $APPLICATION->IncludeComponent("bitrix:main.feedback", "comingsoon_feedback", array(
            "USE_CAPTCHA" => "Y",
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "EMAIL_TO" => "my@email.com",
            "REQUIRED_FIELDS" => array("EMAIL")
        ),
        ); ?>
    </div>
</aside>