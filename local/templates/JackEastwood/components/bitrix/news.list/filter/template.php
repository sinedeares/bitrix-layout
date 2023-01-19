<ul id="filter" class="filter">
    <? foreach ($arResult['ITEMS'] as $filter) : ?>
        <li>
            <a <?= $filter['PROPERTIES']['dataFilter']['VALUE'] ? "data-filter={$filter['PROPERTIES']['dataFilter']['VALUE']}" : '' ?>
                    class="<?= $filter['PROPERTIES']['classLink']['VALUE']?>" role="button"
                <?= $filter['PROPERTIES']['dataText']['VALUE'] ? "data-text={$filter['PROPERTIES']['dataText']['VALUE']}" : '' ?>>
                <?= $filter['PROPERTIES']['name']['VALUE'] ?>
            </a>
        </li>
    <? endforeach ?>
</ul>
