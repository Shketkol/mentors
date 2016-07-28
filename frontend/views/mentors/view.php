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
                            <img src="/img/upload/<?=$user['id']?>/<?=$user['image']?>" alt="img">
                        </div>
                        <div class="aa-properties-info">
                            <?php if($user['name']&&$user['lastName']){ ?>
                                <h2><?= $user['name']?> <?= $user['lastName']?></h2>
                            <?php }?>
                            <?php if($user['username']){ ?>
                                <span class="aa-price">Логин: <?= $user['username']?></span>
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
                                <?php if(!empty($user[0])){ foreach($user[0] as $value){?>
                                        <li><?=$value['type']?></li>
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
                        <!-- Nearby properties -->
                        <div class="aa-nearby-properties">
                            <div class="aa-title">
                                <h2>Nearby Properties</h2>
                                <span></span>
                            </div>
                            <div class="aa-nearby-properties-area">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="aa-properties-item">
                                            <a class="aa-properties-item-img" href="#">
                                                <img alt="img" src="img/item/1.jpg">
                                            </a>
                                            <div class="aa-tag for-sale">
                                                For Sale
                                            </div>
                                            <div class="aa-properties-item-content">
                                                <div class="aa-properties-info">
                                                    <span>5 Rooms</span>
                                                    <span>2 Beds</span>
                                                    <span>3 Baths</span>
                                                    <span>1100 SQ FT</span>
                                                </div>
                                                <div class="aa-properties-about">
                                                    <h3><a href="#">Appartment Title</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                                </div>
                                                <div class="aa-properties-detial">
                            <span class="aa-price">
                              $35000
                            </span>
                                                    <a class="aa-secondary-btn" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="aa-properties-item">
                                            <a class="aa-properties-item-img" href="#">
                                                <img alt="img" src="img/item/2.jpg">
                                            </a>
                                            <div class="aa-tag for-sale">
                                                For Sale
                                            </div>
                                            <div class="aa-properties-item-content">
                                                <div class="aa-properties-info">
                                                    <span>5 Rooms</span>
                                                    <span>2 Beds</span>
                                                    <span>3 Baths</span>
                                                    <span>1100 SQ FT</span>
                                                </div>
                                                <div class="aa-properties-about">
                                                    <h3><a href="#">Appartment Title</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                                </div>
                                                <div class="aa-properties-detial">
                          <span class="aa-price">
                            $35000
                          </span>
                                                    <a class="aa-secondary-btn" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>

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
                        <a href="">Send user</a>
                        <h3>Populer Properties</h3>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="img/item/1.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <span>$65000</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="img/item/1.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <span>$65000</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="img/item/1.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <span>$65000</span>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- / Properties  -->