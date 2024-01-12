<?php
use yii\helpers\Url;
/**
 * @var app\models\Category $model
 * @var app\models\Products $model
 * @var yii\data\Pagination $page
 */
?>
<?php if(!empty($product)): ?>
<div class="main-breadcrumb mb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content text-center ptb-70">
                    <h1><?=$model->name?></h1>
                    <ul class="breadcrumb-list breadcrumb " style="justify-content: center">
                        <li><a href="<?=Url::to(['index'])?>">bosh sahifa</a></li>
                        <li><a href="#"><?=$model->name?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Breadcrumb End -->
<!-- Categories Product Start -->
<div class="all-categories pb-100">
    <div class="container">
        <div class="row">
            <!-- Sidebar Content Start -->
            <div class="col-md-9 col-md-push-3">
                <!-- Sidebar Right Top Content Start -->
                <div class="sidebar-desc-content">
                    <p>Example of category description text</p><hr>
                </div>
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
                        <div class="col-md-4 col-sm-5 pull-right">
                            <select name="shorer" id="shorter" class="form-control select-varient">
                                <option value="#">Sort By:Default</option>
                                <option value="#">Sort By:Name (A - Z)</option>
                                <option value="#">Sort By:Name (Z - A)</option>
                                <option value="#">Sort By:Price (Low > High)</option>
                                <option value="#">Sort By:Price (High > Low)</option>
                                <option value="#">Sort By:Rating (Highest)</option>
                                <option value="#">Sort By:Rating (Lowest)</option>
                                <option value="#">Sort By:Model (A - Z)</option>
                                <option value="#">Sort By:Model (Z - A)</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-3 pull-right">
                            <select name="shorter" id="#" class="form-control select-varient">
                                <option value="#">Show: 9</option>
                                <option value="#">Show: 25</option>
                                <option value="#">Show: 50</option>
                                <option value="#">Show: 75</option>
                                <option value="#">Show: 100</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab-content categorie-list ">
                                <div id="list-view" class="tab-pane fade">
                                    <div class="row">
                                        <!-- Main Single Product Start -->
                                        <?php foreach ($product as $k=>$v):?>
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
                                                            <span class="sticker-new">new</span>
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
                                        <?php foreach ($product as $k=>$v):?>
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
                                                        <span class="sticker-new">new</span>
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
            <!-- Sidebar Start -->
            <div class="col-md-3 col-md-pull-9">
                <aside class="categorie-sidebar mb-100">
                    <!-- Categories Module Start -->
                    <div class="categorie-module mb-80">
                        <h3>categories</h3>
                        <ul class="categorie-list">
                            <li class="active"><a href="#">Furniture (19)</a>
                                <ul class="sub-categorie pl-30">
                                    <li><a href="#">Sofas & Loveseats (19)</a></li>
                                    <li><a href="#">Chairs & Recliners (19)</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sectionals (16)</a></li>
                            <li><a href="#">Decor (19)</a></li>
                            <li><a href="#">Decorative Accessories (19)</a></li>
                            <li><a href="#">Window Treatments (16)</a></li>
                            <li><a href="#">Bookshelves (16)</a></li>
                            <li><a href="#">Coffee & Accent Tables (17)</a></li>
                        </ul>
                    </div>
                    <!-- Categories Module End -->
                    <!-- Filter Option Start -->
                    <div class="flter-option mb-80">
                        <h3>PRICE FILTER</h3>
                        <form action="#">
                            <div id="slider-range"></div>
                            <input type="text" id="amount" class="amount" readonly>
                        </form>
                    </div>
                    <!-- Filter Option End -->
                    <!-- Categories Color Start -->
                    <div class="cat-color mb-80">
                        <h3>Color</h3>
                        <ul class="cat-color-list">
                            <li><a href="#">Black (13)</a></li>
                            <li><a href="#">Blue (13)</a></li>
                            <li><a href="#">Grey (13)</a></li>
                            <li><a href="#">Green (13)</a></li>
                            <li><a href="#">Red (13)</a></li>
                        </ul>
                    </div>
                    <!-- Categories Color End -->
                    <!-- Manufactures List Start -->
                    <div class="manufactures mb-80">
                        <h3>MANUFACTURERS</h3>
                        <ul class="manufactures-list">
                            <li><a href="#">Manufacturers 1 (14)</a></li>
                            <li><a href="#">Manufacturers 2 (13)</a></li>
                            <li><a href="#">Manufacturers 3 (13)</a></li>
                            <li><a href="#">Manufacturers 4 (14)</a></li>
                            <li><a href="#">Manufacturers 5 (13)</a></li>
                        </ul>
                    </div>
                    <!-- Manufactures List End -->
                    <!-- Most Viewed Product Start -->
                    <div class="most-viewed">
                        <h3>most viewed</h3>
                        <!-- Most Viewed Product Activation Start -->
                        <div class="most-viewed-product owl-carousel">
                            <!-- Triple Product Start -->
                            <div class="triple-product">
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/2_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                                        <p class="price"><span>$122.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/3_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/3_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product-page.html">congue sitamet</a></h4>
                                        <p class="price"><span>$2000.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/4_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product-page.html">dictum idrisus</a></h4>
                                        <p class="price"><span>$602.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Triple Product End -->
                            <!-- Triple Product Start -->
                            <div class="triple-product">
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/4_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                                        <p class="price"><span>$122.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/2_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product-page.html">congue sitamet</a></h4>
                                        <p class="price"><span>$2000.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/3_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/3_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product-page.html">dictum idrisus</a></h4>
                                        <p class="price"><span>$602.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Triple Product End -->
                            <!-- Triple Product Start -->
                            <div class="triple-product">
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/2_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                                        <p class="price"><span>$122.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/3_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/3_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="product-page.html">congue sitamet</a></h4>
                                        <p class="price"><span>$2000.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product mb-25">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product-page.html">
                                            <img class="primary-img" src="/img/new-products/4_1.jpg" alt="single-product">
                                            <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                        </a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <h4><a href="#">dictum idrisus</a></h4>
                                        <p class="price"><span>$602.00</span></p>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Triple Product End -->
                        </div>
                        <!-- Most Viewed Product Activation End -->
                    </div>
                    <!-- Most Viewed Product End -->
                </aside>
            </div>
            <!-- Sidebar End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>

