<ul class="tags-list">
    <? foreach ($arResult['ITEMS'] as $tag) : ?>
        <li>
            <a href="<?= $tag['PROPERTIES']['link']['VALUE']?>" class="<?= $tag['PROPERTIES']['classLink']['VALUE']?>">
                <?= $tag['PROPERTIES']['name']['VALUE'] ?>
            </a>
        </li>
    <? endforeach ?>
</ul>
