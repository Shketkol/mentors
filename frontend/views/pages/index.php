<?php
use yii\helpers\Html;

?>
<!-- Start slider  -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <!-- Top slider -->
        <div class="aa-top-slider">
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="img/mentor-home.jpg" alt="img">
            </div>
            <!-- / Top slider single slide -->
        </div>
    </div>
</section>
<!-- End slider  -->

<!-- Advance Search -->
<section id="aa-advance-search">
    <div class="container">
        <div class="aa-advance-search-area">
            <?= Html::beginForm(\yii\helpers\Url::to('/mentors/'), 'get') ?>
            <div class="aa-advance-search-top">
                <div class="row">
                    <div class="col-md-3">
                        <div class="aa-single-advance-search">
                            <?= Html::dropDownList('tehnologis', '', [
                                '1' => 'Java',
                                '2' => 'Java Script',
                                '3' => 'PHP',
                                '4' => 'C#',
                            ], ['', 'prompt' => 'Технология']) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="aa-single-advance-search">
                            <?= Html::dropDownList('price', '', [
                                '0' => 'Бесплатно',
                                '1-10' => '1-10',
                                '10-30' => '10-30',
                                '30-50' => '30-50',
                                '51' => '>50',
                            ], ['', 'prompt' => 'Цена за урок']) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="aa-single-advance-search">
                            <select>
                                <option value="0" selected>Type</option>
                                <option value="1">Flat</option>
                                <option value="2">Land</option>
                                <option value="3">Plot</option>
                                <option value="4">Commercial</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="aa-single-advance-search">
                            <?=Html::submitInput('Search', ['class' => 'aa-search-btn']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?=Html::endForm() ?>
        </div>
    </div>
    </div>
</section>
<!-- / Advance Search -->

<!-- About us -->
<section id="aa-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-about-us-area">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="aa-about-us-left">
                                <img src="img/about-us.png" alt="image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="aa-about-us-right">
                                <div class="aa-title">
                                    <h2>About Us</h2>
                                    <span></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos
                                    vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero
                                    corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum
                                    assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque
                                    expedita! Corporis, provident?</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / About us -->

<!-- Latest property -->
<section id="aa-latest-property">
    <div class="container">
        <div class="aa-latest-property-area">
            <div class="aa-title">
                <h2>Новые менторы</h2>
                <span></span>

                <p>Здесь отображаются менторы, которые только что добавились в систему</p>
            </div>
            <div class="aa-latest-properties-content">
                <div class="row">
                    <?php foreach ($latest as $user) { ?>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="/img/upload/<?= $user['id'] ?>/<?= $user['image'] ?>" alt="img">
                                </a>

                                <div class="aa-tag for-sale">
                                    <?= $user['price'] ?>
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <?php foreach ($user['tehnologis'] as $teh) { ?>
                                        <span><?= $teh['type'] ?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#"><?= $user['name'] ?> <?= $user['lastName'] ?></a></h3>

                                        <p><?= $user['description'] ?></p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <a href="/mentors/view?id=<?=$user['id']?>" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Latest property -->

<!-- Service section -->
<section id="aa-service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-service-area">
                    <div class="aa-title">
                        <h2>Our Service</h2>
                        <span></span>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero
                            voluptatibus.</p>
                    </div>
                    <!-- service content -->
                    <div class="aa-service-content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Property Sale</a></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus
                                            quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Property Rent</a></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus
                                            quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-crosshairs"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Property Development</a></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus
                                            quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-bar-chart-o"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Market Analysis</a></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus
                                            quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Service section -->

<!-- Promo Banner Section -->
<section id="aa-promo-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-banner-area">
                    <h3>Find Your Best Property</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis quibusdam
                        numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius repellat id!</p>
                    <a href="#" class="aa-view-btn">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo Banner Section -->


<!-- Client Testimonial -->
<section id="aa-client-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-client-testimonial-area">
                    <div class="aa-title">
                        <h2>What Client Say</h2>
                        <span></span>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis
                            animi ipsum, veritatis!</p>
                    </div>
                    <!-- testimonial content -->
                    <div class="aa-testimonial-content">
                        <!-- testimonial slider -->
                        <ul class="aa-testimonial-slider">
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="img/testimonial-1.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                            consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                            voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt
                                            fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>David Muller</p>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="img/testimonial-3.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                            consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                            voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt
                                            fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>David Muller</p>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="img/testimonial-2.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                            consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                            voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt
                                            fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>David Muller</p>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Testimonial -->

<!-- Client brand -->
<section id="aa-client-brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-client-brand-area">
                    <ul class="aa-client-brand-slider">
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-1.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-2.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-3.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-5.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-4.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-1.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-2.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-3.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-5.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-4.png" alt="brand image">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Client brand -->

<!-- Latest blog -->
<section id="aa-latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-latest-blog-area">
                    <div class="aa-title">
                        <h2>Latest News</h2>
                        <span></span>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe magni, est harum repellendus.
                            Accusantium, nostrum!</p>
                    </div>
                    <div class="aa-latest-blog-content">
                        <div class="row">
                            <!-- start single blog -->
                            <div class="col-md-4">
                                <article class="aa-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/blog-img-1.jpg" alt="img"></a>
                                        <span class="aa-date-tag">15 April, 16</span>
                                    </figure>
                                    <div class="aa-blog-single-content">
                                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat
                                            magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum
                                            tempore dolores itaque, molestias vitae.</p>

                                        <div class="aa-blog-single-bottom">
                                            <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                            <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <!-- start single blog -->
                            <div class="col-md-4">
                                <article class="aa-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/blog-img-2.jpg" alt="img"></a>
                                        <span class="aa-date-tag">15 April, 16</span>
                                    </figure>
                                    <div class="aa-blog-single-content">
                                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat
                                            magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum
                                            tempore dolores itaque, molestias vitae.</p>

                                        <div class="aa-blog-single-bottom">
                                            <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                            <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- start single blog -->
                            <div class="col-md-4">
                                <article class="aa-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/blog-img-3.jpg" alt="img"></a>
                                        <span class="aa-date-tag">15 April, 16</span>
                                    </figure>
                                    <div class="aa-blog-single-content">
                                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat
                                            magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum
                                            tempore dolores itaque, molestias vitae.</p>

                                        <div class="aa-blog-single-bottom">
                                            <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                            <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
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
</section>
<!-- / Latest blog -->