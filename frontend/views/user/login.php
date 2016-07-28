<?php
use yii\bootstrap\ActiveForm;
?>
<section id="aa-signin">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-signin-area">
                    <div class="aa-signin-form">
                        <div class="aa-signin-form-title">
                        </div>
                            <?php $form = ActiveForm::begin(['class'=>'contactform']); ?>
                            <div class="aa-single-field">
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="aa-single-field">
                                <?= $form->field($model, 'password')->passwordInput() ?>
                            </div>
                            <div class="aa-single-field">
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </div>
                            <div class="aa-single-submit">
                                <?=\yii\bootstrap\Html::submitInput('ВОЙТИ', ['type'=>'submit']) ?>
                                <p>У тебя нет акаунта? <a href="../user/register">ЗАРЕГИСТРИРОВАТСЯ</a></p>
                            </div>
                            <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>