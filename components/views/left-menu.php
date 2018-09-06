<div id="site_CssMenu1">
<ul id="left_men">
    <?php foreach ( $menus as $menu):?>
    <li ><a href="<?= \yii\helpers\Url::to(['pages/index', 'alias' => $menu->pages->alias])?>
" target="_self"><?= $menu->name ?>"</a>
    </li>

    <?php endforeach;?>
</ul>
</div>