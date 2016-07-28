<?php
use yii\helpers\Html;

?>
<!-- Start Proerty header  -->
<section id="aa-property-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-property-header-inner">
                    <h2>Здесь Вы можете выбрать ментора по своим параметрам</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li class="active"><a href="/mentors">Поиск ментора</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Proerty header  -->
<!-- Start Properties  -->
<section id="aa-properties">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="aa-properties-content">
                    <!-- start properties content head -->
                    <div class="aa-properties-content-head">
                        <div class="aa-properties-content-head-left">
                            <?= Html::beginForm(\yii\helpers\Url::to('/mentors/'), 'get') ?>
                            <div class="aa-sort-form">
                                <label for="">Сортировка по:</label>
                                <?= Html::dropDownList('sort', '', [
                                    'name' => 'Имени',
                                    'price' => 'Цене',
                                    'date' => 'Дате',
                                ], ['', 'prompt' => 'Сортировка']) ?>
                            </div>
                            <?=Html::endForm() ?>
                        </div>
                        <div class="aa-properties-content-head-right">
                            <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                            <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
                        </div>
                    </div>
                    <!-- Start properties content body -->
                    <div class="aa-properties-content-body">
                        <ul class="aa-properties-nav">
                            <?php foreach ($user as $mentor) {
                                ?>
                            <li>
                                <article class="aa-properties-item">
                                    <a class="aa-properties-item-img" href="#">
                                        <img alt="img" src="/img/upload/<?=$mentor['id']?>/<?=$mentor['image']?>" width="100px" height="100px">
                                    </a>
                                    <div class="aa-tag for-rent">
                                        <?=$mentor['price']?> грн
                                    </div>
                                    <div class="aa-properties-item-content">
                                        <div class="aa-properties-info">
                                            <?php $path_tehnlogis = explode('.', $mentor['teh']);
                                                foreach ($path_tehnlogis as $value) {?>
                                                    <?php if($value==1) {?>
                                                    <?php } elseif ($value==2){?>
                                                        <span>Java</span>
                                                    <?php } elseif ($value==3){?>
                                                        <span>Java Script</span>
                                                    <?php } elseif ($value==4){?>
                                                        <span>HTML</span>
                                                    <?php } elseif ($value==5){?>
                                                        <span>CSS</span>
                                                    <?php } }  ?>
                                        </div>
                                        <div class="aa-properties-about">
                                            <h3><a href="#"><?=$mentor['name']?> <?=$mentor['lastName']?></a></h3>
                                            <p><?=$mentor['description']?></p>
                                        </div>
                                        <div class="aa-properties-detial">
                                            <a class="aa-secondary-btn" href="/mentors/view?id=<?=$mentor['id']?>">Просмотр</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- Start properties content bottom -->
                    <div class="aa-properties-content-bottom">
                        <?php echo \yii\widgets\LinkPager::widget([
                            'pagination' => $pages
                        ]) ?>
                    </div>
                </div>
            </div>
            <!-- Start properties sidebar -->
            <div class="col-md-4">
                <aside class="aa-properties-sidebar">
                    <!-- Start Single properties sidebar -->
                    <div class="aa-properties-single-sidebar">
                        <h3 align="center">Поиск ментора согласно параметрам</h3>
                        <?= Html::beginForm(\yii\helpers\Url::to('/mentors/'), 'get') ?>
                            <div class="aa-single-advance-search">
                                <?=Html::textInput('username','',['placeholder'=>'Поиск по имени'])?>
                            </div>
                            <div class="aa-single-advance-search">
                                <?= Html::dropDownList('tehnologis', '', [
                                    '1' => 'Java',
                                    '2' => 'Java Script',
                                    '3' => 'PHP',
                                    '4' => 'C#',
                                ], ['', 'prompt' => 'Технология']) ?>
                            </div>
                            <div class="aa-single-advance-search">
                                <?= Html::dropDownList('price', '', [
                                    '0' => 'Бесплатно',
                                    '1-10' => '1-10',
                                    '10-30' => '10-30',
                                    '30-50' => '30-50',
                                    '51' => '>50',
                                ], ['', 'prompt' => 'Цена за урок']) ?>
                            </div>
                            <div class="aa-single-advance-search">
                                <?=Html::submitInput('Поиск', ['class' => 'aa-search-btn']) ?>
                            </div>
                        <?=Html::endForm() ?>
                    </div>
                    <!-- Start Single properties sidebar -->
                    <div class="aa-properties-single-sidebar">
                        <h3 align="center">Самые популярные менторы</h3>
                        <?php foreach ($popMentors as $mentor) { ?>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/img/upload/<?=$mentor['id']?>/<?=$mentor['image']?>" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="/mentors/view?id=<?=$mentor['id']?>"><?=$mentor['username']?></a></h4>
                                <p><?=$mentor['description']?></p>
                                <span><?=$mentor['price']?></span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- / Properties  -->