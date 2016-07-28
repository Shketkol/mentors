<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use frontend\assets\MainAsset;
use yii\bootstrap\ActiveForm;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->head() ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

</head>
<body class="aa-price-range">
<?php $this->beginBody() ?>

<!-- Pre Loader -->
<div id="aa-preloader-area">
    <div class="pulse"></div>
</div>
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="aa-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-left">
                                <div class="aa-telephone-no">
                                    <span class="fa fa-phone"></span>
                                    1-900-523-3564
                                </div>
                                <div class="aa-email hidden-xs">
                                    <span class="fa fa-envelope-o"></span> info@markups.com
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-right">
                                <?php if (Yii::$app->user->id) { ?>
                                    <a href="../user/profile" class="aa-register">Profile</a>
                                    <a href="../user/logout" class="aa-register">Logout</a>
                                <?php } else { ?>
                                <!--<a href="../user/register" class="aa-register">Register</a>
                                <a href="../user/login  " class="aa-login">Login</a>-->
                                    <a href="#myModal" data-toggle="modal" class="aa-login">Вход | Регистрация</a>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

<!-- Start menu section -->
<section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- Text based logo -->
                <a class="navbar-brand aa-logo" href="/"> Home <span>Property</span></a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                    <li class="active"><a href="/">Главная</a></li>
                    <li><a href="/mentors">Менторы</a></li>
                    <li><a href="404.html">Статьи</a></li>
                    <li><a href="contact.html">Контанты</a></li>
                    <li><a href="404.html">О нас</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu section -->


<?= $content ?>




<!-- Footer -->
<footer id="aa-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-footer-area">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-left">
                                <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-middle">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="aa-footer-right">
                                <a href="#">Home</a>
                                <a href="#">Support</a>
                                <a href="#">License</a>
                                <a href="#">FAQ</a>
                                <a href="#">Privacy & Term</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / Footer -->

<!-- Modal -->
<— Modal —>
<div class="modal" id="myModal" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-6 login">
                    <h4>Login</h4>
                    <form class="" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h4>New User Sign Up</h4>
                    <div class="mentors">
                        <div class="aa-signin-form-title">
                            <?php echo \frontend\widgets\AuthSocialNetworkWidget::widget()?>
                        </div>
                        <?php $form = ActiveForm::begin(['class'=>'contactform']); ?>
                        <div class="aa-single-field">
                            <?=$form->field($model, 'username')->textInput()->label('Логин <span class="required">*</span>')?>
                        </div>
                        <div class="aa-single-field">
                            <?= $form->field($model, 'email')->textInput()->label('E-mail <span class="required">*</span>')?>
                        </div>
                        <div class="aa-single-field">
                            <?= $form->field($model, 'password')->passwordInput()->label('Пароль <span class="required">*</span>') ?>
                        </div>
                        <div class="aa-single-field">
                            <?= $form->field($model, 'confirmPassword')->passwordInput()->label('Повторите пароль <span class="required">*</span>')?>
                        </div>
                        <div class="aa-single-field">
                            <?= $form->field($model, 'role')->dropDownList(['mentor' => 'Я ментор',
                                'user' => 'Пользователь',
                            ])->label('Роль') ?>
                        </div>
                        <div class="aa-single-submit">
                            <?=\yii\bootstrap\Html::submitInput('Зарегистрироваться', ['type'=>'submit']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
