<div class="item <?= lcfirst($arParams['PROPERTIES']['category']['VALUE']) ?>" data-category="<?=
                                                        lcfirst($arParams['PROPERTIES']['category']['VALUE']) ?>">
    <article class="post">
        <figure class="figure <?= $arParams['PROPERTIES']['formImage']['VALUE'] ?>">
            <div class="img-trigger">
                <img src="<?= $arParams['PREVIEW_PICTURE']['SRC'] ?>" alt="img" />
            </div>
            <a href="/<?= $arParams['PROPERTIES']['link']['VALUE'] ?>" class="overlay-link"></a>
        </figure>
        <section class="post-content">
            <h4 class="post-title">
                <a href="/<?= $arParams['PROPERTIES']['link']['VALUE'] ?>"><?= $arParams['PROPERTIES']['title']['VALUE'] ?></a>
            </h4>
            <h6 class="category"><?= ucfirst($arParams['PROPERTIES']['category']['VALUE']) ?></h6>
            <p><?= $arParams['PROPERTIES']['about']['VALUE'] ?></p>
            <span class="meta comments">6 COMMENTS</span>
        </section>
    </article>
</div>