<?php else:?>
    <div class="main-breadcrumb mb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-content text-center ptb-70">
                        <h1><?=$model->name?></h1>
                        <ul class="breadcrumb-list breadcrumb">
                            <li><a href="<?=Url::to(['index'])?>">bosh sahifa</a></li>
                            <li><a href="#"><?=$model->name?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Breadcrumb End -->
    <!-- Categories Product Start -->
    <div class="all-categories pb-100">
        <div class="container">
            <div class="row">
                <!-- Sidebar Content Start -->
                <div class="col-md-9 col-md-push-3">
                    <!-- Sidebar Right Top Content Start -->
                    <div class="sidebar-desc-content">
                        <p>Example of category description text</p><hr>
                    </div>
                    <!-- Sidebar Right Top Content Start -->
                  <p class="alert alert-danger"> Bu Categoryda mahsulot mavjud emas</p>
                </div>
                <!-- Sidebar Content End -->
                <!-- Sidebar Start -->
                <div class="col-md-3 col-md-pull-9">
                    <aside class="categorie-sidebar mb-100">
                        <!-- Categories Module Start -->
                        <div class="categorie-module mb-80">
                            <h3>categories</h3>
                            <ul class="categorie-list">
                                <li class="active"><a href="#">Furniture (19)</a>
                                    <ul class="sub-categorie pl-30">
                                        <li><a href="#">Sofas & Loveseats (19)</a></li>
                                        <li><a href="#">Chairs & Recliners (19)</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sectionals (16)</a></li>
                                <li><a href="#">Decor (19)</a></li>
                                <li><a href="#">Decorative Accessories (19)</a></li>
                                <li><a href="#">Window Treatments (16)</a></li>
                                <li><a href="#">Bookshelves (16)</a></li>
                                <li><a href="#">Coffee & Accent Tables (17)</a></li>
                            </ul>
                        </div>
                        <!-- Categories Module End -->
                        <!-- Filter Option Start -->
                        <div class="flter-option mb-80">
                            <h3>PRICE FILTER</h3>
                            <form action="#">
                                <div id="slider-range"></div>
                                <input type="text" id="amount" class="amount" readonly>
                            </form>
                        </div>
                        <!-- Filter Option End -->
                        <!-- Categories Color Start -->
                        <div class="cat-color mb-80">
                            <h3>Color</h3>
                            <ul class="cat-color-list">
                                <li><a href="#">Black (13)</a></li>
                                <li><a href="#">Blue (13)</a></li>
                                <li><a href="#">Grey (13)</a></li>
                                <li><a href="#">Green (13)</a></li>
                                <li><a href="#">Red (13)</a></li>
                            </ul>
                        </div>
                        <!-- Categories Color End -->
                        <!-- Manufactures List Start -->
                        <div class="manufactures mb-80">
                            <h3>MANUFACTURERS</h3>
                            <ul class="manufactures-list">
                                <li><a href="#">Manufacturers 1 (14)</a></li>
                                <li><a href="#">Manufacturers 2 (13)</a></li>
                                <li><a href="#">Manufacturers 3 (13)</a></li>
                                <li><a href="#">Manufacturers 4 (14)</a></li>
                                <li><a href="#">Manufacturers 5 (13)</a></li>
                            </ul>
                        </div>
                        <!-- Manufactures List End -->
                        <!-- Most Viewed Product Start -->
                        <div class="most-viewed">
                            <h3>most viewed</h3>
                            <!-- Most Viewed Product Activation Start -->
                            <div class="most-viewed-product owl-carousel">
                                <!-- Triple Product Start -->
                                <div class="triple-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/2_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                                            <p class="price"><span>$122.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/3_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/3_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="product-page.html">congue sitamet</a></h4>
                                            <p class="price"><span>$2000.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/4_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="product-page.html">dictum idrisus</a></h4>
                                            <p class="price"><span>$602.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Triple Product End -->
                                <!-- Triple Product Start -->
                                <div class="triple-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/4_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                                            <p class="price"><span>$122.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/2_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="product-page.html">congue sitamet</a></h4>
                                            <p class="price"><span>$2000.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/3_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/3_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="product-page.html">dictum idrisus</a></h4>
                                            <p class="price"><span>$602.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Triple Product End -->
                                <!-- Triple Product Start -->
                                <div class="triple-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/2_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                                            <p class="price"><span>$122.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/3_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/3_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="product-page.html">congue sitamet</a></h4>
                                            <p class="price"><span>$2000.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-25">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product-page.html">
                                                <img class="primary-img" src="/img/new-products/4_1.jpg" alt="single-product">
                                                <img class="secondary-img" src="/img/new-products/2_2.jpg" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <h4><a href="#">dictum idrisus</a></h4>
                                            <p class="price"><span>$602.00</span></p>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Triple Product End -->
                            </div>
                            <!-- Most Viewed Product Activation End -->
                        </div>
                        <!-- Most Viewed Product End -->
                    </aside>
                </div>
                <!-- Sidebar End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
<?php endif;?>
