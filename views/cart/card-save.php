<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * @var app\models\Products $model
 * @var app\models\Orders $order
 */
$son=0;
$sum=0;
?>
<!-- Page Breadcrumb Start -->
<div class="main-breadcrumb mb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content text-center ptb-70">
                    <ul class="breadcrumb-list breadcrumb"  style="justify-content: center">
                        <li><a href="<?=Url::to(['main/index'])?>">Bosh sahifa</a></li>
                        <li><a href="<?=Url::to(['cart/wash-list'])?>">Wash-List</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Page Breadcrumb End -->
<!-- cart-main-area & wish list start -->
<div class="cart-main-area pb-100">
    <div class="container">
        <div class="section-title mb-50">
            <h2>Buyrutma berish</h2>
            <?php if (Yii::$app->session->hasFlash('error')):?>
            <p class="alert alert-danger"><?=Yii::$app->session->getFlash('error');?></p>
            <?php endif;?>
        </div>
        <!-- Section Title Start End -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Form Start -->
                <form action="#">
                    <!-- Table Content Start -->
                    <div class="table-content table-responsive mb-50">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-thumbnail">Rasm</th>
                                <th class="product-name">Maxsulot</th>
                                <th class="product-price">Narxi</th>
                                <th class="product-quantity">Soni</th>
                                <th class="product-subtotal">Umumiy xarid summasi</th>

                            </tr>
                            </thead>
                            <tbody>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="/img/new-products/2_2.jpg" alt="cart-image" /></a>
                                    </td>
                                    <td class="product-name"><a href="#"><?=$order->name?></a></td>
                                    <td class="product-price"><span class="amount">£<?=$order->sum?></span></td>
                                    <td class="product-quantity"><input type="number" id="products_counts" value="<?=$order->son?>"/></td>
                                    <td class="product-subtotal">£<?=$order->son*$order->sum?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- Row End -->
                </form>
                <?php
                $f=ActiveForm::begin();
                echo $f->field($model,'fullname')->textInput(['value'=>Yii::$app->user->identity->fullname]);
                echo $f->field($model,'email')->textInput(['value'=>Yii::$app->user->identity->email]);
                echo $f->field($model,'phone')->textInput(['value'=>Yii::$app->user->identity->phone]);
                echo $f->field($model,'address')->textInput(['value'=>Yii::$app->user->identity->address]);
                echo $f->field($model,'son')->input('number',['value'=>$order->son,'class'=>'numbers form-control','readonly'=>true]);
                echo $f->field($model,'products_name')->textInput(['value'=>$order->name,'readonly'=>true]);
                echo $f->field($model,'sum')->textInput(['value'=>$order->sum,'readonly'=>true]);
                echo $f->field($model,'images')->textInput(['value'=>$order->images,'readonly'=>true]);
                echo \yii\helpers\Html::submitButton('Buyrutma berish',['class'=>'btn btn-info btn-sm']);
                ActiveForm::end();
                ?>
                <!-- Form End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>
<!-- cart-main-area & wish list end -->
