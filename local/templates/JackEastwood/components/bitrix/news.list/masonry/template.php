<section class="masonry">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
    <? foreach ($arResult['ITEMS'] as $item) : ?>
        <div class="item <?= lcfirst($item['PROPERTIES']['category']['VALUE']) ?>" data-category="<?= lcfirst($item['PROPERTIES']['category']['VALUE']) ?>">
            <article class="post">
                <figure class="figure <?= $item['PROPERTIES']['formImage']['VALUE'] ?>">
                    <div class="img-trigger">
                        <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="img" />
                    </div>
                    <a href="/<?= $item['PROPERTIES']['link']['VALUE'] ?>" class="overlay-link"></a>
                </figure>
                <section class="post-content">
                    <h4 class="post-title">
                        <a href="/<?= $item['PROPERTIES']['link']['VALUE'] ?>"><?= $item['PROPERTIES']['title']['VALUE'] ?></a>
                    </h4>
                    <h6 class="category"><?= ucfirst($item['PROPERTIES']['category']['VALUE']) ?></h6>
                    <p><?= $item['PROPERTIES']['about']['VALUE'] ?></p>
                    <span class="meta comments">6 COMMENTS</span>
                </section>
            </article>
        </div>
    <? endforeach;?>
</section>