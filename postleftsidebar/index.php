<?

use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetTitle("OutSider | Post");


Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.validate.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/contact.js');

//Header
$APPLICATION->IncludeComponent(
    'rustam:header', '',
    [
        'h1' => 'Accessories for her',
        'classH1' => 'post-title',
        'h4' => 'Design',
        'classH4' => 'category',
        'classHeader' => 'site-header',
        'classDiv' => 'col-xs-12',
        'customBlock' => ['text' => 'November 23, 2014', 'tag' => 'time', 'class' => 'meta'],
    ]);
?>

<!-- Content -->
        <main class="main" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
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
                                    "bitrix:news.list",
                                    "taglist",
                                    array(
                                        "ACTIVE_DATE_FORMAT" => "",
                                        "ADD_SECTIONS_CHAIN" => "Y",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_NOTES" => "",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "CLASS_LINK" => "btn btn-filter",
                                        "CLASS_WRAPPER" => "filter",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array(
                                            0 => "NAME",
                                            1 => "",
                                        ),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "4",
                                        "IBLOCK_TYPE" => "content",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "20",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array(
                                            0 => "name",
                                            1 => "",
                                        ),
                                        "SET_BROWSER_TITLE" => "Y",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "Y",
                                        "SET_META_KEYWORDS" => "Y",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ID",
                                        "SORT_BY2" => "ID",
                                        "SORT_ORDER1" => "ASC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N",
                                    ),
                                    false
                                );?>
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
                    </div>

                    <div class="col-lg-9">
                        <!-- Post -->
                        <article class="post">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:photo.detail",
                                "figure",
                                array(
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
                                    "FIELD_CODE" => array(
                                        0 => "PREVIEW_PICTURE",
                                        1 => "",
                                    ),
                                    "IBLOCK_ID" => "3",
                                    "IBLOCK_TYPE" => "content",
                                    "MESSAGE_404" => "",
                                    "META_DESCRIPTION" => "-",
                                    "META_KEYWORDS" => "-",
                                    "PROPERTY_CODE" => array(
                                        0 => "classImg",
                                        1 => "figureClass",
                                        2 => "",
                                    ),
                                    "SECTION_CODE" => "",
                                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
                                    "SECTION_URL" => "",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N"
                                ),
                                false
                            ); ?>
                            <section class="post-content">
                                <p>The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die.
                                </p>
                                <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.</p>
                                <? $APPLICATION->IncludeComponent('rustam:post.blockquote', '');?>
                                <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.</p>
                                <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.</p>
                            </section>
                        </article>

                        <!-- Comments -->
                        <article class="comments">
                            <h4>3 Comments</h4>
                            <? $APPLICATION->IncludeComponent(
                                'rustam:comments',
                                '',
                                [
                                    'comments' =>
                                        [
                                            [
                                                'link' => '#', 'avatar' =>  SITE_TEMPLATE_PATH . "/img/avatars/avatar1.jpg", 'author' => 'John McClane', 'linkProfile' => '#', 'time' => '6:35 pm', 'date' => 'November 23, 2014',
                                                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda mollitia saepe rem libero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fusce nec mollis odio. Quisque vel enim malesuada, euismod felis ut, rhoncus magna.',
                                                'answers' => [
                                                    [
                                                        'link' => '#', 'avatar' =>  SITE_TEMPLATE_PATH . "/img/avatars/avatar2.jpg", 'author' => 'Patricia Graham', 'linkProfile' => '#', 'time' => '6:35 pm', 'date' => 'November 23, 2014',
                                                        'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda mollitia saepe rem libero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fusce nec mollis odio. Quisque vel enim malesuada, euismod felis ut, rhoncus magna.',
                                                        'answers' => false,
                                                    ]
                                                ],
                                            ],
                                            [
                                                'link' => '#', 'avatar' =>  SITE_TEMPLATE_PATH . "/img/avatars/avatar3.jpg", 'author' => 'Daniel Willis', 'linkProfile' => '#', 'time' => '6:35 pm', 'date' => 'November 23, 2014',
                                                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda mollitia saepe rem libero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fusce nec mollis odio. Quisque vel enim malesuada, euismod felis ut, rhoncus magna.', 'answers' => false,
                                            ]
                                        ]
                                ]
                            )
                            ?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="leave-reply">
                                        <button id="comment-fade" class="btn btn-default">Leave a Reply</button>
                                        <? $APPLICATION->IncludeComponent("bitrix:main.feedback", "reply", array(
                                            "USE_CAPTCHA" => "Y",
                                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                            "EMAIL_TO" => "my@email.com",
                                            "REQUIRED_FIELDS" => array("NAME", "EMAIL", "MESSAGE")
                                        ),
                                        ); ?>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Pagination -->
                        <?$APPLICATION->IncludeComponent(
                            'rustam:pagination','',
                        );?>

                    </div>
                </div>
            </div>
        </main>


<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>