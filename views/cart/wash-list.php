<?php
use yii\helpers\Url;
/**
 * @var app\models\Products $model
 */
?>
<!-- Page Breadcrumb Start -->
<div class="main-breadcrumb mb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content text-center ptb-70">
                    <ul class="breadcrumb-list breadcrumb">
                        <li><a href="<?=Url::to(['main/index'])?>">Bosh sahifa</a></li>
                        <li><a href="<?=Url::to(['cart/cart'])?>">cart</a></li>
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
        <!-- Section Title Start -->
        <div class="section-title mb-50">
            <h2>Xarid Savatcha</h2>
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
                                <th class="product-remove">O'chirish</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($_SESSION['cart'] as $r): ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="/img/new-products/2_2.jpg" alt="cart-image" /></a>
                                    </td>
                                    <td class="product-name"><a href="#"><?=$r['name']?></a></td>
                                    <td class="product-price"><span class="amount">£<?=$r['sum']?></span></td>
                                    <td class="product-quantity"><input type="number" value="<?=$r['son']?>" /></td>
                                    <td class="product-subtotal">£<?=$r['son']*$r['sum']?></td>
                                    <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php endforeach;?>
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
                                        <td><span class="amount"><?=Yii::$app->controller->sonn;?></span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Umumiy Summa</th>
                                        <td>
                                            <strong><span class="amount">$<?=$_SESSION['cart.sum']?></span></strong>
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
