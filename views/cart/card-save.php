<?php
use yii\helpers\Url;
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
                    <!-- Table Content Start -->
                    <div class="row">
                        <!-- Cart Button Start -->
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="buttons-cart">
                                <input type="submit" value="Update Cart" />
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <!-- Cart Button Start -->
                        <!-- Cart Totals Start -->
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="cart_totals">
                                <h2>Cart Totals</h2>
                                <br />
                                <table>
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Umumiy Soni</th>
                                        <td><span class="amount" id="total-count"><?=Yii::$app->controller->sonn;?></span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Umumiy Summa</th>
                                        <td>
                                            <strong><span class="amount">$<?= $sum ?></span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- Cart Totals End -->
                    </div>
                    <!-- Row End -->
                </form>
                <!-- Form End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>
<!-- cart-main-area & wish list end -->
