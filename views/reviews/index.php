<?php
$this->registerCssFile('/css/otzyvy.css', ['depends' => ['app\assets\AppAsset']]);//Кидаем ниже файлов в ассете
$this->registerJsFile('/js/index.js',  ['depends' => 'app\assets\AppAsset']);
?>
<div id="otzyvy_slider_count">
      <div id="slider_count">
         <div class="row">
            <div class="col-1">
               <div id="otzyvy_Text6">
                  <span id="otzyvy_uid0">
                         <a href="<?= \yii\helpers\Url::home()?>" style="color: #ffffff; text-decoration: none;"
                         > Главная</a> / ОТЗЫВЫ
                  </span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="otzyvy_block13">
      <div id="block13">
         <div class="row">

            <div class="col-2">
                <?php  foreach ($reviews as $review): ?>
                    <?php

                    $img = $review->getImage();

                    ?>
               <div id="otzyvy_Text8">
                  <span id="otzyvy_uid7"><?= $review->name ?> | </span><span id="otzyvy_uid8"><?= $review->city ?></span>
               </div>
               <hr id="Line1">
               <div id="otzyvy_block2">
                  <div id="block2">
                     <div class="row">
                        <div class="col-1">
                           <div id="otzyvy_Shape1">
                              <img src="<?= '/' . $img->getPath() ?>" id="photo_rev" alt="">
                           </div>
                        </div>
                        <div class="col-2">
                           <div id="otzyvy_Text9">
                              <span id="otzyvy_uid9"><?= $review->otzyv ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="otzyvy_block1">
                  <div id="block1">
                     <div class="row">
                        <div class="col-1">
                        </div>
                     </div>
                  </div>
               </div>
                <?php endforeach; ?>
                <!-- Пагинация-->
                <?php
                echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages,
                    ]
                );
                ?>
                <!-- /Пагинация-->


                <div id="otzyvy_block1">
                    <div id="block1">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>

               <div id="otzyvy_Text1">
                  <span id="otzyvy_uid13">ОСТАВИТЬ ЗАЯВКУ</span>
               </div>
               <hr id="Line6">
               <div id="otzyvy_block52">
                  <div id="block52">
                     <div class="row">
                        <div class="col-1">
                        </div>
                     </div>
                  </div>
               </div>


                <?= \app\components\FormFooterWidget::widget();?>


            </div>

             <div class="col-1">
                 <?= \app\components\PlachkiWidget::widget();?>
                 <div id="otzyvy_Text11">
                     <span id="otzyvy_uid1">УСЛУГИ:</span>
                 </div>
                 <hr id="Line5">
                 <div id="otzyvy_block47">
                     <div id="block47">
                         <div class="row">
                             <div class="col-1">
                             </div>
                         </div>
                     </div>
                 </div>

                     <?= \app\components\LeftMenuWidget::widget();?>

                 <div id="otzyvy_block17">
                     <div id="block17">
                         <div class="row">
                             <div class="col-1">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div id="otzyvy_Text12">
                     <span id="otzyvy_uid2">СТАТЬИ:</span>
                 </div>
                 <hr id="Line4">
                 <div id="otzyvy_block46">
                     <div id="block46">
                         <div class="row">
                             <div class="col-1">
                             </div>
                         </div>
                     </div>
                 </div>


                 <?= \app\components\LatestArticlesWidget::widget();?>


                 <div id="otzyvy_block45">
                     <div id="block45">
                         <div class="row">
                             <div class="col-1">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
      </div>
   </div>