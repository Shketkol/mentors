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
                                    <h4>Редактирование профиля</h4>
                                </div>
                                <?php $form = ActiveForm::begin(['class'=>'contactform']); ?>
                                <div class="aa-single-field">
                                        <label for="name">Name <span class="required">*</span></label>
                                        <input type="text" required="required" aria-required="true" value="<?=$user['username']?>" name="name">
                                    </div>
                                    <div class="aa-single-field">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="email" required="required" aria-required="true" value="<?=$user['email']?>" name="email">
                                    </div>
                                    <div class="aa-single-field">
                                        <label for="description">Описание <span class="required">*</span></label>
                                        <input type="text"  value="<?=$user['description']?>" name="description">
                                    </div>
                                    <div class="aa-single-field">
                                        <?php foreach($tehnologis as $value){ ?>
                                            <input type="checkbox" name="<?=$value['type']?>" value="<?=$value['id']?>">
                                            <label for="type"><?=$value['type']?></label><br>
                                        <?php }  ?>
                                    </div>
                                    <div class="aa-single-submit">
                                        <?=\yii\bootstrap\Html::submitInput('Save', ['type'=>'submit']) ?>
                                    </div>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
