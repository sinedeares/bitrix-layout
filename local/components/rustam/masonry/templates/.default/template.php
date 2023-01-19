<!-- Masonry -->
<section class="masonry">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>

    <? foreach ($arParams['masonry'] as $item)
        {
            $APPLICATION->IncludeComponent(
                    'rustam:masonry.item',
                    '',
                    $item
            );
        }
        ?>

</section><!-- /.masonry -->
