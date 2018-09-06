<div id="site_block44">
    <div id="block44">
        <div class="row">
            <div class="col-1">
                <?php foreach ($articles as $article) : ?>
                <div id="site_Text13">
                    <a href="<?= yii\helpers\Url::to(['article/single', 'id' => $article->id]) ?>" style="text-decoration: none;">
                    <span id="site_uid33"><?= $article->title ?></span>
                    </a>
                        <span id="site_uid33"> | <?= $article->data ?></span>

                </div>
                <div id="site_Text14">

                    <span id="site_uid34"><?=  mb_substr($article->content, 0, 300); ?>...</span>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>