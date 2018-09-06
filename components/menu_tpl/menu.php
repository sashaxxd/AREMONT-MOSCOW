<!--<li>-->
<!--    <a href="--><?//=  yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?><!--">-->
<!--        --><?//= $category['name']?>
<!--        --><?php //if( isset($category['childs']) ): ?>
<!--            <span class="badge pull-right"><i class="fa fa-plus"></i></span>-->
<!--        --><?php //endif;?>
<!--    </a>-->
<!--    --><?php //if( isset($category['childs']) ): ?>
<!--        <ul>-->
<!--            --><?//= $this->getMenuHtml($category['childs'])?>
<!--        </ul>-->
<!--    --><?php //endif;?>
<!--</li>-->


<div id="jquery-accordion-menu" class="jquery-accordion-menu green">
    <ul id="demo-list">

            <li><a href="javascript:void(0)"><i class="fa fa-cog"><?= $category['name']?></i></a>

                <?php if( isset($category['childs']) ): ?>
                <ul class="submenu">
                    <?= $this->getMenuHtml($category['childs'])?>
                </ul>
                <?php endif;?>
            </li>

    </ul>
</div>