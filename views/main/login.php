<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * @var app\models\LoginForm $model;
 */
?>
<!-- Page Breadcrumb Start -->
 <div class="main-breadcrumb mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content text-center ptb-70">
                            <ul class="breadcrumb-list breadcrumb">
                                <li><a href="<?=Url::to(['main/index'])?>">home</a></li>
                                <li><a href="#">account</a></li>
                                <li><a href="<?=Url::to(['main/login'])?>">log in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Page Breadcrumb End -->
        <!-- LogIn Page Start -->
        <div class="log-in pb-100">
            <div class="container">
                <div class="row">
                    <!-- New Customer Start -->
                    <div class="col-sm-6">
                        <div class="well">
                            <div class="new-customer">
                                <h3>NEW CUSTOMER</h3>
                                <p class="mtb-10"><strong>Ro'yhatdan o'tish</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                                <a class="customer-btn" href="<?=Url::to(['main/signup'])?>">continue</a>
                            </div>
                        </div>
                    </div>
                    <!-- New Customer End -->
                    <!-- Returning Customer Start -->
                    <div class="col-sm-6">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10">RETURNING CUSTOMER</h3>
                                <p class="mb-10"><strong>I am a returning customer</strong></p>

                                    <?php $f = ActiveForm::begin([
                                        'options'=>[
                                            'id'=>'contact-form',
                                            'class'=>'contact-form'
                                        ]

                                    ]); ?>
                                    <div class="form-group">

                                        <?=$f->field($model,'email')->input('email',['required'=>true,'placeholder'=>'Email addresni kiriting']) ?>
                                    </div>
                                    <div class="form-group">

                                        <?=$f->field($model,'password')->passwordInput(['required'=>true]); ?>
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.html">Forgot password?</a></p>
                                    <?= Html::submitButton('Login', ['class' => 'return-customer-btn' ]) ?>

                                    <?php ActiveForm::end(); ?>

                            </div>
                        </div>
                    </div>
                    <!-- Returning Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- LogIn Page End -->