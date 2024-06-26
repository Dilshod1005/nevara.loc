<?php
/**
 * @var app\models\Category $model
 * @var app\models\Products $model
 * @var yii\data\Pagination $page
 * @var app\views\main\index $content
 */
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\MenuWidgets;
use yii\bootstrap5\Modal;
$menu= new MenuWidgets();
AppAsset::register($this);

?>
<?php $this->beginPage() ?>

<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/icon/favicon.png">
    <!-- mobile menu css -->


    <!-- modernizr js -->
    <script src="<?=Url::base()?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Wrapper Start -->
<div class="wrapper home-3">
    <!-- Preloader Start -->
<!--    <div class="preloader">-->
<!--        <div class="loading-center">-->
<!--            <div class="loading-center-absolute">-->
<!--                <div class="object object_one"></div>-->
<!--                <div class="object object_two"></div>-->
<!--                <div class="object object_three"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Preloader End -->
    <!-- Newsletter Popup Start -->
<!--    <div class="popup_wrapper hidden-sm hidden-xs">-->
<!--        <div class="test">-->
<!--            <span class="popup_off">Close</span>-->
<!--            <div class="subscribe_area text-center">-->
<!--                <h2>Newsletter</h2>-->
<!--                <p>Subscribe to the Gatcomart mailing list to receive updates on new arrivals, special offers and other discount information.</p>-->
<!--                <div class="subscribe-form-group">-->
<!--                    <form action="#">-->
<!--                        <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">-->
<!--                        <button type="submit">subscribe</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--                <div class="subscribe-bottom mt-15">-->
<!--                    <input type="checkbox" id="newsletter-permission">-->
<!--                    <label for="newsletter-permission">Don't show this popup again</label>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Newsletter Popup End -->
    <!-- Header Area Start -->
    <header>
        <div class="container-fluid header-top-area header-sticky">
            <div class="row">
                <!-- Logo Start -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-5 full-col pl-0">
                    <div class="logo">
                        <a href="<?=Url::to(['main/index'])?>"><img src="/img/logo/logo.png" alt="brand-image"></a>
                    </div>
                </div>
                <!-- Logo End -->
                <div class="col-xs-12 visible-xs visible-control">
                    <ul class="search-form mobile-form">
                        <li>
                            <form action="#">
                                <input type="text" class="search" name="search" placeholder="Search for products...">
                            </form>
                            <i class="pe-7s-search"></i>
                        </li>
                    </ul>
                </div>
                <!-- Primary-Menu Start -->
                <div class="col-lg-7 col-md-7 col-sm-12  hidden-sm hidden-xs">
                    <div class="primary-menu">
                        <nav>
                            <ul class="primary-menu-list text-center">
                                <li><a href="<?=Url::to(['main/index'])?>">home</a>
                                    <!-- Home Version Dropdown Start -->

                                    <!-- Home Version Dropdown End -->
                                </li>

                                <li class="static-menu"><a href="#">Mahsulotlar<i class="pe-7s-angle-down"></i></a>
                                    <?=$menu->show();
                                    ?>

                                </li>
                                <li><a href="#">pages<i class="pe-7s-angle-down"></i></a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul class="ht-dropdown">
                                        <li><a href="categorie-page.html">shop</a></li>
                                        <li><a href="product-page.html">Product Details</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wish-list.html">wish list</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="privacy.html">Privacy Policy</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a href="about-us.html">about us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Primary-Menu End -->
                <!-- Header All Shopping Selection Start -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-7 full-col pr-0">
                    <div class="main-selection">
                        <ul class="selection-list text-right">
                            <!-- Searcch Box Start -->
                            <li class="hidden-control"><i class="pe-7s-search"></i>
                                <ul class="search-form ht-dropdown">
                                    <li>
                                        <form action="<?=Url::to(['search/search'])?>" method="get">
                                            <input type="search" class="search" name="search" placeholder="Searchch for products...">
                                        </form>
                                        <i class="pe-7s-search"></i>
                                    </li>
                                </ul>
                            </li>
                            <!-- Search Box End -->
                              <?php if(!Yii::$app->user->isGuest):?>
                                  <li><a href="<?=Url::to(['cart/wash-list'])?>"><i class="pe-7s-like"></i><span id="wash-lists"><?php
                                              echo Yii::$app->controller->sonn;
                                               ?>
                                          </span></a></li>
                                  <li><i class="pe-7s-shopbag"></i><span id="counter"><?php  echo Yii::$app->controller->sonn; ?></span>
                                      <ul class="ht-dropdown main-cart-box">
                                          <li style="height: 400px;overflow: auto">
                                              <?php foreach (Yii::$app->controller->model as $r): ?>
                                              <!-- Cart Box Start -->
                                              <div class="single-cart-box">
                                                  <div class="cart-img">
                                                      <a href="#"><img src="/img/menu/1.jpg" alt="cart-image"></a>
                                                  </div>
                                                  <div class="cart-content">
                                                      <h6><a href="#"><?=$r['name']?></a></h6>
                                                      <span><?=$r['son']?> × $<?=$r['sum']?></span>
                                                  </div>
                                                  <i class="pe-7s-close"></i>
                                              </div>
                                              <!-- Cart Box End -->
                                              <?php endforeach;?>
                                              <!-- Cart Footer Inner Start -->
                                              <div class="cart-footer fix">
                                                  <h5>total :<span class="f-right">$<?php
                                                          echo Yii::$app->controller->sum;
                                                  ?></span></h5>
                                                  <div class="cart-actions">
                                                      <a class="checkout" href="checkout.html">Checkout</a>
                                                  </div>
                                              </div>
                                              <!-- Cart Footer Inner End -->
                                          </li>
                                      </ul>
                                  </li>
                              <?php else :?>

                              <?php endif;?>
                            <!-- Dropdown Currency Selection Start -->
                            <li><i class="pe-7s-config"></i>
                                <ul class="ht-dropdown currrency">
                                    <li>
                                        <h3>currency</h3>
                                        <ul class="mb-15">
                                            <li>€ euro</li>
                                            <li>£ pound sterling</li>
                                            <li>$ us dollar</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3>language</h3>
                                        <ul class="mb-15">
                                            <li><img src="/img/menu/2.png" alt="menu-icon">english</li>
                                            <li><img src="/img/menu/1.png" alt="menu-icon">french</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3>my account</h3>
                                        <ul>
                                            <li><a href="<?=Url::to(['main/signup'])?>">Ro'yhatdan o'tish</a></li>
                                            <li><a href="account.html">My Account</a></li>
                                            <?php if(!Yii::$app->user->isGuest): ?>
                                            <li><a href="<?=Url::to(['main/logout'])?>">Chiqish(<?=Yii::$app->user->identity->fullname?>)</a></li>
                                            <?php else:?>
                                            <li><a href="<?=Url::to(['main/login'])?>">log in</a></li>
                                            <?php endif;?>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Dropdown Currency Selection End -->
                        </ul>
                    </div>
                </div>
                <!-- Header All Shopping Selection End -->
                <!-- Mobile Menu  Start -->
                <div class="mobile-menu visible-sm visible-xs">
                    <nav>
                        <ul>
                            <li><a href="#">Home</a>
                                <!-- Mobile Menu Dropdown Start -->
                                <ul>
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="home-2.html">Home Version 2</a></li>
                                    <li><a href="home-3.html">Home Version 3</a></li>
                                    <li><a href="home-4.html">Home Version 4</a></li>
                                </ul>
                                <!-- Mobile Menu Dropdown End -->
                            </li>
                            <li><a href="#">Furniture</a>
                                <!-- Mobile Menu Dropdown Start -->
                                <ul>
                                    <li><a href="#">sofas & loveseats</a>
                                        <!-- Mobile Menu Sub-Dropdown Start -->
                                        <ul>
                                            <li><a href="categorie-page.html">convallis neceros</a></li>
                                            <li><a href="categorie-page.html">Outdoor Rugs</a></li>
                                            <li><a href="categorie-page.html">Mice and Trackballs</a></li>
                                            <li><a href="categorie-page.html">Cameras</a></li>
                                        </ul>
                                        <!-- Mobile Menu Sub-Dropdown End -->
                                    </li>
                                    <li><a href="#">chairs & recliners</a>
                                        <!-- Mobile Menu Sub-Dropdown Start -->
                                        <ul>
                                            <li><a href="categorie-page.html">commodo nunc</a></li>
                                            <li><a href="categorie-page.html">dignissim porta</a></li>
                                            <li><a href="categorie-page.html">necvelit dignissim</a></li>
                                            <li><a href="categorie-page.html">venenatis lacinia</a></li>
                                        </ul>
                                        <!-- Mobile Menu Sub-Dropdown End -->
                                    </li>
                                </ul>
                                <!-- Mobile Menu Dropdown End -->
                            </li>
                            <li><a href="#">decor</a>
                                <!-- Mobile Menu Dropdown Start -->
                                <ul>
                                    <li><a href="#">art gallery</a>
                                        <!-- Mobile Menu Sub-Dropdown Start -->
                                        <ul>
                                            <li><a href="categorie-page.html">congue nonorna</a></li>
                                            <li><a href="categorie-page.html">Etiam sapien</a></li>
                                            <li><a href="categorie-page.html">Outdoor Lighting</a></li>
                                            <li><a href="categorie-page.html">sapien enim</a></li>
                                        </ul>
                                        <!-- Mobile Menu Sub-Dropdown End -->
                                    </li>
                                    <li><a href="#">lighting</a>
                                        <!-- Mobile Menu Sub-Dropdown Start -->
                                        <ul>
                                            <li><a href="categorie-page.html">commodo nunc</a></li>
                                            <li><a href="categorie-page.html">elementum dolor</a></li>
                                            <li><a href="categorie-page.html">ligula velvenen</a></li>
                                            <li><a href="categorie-page.html">Vestibulum tempor</a></li>
                                        </ul>
                                        <!-- Mobile Menu Sub-Dropdown End -->
                                    </li>
                                    <li><a href="#">rugs</a>
                                        <!-- Mobile Menu Sub-Dropdown Start -->
                                        <ul>
                                            <li><a href="categorie-page.html">blandit vehicula</a></li>
                                            <li><a href="categorie-page.html">Praesent molestie</a></li>
                                            <li><a href="categorie-page.html">sagittis ipsum</a></li>
                                            <li><a href="categorie-page.html">venenatis innunc</a></li>
                                        </ul>
                                        <!-- Mobile Menu Sub-Dropdown End -->
                                    </li>
                                    <li><a href="#">throw pillows</a>
                                        <!-- Mobile Menu Sub-Dropdown Start -->
                                        <ul>
                                            <li><a href="categorie-page.html">Fire Pits</a></li>
                                            <li><a href="categorie-page.html">Garden Accents</a></li>
                                            <li><a href="categorie-page.html">Outdoor Fountains</a></li>
                                            <li><a href="categorie-page.html">Patio Heaters</a></li>
                                        </ul>
                                        <!-- Mobile Menu Sub-Dropdown End -->
                                    </li>
                                </ul>
                                <!-- Mobile Menu Dropdown End -->
                            </li>
                            <li><a href="#">pages</a>
                                <!-- Home Version Dropdown Start -->
                                <ul>
                                    <li><a href="categorie-page.html">shop</a></li>
                                    <li><a href="product-page.html">Product Details</a></li>
                                    <li><a href="cart.html">cart</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wish-list.html">wish list</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                                <!-- Home Version Dropdown End -->
                            </li>
                            <li><a href="about-us.html">about us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu  End -->
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <?= $content;?>
    <!-- Footer Start -->
    <footer>
        <!-- Footer Middle Start -->
        <div class="footer-middle">
            <div class="container">
                <div class="container-footer ptb-100">
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="single-footer col-md-3 col-sm-6">
                            <div class="footer-logo">
                                <a href="#"><img class="img" src="/img/logo/logo.png" alt="logo-img"></a>
                            </div>
                            <div class="footer-content">
                                <p>We are a team of designers and developers that create high quality HTML, Magento, Prestashop, Opencart.</p>
                                <h5 class="contact-info mtb-10">contact info:</h5>
                                <ul class="footer-list first-content">
                                    <li><i class="pe-7s-map-marker"></i>Address will be here</li>
                                    <li><i class="pe-7s-mail"></i>your-email@example.com</li>
                                    <li><i class="pe-7s-call"></i>+00 123 45678</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="single-footer col-md-3 col-sm-6">
                            <h4 class="footer-title">information</h4>
                            <div class="footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">about us</a></li>
                                    <li><a href="#">delivery information</a></li>
                                    <li><a href="#">privacy policy</a></li>
                                    <li><a href="#">terms & conditions</a></li>
                                    <li><a href="#">warranty</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="single-footer col-md-3 col-sm-6">
                            <h4 class="footer-title">extras</h4>
                            <div class="footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">brands</a></li>
                                    <li><a href="#">gift certificates</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#">contact us</a></li>
                                    <li><a href="#">returns</a></li>
                                    <li><a href="#">Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="single-footer col-md-3 col-sm-6">
                            <h4 class="footer-title">NEWSLETTER</h4>
                            <div class="footer-content subscribe-form">
                                <p class="mb-25">Subscribe to our newsletter and get 10% off your first purchase</p>
                                <div class="subscribe-box">
                                    <form action="#">
                                        <input type="text" name="subscribe_email" id="subscribe_email" placeholder="Enter you email address here...">
                                        <input type="submit" class="submit" value="subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container Footer End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Footer Middle End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="container-footer ptb-30">
                    <div class="row">
                        <div class="col-sm-7">
                            <p class="text-left copyright-text">Copyright ©  <a target="_blank" href="#">Nevara</a> All Rights Reserved.</p>
                        </div>
                        <div class="col-sm-5">
                            <!-- Footer Social List Start -->
                            <div class="socila-footer">
                                <ul class="social-footer-list list-inline text-right">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Social List End -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container Footer End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer End -->
    <!-- Quick View Content Start -->
    <div class="modal modal-box fade" id="myModal" role="dialog">
        <!-- Modal Dialog Box Start -->
        <div class="modal-dialog max-width">
            <!-- Modal content Start -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body Start -->
                <div class="modal-body">
                    <div class="quiick-view-details">
                        <!-- Product Thumbnail Start -->
                        <div class="main-product-thumbnail">
                            <div class="container">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-md-5 col-sm-6">
                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div id="thumb1" class="tab-pane fade in active">
                                                <img src="/img/new-products/1_1.jpg" alt="product-thumbnail"/>
                                            </div>
                                            <div id="thumb2" class="tab-pane fade">
                                                <img src="/img/new-products/1_2.jpg" alt="product-thumbnail"/>
                                            </div>
                                            <div id="thumb3" class="tab-pane fade">
                                                <img src="/img/new-products/2_1.jpg" alt="product-thumbnail"/>
                                            </div>
                                            <div id="thumb4" class="tab-pane fade">
                                                <img src="/img/new-products/2_2.jpg" alt="product-thumbnail"/>
                                            </div>
                                            <div id="thumb5" class="tab-pane fade">
                                                <img src="/img/new-products/3_1.jpg" alt="product-thumbnail"/>
                                            </div>
                                            <div id="thumb6" class="tab-pane fade">
                                                <img src="/img/new-products/3_2.jpg" alt="product-thumbnail"/>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->

                                        <!-- Thumbnail Image End -->
                                        <div class="Product Code: SAMI mt-15 mb-20">
                                            <div class="thumb-menu owl-carousel">
                                                <div class="active">
                                                    <a data-toggle="tab" href="#thumb1"> <img src="/img/new-products/1_1.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#thumb2"> <img src="/img/new-products/1_2.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#thumb3"> <img src="/img/new-products/2_1.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#thumb4"> <img src="/img/new-products/2_2.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#thumb5"> <img src="/img/new-products/3_1.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#thumb6"> <img src="/img/new-products/3_2.jpg" alt="product-thumbnail"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-md-7 col-sm-6 modal-one">
                                        <div class="thubnail-desc fix">
                                            <h2 class="product-header">Sheepskin Pillow2</h2>
                                            <!-- Product Rating Start -->
                                            <div class="rating-summary fix mtb-25">
                                                <div class="rating f-left mr-10">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-feedback f-left">
                                                    <a href="#">0 reviews</a> /
                                                    <a href="#">Write a review</a>
                                                </div>
                                            </div>
                                            <!-- Product Rating End -->
                                            <!-- Product Price Start -->
                                            <div class="pro-price mb-15">
                                                <ul class="pro-price-list">
                                                    <li class="price">$241.99</li>
                                                    <li class="tax">Ex Tax: $199.99</li>
                                                </ul>
                                            </div>
                                            <!-- Product Price End -->
                                            <!-- Product Price Description Start -->
                                            <div class="product-price-desc mb-10">
                                                <ul class="pro-desc-list">
                                                    <li>Product Code: <span>SAMI</span></li>
                                                    <li>Reward Points: <span>1000</span></li>
                                                    <li>Availability: <span>in Stock</span></li>
                                                </ul>
                                            </div>
                                            <!-- Product Price Description End -->
                                            <!-- Product Box Quantity Start -->
                                            <div class="box-quantity mb-30">
                                                <div class="quantity-item">
                                                    <label>Qty: </label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Box Quantity End -->
                                            <!-- Product Button Actions Start -->
                                            <div class="product-button-actions">
                                                <button class="add-to-cart">add to cart</button>
                                                <button data-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i class="pe-7s-like"></i></button>
                                                <button data-toggle="tooltip" title="Compare this Product" class="same-btn"><i class="pe-7s-repeat"></i></button>
                                            </div>
                                            <!-- Product Button Actions End -->
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                                <!-- Row End -->
                            </div>
                            <!-- Container End -->
                        </div>
                        <!-- Product Thumbnail End -->
                    </div>
                    <!-- Quick View Details End -->
                </div>
                <!-- Modal Body End -->
            </div>
            <!-- Modal Content End -->
        </div>
        <!-- Modal Dialog Box End -->
    </div>
    <!-- Quick View Content End -->
</div>
<!-- Wrapper End -->
<!-- jquery 3.12.4 -->
<?php
Modal::begin([
        'id'=>'modal_one',
        'size'=>'modal-lg'

]);
?>
  <div id="loading"></div>
<?php
Modal::end();
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>