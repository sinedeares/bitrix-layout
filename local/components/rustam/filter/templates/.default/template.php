<ul <?= $arResult['id'] ? "id='{$arResult['id']}'" : '' ?> class="<?= $arResult['classList'] ?>">
    <? foreach ($arResult['filters'] as $filter) : ?>
        <li>
            <a <?= $filter['dataFilter'] ? "data-filter={$filter['dataFilter']}" : '' ?> class="<?= $arResult['classLink'] ?>" role="button" <?= $filter['dataText'] ? "data-text={$filter['dataText']}" : '' ?>>
                <?= $filter['title'] ?>
            </a>
        </li>
    <? endforeach ?>
</ul>