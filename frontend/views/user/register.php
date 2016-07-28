<?php
use yii\bootstrap\ActiveForm;
?>
<div class="content">
    <section id="aa-signin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-signin-area">
                        <div class="aa-signin-form">
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
    </section>
</div>
<script>
    function user(){
        var user = document.getElementById("user");
        user.style.display = "block";
    }
</script>