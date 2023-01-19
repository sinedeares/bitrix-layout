<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<a href="#share-popup" class="iconized open-popup-link" data-toggle="tooltip" data-placement="bottom" title="Share"><i class="icon icon-share"></i></a>
<!-- Popup Content -->
<div id="share-popup" class="full-popup mfp-hide">
    <article class="share">
        <h3 class="snserif">Share this page</h3>
        <?php $APPLICATION->IncludeComponent(
            'rustam:socials',
            '',
            [
                'fa-facebook',
                'fa-twitter',
                'fa-pinterest',
                'fa-google-plus',
                'fa-tumblr',
                'fa-linkedin',
            ]
        ) ?>
    </article>
</div>
