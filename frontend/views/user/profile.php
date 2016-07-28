<!-- Start Proerty header  -->

<section id="aa-property-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-property-header-inner">
                    <h2>Properties Details</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">HOME</a></li>
                        <li class="active">APPARTMENT TITLE</li>
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
                    <!-- Start properties content body -->
                    <div class="aa-properties-details">
                        <div class="aa-properties-details-img">
                            <img src="/img/upload/<?=Yii::$app->user->id?>/<?=$user['image']?>" alt="img">
                        </div>
                        <div class="aa-properties-info">
                            <?php if($user['name']&&$user['lastName']){ ?>
                                <h2><?= $user['name']?> <?= $user['lastName']?></h2>
                            <?php }?>
                            <?php if($user['username']){ ?>
                                <span class="aa-price">Ник: <?= $user['username']?></span>
                            <?php }?>

                            <br>
                            <span class="aa-price">Цена за урок: $65000</span>
                            <?php if($user['email']){ ?>
                                <h2>E-mail: <?=$user['email']?></h2>
                            <?php }?>
                            <h4>Описание навыков и опыта:</h4>
                            <?php if($user['description']){ ?>
                                <p><?= $user['description']?></p>
                            <?php }?>
                            <h4>Технологии:</h4>
                            <ul>
                                <?php if(!empty($user[0])){ foreach($user[0] as $key=>$value){?>
                                    <?php foreach($value as $value){?>
                                        <li><?=$value?></li>
                                    <?php } ?>
                                <?php } } ?>

                            </ul>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <!-- Properties social share -->
                        <div class="aa-properties-social">
                            <ul>
                                <li>Share</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Start properties sidebar -->
            <div class="col-md-4">
                <aside class="aa-properties-sidebar">
                    <!-- Start Single properties sidebar -->
                    <!-- Start Single properties sidebar -->
                    <div class="aa-properties-single-sidebar">
                        <a href="/user/edit">Редактировать профиль</a>
                        <br>
                        <a href="/user/edit">Мои собщения</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- / Properties  -->