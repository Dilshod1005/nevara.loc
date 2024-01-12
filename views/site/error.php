<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Page Breadcrumb Start -->
<div class="main-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content text-center ptb-70">
                    <ul class="breadcrumb-list breadcrumb" style="justify-content: center">
                        <li><a href="<?=Url::to(['main/index'])?>">home</a></li>
                        <li><a href="#">error 404</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Page Breadcrumb End -->
<!-- Error 404 Area Start -->
<div class="error404-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-wrapper text-center">
                    <div class="error-text">
                        <h1>404</h1>
                        <h2><?= nl2br(Html::encode($message)) ?></h2>

                    </div>

                    <div class="error-button">
                        <a href="<?=Url::to(['main/index'])?>">Bosh sahifa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Error 404 Area End -->



