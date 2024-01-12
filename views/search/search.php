<?php
/**
 * @var app\models\Category $model
 * @var app\models\Products $model
 * @var app\models\Products $search
 * @var yii\data\Pagination $page
 */
use yii\helpers\Url;
?>
<!-- Page Breadcrumb Start -->
<div class="main-breadcrumb mb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content text-center ptb-70">
                    <h1><?=$search?></h1>
                    <ul class="breadcrumb-list breadcrumb" style="justify-content: center">
                        <li><a href="<?=Url::to(['main/index'])?>">Bosh sahiha</a></li>
                        <li><a href="#"><?=$search?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Breadcrumb End -->
<?php if (!empty($model)):?>
<div class="all-categories pb-100">
    <div class="container">
        <div class="row">
            <!-- Sidebar Content Start -->
            <div class="col-md-12 col-md-push-3">
                <!-- Sidebar Right Top Content Start -->
                <!-- Best Seller Product Start -->
                <div class="best-seller">
                    <div class="row mt-20">
                        <div class="col-md-3 col-sm-4 pull-left">
                            <div class="grid-list-view">
                                <ul class="list-inline">
                                    <li class="active"><a data-toggle="tab" href="#grid-view" aria-expanded="true"><i class="zmdi zmdi-view-dashboard"></i><i class="pe-7s-keypad"></i></a></li>
                                    <li><a data-toggle="tab" href="#list-view" aria-expanded="false"><i class="zmdi zmdi-view-list"></i><i class="pe-7s-menu"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab-content categorie-list ">
                                <div id="list-view" class="tab-pane fade">
                                    <div class="row">
                                        <!-- Main Single Product Start -->
                                        <?php foreach ($model as $k=>$v):?>
                                            <div class="main-single-product fix">
                                                <div class="col-sm-4">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="product-page.html">
                                                                <img class="primary-img" src="/img/new-products/2_1.jpg" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                            </div>
                                                            <?php if ($v['new']):?>
                                                                <span class="sticker-new">new</span>
                                                            <?php else:?>

                                                            <?php endif;?>
                                                        </div>
                                                        <!-- Product Image End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                                <div class="col-sm-8">
                                                    <!-- Product Content Start -->
                                                    <div class="thubnail-desc fix">
                                                        <h4 class="product-header"><a href="product-page.html"><?=$v['name']?></a></h4>
                                                        <!-- Product Price Start -->
                                                        <div class="pro-price mb-15">
                                                            <ul class="pro-price-list">
                                                                <li class="price">$<?=$v['sum']?></li>
                                                                <li class="mtb-50">
                                                                    <p><?=substr($v['content'],0,150).'...'?></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Product Price End -->
                                                        <!-- Product Button Actions Start -->
                                                        <div class="product-button-actions">
                                                            <button class="add-to-cart" data-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                            <a href="wish-list.html" data-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i class="pe-7s-like"></i></a>
                                                            <button data-toggle="tooltip" title="Compare this Product" class="same-btn"><i class="pe-7s-repeat"></i></button>
                                                        </div>
                                                        <!-- Product Button Actions End -->
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                            </div>
                                        <?php endforeach;?>

                                    </div>
                                    <!-- Row End -->
                                    <div class="row mt-40 mb-70">
                                        <div class="col-sm-6">
                                            <?php
                                            echo \yii\widgets\LinkPager::widget([
                                                'pagination'=>$page
                                            ])
                                            ?>
                                            <!-- End of .blog-pagination -->
                                        </div>
                                        <div class="col-sm-6">

                                            <!-- Pro List Details End -->
                                        </div>
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- #list-view End -->
                                <div id="grid-view" class="tab-pane fade in active mt-40">
                                    <div class="row">
                                        <?php foreach ($model as $k=>$v):?>
                                            <div class="col-md-4 col-sm-6">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <!-- Product Image Start -->
                                                    <div class="pro-img">
                                                        <a href="product-page.html">
                                                            <img class="primary-img" src="/img/new-products/1_1.jpg" alt="single-product">
                                                            <img class="secondary-img" src="/img/new-products/1_2.jpg" alt="single-product">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                        </div>
                                                        <?php if ($v['new']):?>
                                                            <span class="sticker-new">new</span>
                                                        <?php else:?>

                                                        <?php endif;?>
                                                    </div>
                                                    <!-- Product Image End -->
                                                    <!-- Product Content Start -->
                                                    <div class="pro-content text-center">
                                                        <h4><a href="product-page.html"><?=$v['name']?></a></h4>
                                                        <p class="price"><span>$<?=$v['sum']?></span></p>
                                                        <div class="action-links2">
                                                            <a data-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                        </div>
                                                    </div>
                                                    <!-- Product Content End -->
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        <?php endforeach;?>

                                    </div>
                                    <!-- Row End -->
                                    <div class="row mt-40 mb-70">
                                        <div class="col-sm-6">
                                            <?php
                                            echo \yii\widgets\LinkPager::widget([
                                                'pagination'=>$page
                                            ])
                                            ?>
                                            <!-- End of .blog-pagination -->
                                        </div>

                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- #Grid-view End -->
                            </div>
                            <!-- .Tab Content End -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Best Seller Product End -->
            </div>
            <!-- Sidebar Content End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<?php else:?>
<div class="container">
 <h6 class="alert alert-danger">
    Bunday mahsulot topilmadi!
 </h6>
</div>
<?php endif;?>
