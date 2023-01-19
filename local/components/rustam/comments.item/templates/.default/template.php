<? foreach ($arResult['comments'] as $key => $comment) : ?>
    <li>
        <a href="<?= $comment['link'] ?>" class="avatar"><img src="<?= $comment['avatar'] ?>" alt="avatar" /></a>
        <div class="comment">
            <h6><a href="<?= $comment['linkProfile'] ?>" class="author"><?= $comment['author'] ?></a></h6>
            <ul class="meta-list">
                <li><time class="meta"><?= $comment['date'] ?></time></li>
                <li><time class="meta" data-text="At"><?= $comment['time'] ?></time></li>
            </ul>
            <p>
                <?= $comment['comment'] ?>
            </p>
            <a href="#" class="btn btn-default btn-sm">Reply</a>
        </div>

        <? if ($comment['answers']) : ?>
            <? foreach ($comment['answers'] as $answers) : ?>
                <? $APPLICATION->IncludeComponent(
                    "rustam:comments",
                    ".default",
                    array(
                        "comments" => array(
                            0 => $answers,
                        ),
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>
            <? endforeach ?>
        <? endif ?>
    </li>
<? endforeach ?>