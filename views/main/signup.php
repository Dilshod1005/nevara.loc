<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * @var app\models\Signup $model;
 */
?>
<!-- Page Breadcrumb Start -->
<div class="main-breadcrumb mb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content text-center ptb-70">
                    <ul class="breadcrumb-list breadcrumb" style="justify-content: center">
                        <li><a href="<?=Url::to(['main/index'])?>">home</a></li>
                        <li><a href="#">account</a></li>
                        <li><a href="#">register</a></li>
                        <hr>
                        <?php if(Yii::$app->session->hasFlash('error')): ?>
                            <li><a><?=Yii::$app->session->getFlash('error')?></a></li>
                        <?php endif;  ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Page Breadcrumb End -->
<!-- Register Account Start -->
<div class="register-account">
    <div class="container">
        <div class="row">
            <div class="register-title">
                <h3 class="mb-10">HISOBNI RO‘YXATDAN OLISH</h3>
                <p class="mb-10">Agar sizda allaqachon bizda hisob qaydnomangiz bo'lsa, kirish sahifasiga kiring..</p>
            </div>
        </div>
        <!-- Row End -->
        <div class="row">
            <?php
            $f=ActiveForm::begin([
                'options'=>[
                    'id'=>'contact-form',
                    'class'=>'contact-form'
                ],
                'enableAjaxValidation'=>true
            ]);
            ?>
                <fieldset>
                    <legend>Shaxsiy ma'lumotlaringiz</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="f-name"><span class="require">*</span>FISH</label>
                        <div class="col-sm-10">
                           <?=$f->field($model,'fullname')->textInput(['autofocus'=>'on','required'=>true,'filter' => ['stripTags']]);?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="l-name"><span class="require">*</span>Yashash manzili:</label>
                        <div class="col-sm-10">
                            <?=$f->field($model,'address');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email"><span class="require">*</span>Telefon</label>
                        <div class="col-sm-10">
                            <?=$f->field($model,'phone');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="number"><span class="require">*</span>EMAIL pochtasi</label>
                        <div class="col-sm-10">
                            <?=$f->field($model,'email')->input('email');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="number"><span class="require">*</span>Hozirgi vaqt</label>
                        <div class="col-sm-10">
                            <?=$f->field($model,'date')->input('date');?>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd"><span class="require">*</span>Password:</label>
                        <div class="col-sm-10">
                            <?=$f->field($model,'password')->passwordInput();?>
                        </div>
                    </div>
<!--                    <div class="form-group">-->
<!--                        <label class="control-label col-sm-2" for="pwd-confirm"><span class="require">*</span>Confirm Password</label>-->
<!--                        <div class="col-sm-10">-->
<!--                            <input type="password" class="form-control" id="pwd-confirm" placeholder="Confirm password">-->
<!--                        </div>-->
<!--                    </div>-->
                </fieldset>
                <div class="buttons newsletter-input">
                    <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a>
                        <input type="checkbox" name="agree" value="1" required> &nbsp;
                        <?=Html::submitButton('Ma\'lumotlarni saqlash',['class'=>'btn btn-info btn-sm'])?>
                    </div>
                </div>

        </div>
        <?php
        ActiveForm::end();
        ?>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Register Account End -->