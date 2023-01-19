<ul class="comments-list">
    <? foreach ($arResult['comments'] as $key => $comment) : ?>
        <? $APPLICATION->IncludeComponent('rustam:comments.item', '', ['comments' => [$comment]]) ?>
    <? endforeach ?>
</ul>