<ul id="filter" class="filter">
    <li>
        <a data-filter="*" class="btn btn-filter" role="button" data-text="ALl"> All</a>
    </li>
    <? foreach ($arResult['ITEMS'] as $filter) : ?>

        <li id="<?= $this->GetEditAreaId($filter['ID']); ?>">
            <a <?= $filter['PROPERTIES']['dataFilter']['VALUE'] ? "data-filter={$filter['PROPERTIES']['dataFilter']['VALUE']}" : '' ?>
                    class="<?= $filter['PROPERTIES']['classLink']['VALUE']?>" role="button"
                <?= $filter['PROPERTIES']['dataText']['VALUE'] ? "data-text={$filter['PROPERTIES']['dataText']['VALUE']}" : '' ?>>
                <?= $filter['PROPERTIES']['name']['VALUE'] ?>
            </a>
        </li>
    <? endforeach ?>
</ul>
