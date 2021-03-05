<?php

$shopaccid = $Self->shopaccid;

$ThisUser = $Core->UserInfo($shopaccid);
$ThisStore = $Core->StoreInfo($shopaccid);
$ThisWallet = $Core->WalletInfo($shopaccid);
$ThisLocation = $Core->LocationInfo($ThisUser->location);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= domain ?>" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $assets ?>/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $assets ?>/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $assets ?>/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $assets ?>/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $assets ?>/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $assets ?>/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $assets ?>/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $assets ?>/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $assets ?>/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $assets ?>/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $assets ?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $assets ?>/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $assets ?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= $assets ?>/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $assets ?>/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="transparent">
    <!-- Favicon -->

    <!-- CSS  -->
    <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/vendor/ionicons.css">
    <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/vendor/linearicons-free.css">
    <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/plugins/animate.min.css">
    <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/style.css">
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!--  Minified  css  -->
    <!--  # vendor min css,plugins min css,style min css -->
    <!-- <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="<?= $assets ?>/themes/benito/css/style.min.css" /> -->
    <!-- CSS  -->

    <!-- SEO  -->

    <!-- Primary Meta Tags -->

    <title><?= $title ?></title>
    <meta property="title" content="<?= seo_title ?>">
    <meta property="description" content="<?= seo_description ?>">
    <meta property="keywords" content="<?= seo_keywords ?>">
    <meta name="title" content="<?= seo_title ?>">
    <meta name="description" content="<?= seo_description ?>">
    <meta name="keywords" content="<?= seo_keywords ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= og_url ?>">
    <meta property="og:title" content="<?= og_title ?>">
    <meta property="og:description" content="<?= og_description ?>">
    <meta property="og:image" content="<?= og_image ?>">
    <meta name="og:type" content="website">
    <meta name="og:url" content="<?= og_url ?>">
    <meta name="og:title" content="<?= og_title ?>">
    <meta name="og:description" content="<?= og_description ?>">
    <meta name="og:image" content="<?= og_image ?>">
    <!-- Open Graph / Facebook -->

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= twitter_url ?>">
    <meta property="twitter:title" content="<?= twitter_title ?>">
    <meta property="twitter:description" content="<?= twitter_description ?>">
    <meta property="twitter:image" content="<?= twitter_image ?>">
    <meta property="twitter:image:alt" content="<?= twitter_image_alt ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= twitter_url ?>">
    <meta name="twitter:title" content="<?= twitter_title ?>">
    <meta name="twitter:description" content="<?= twitter_description ?>">
    <meta name="twitter:image" content="<?= twitter_image ?>">
    <meta name="twitter:image:alt" content="<?= twitter_image_alt ?>">
    <!-- Twitter -->

</head>

<body>

    <!-- offcanvas-overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas-overlay end -->



    <!-- DrawerMenu -->
    <div class="modal fade offcanvas-modal" id="exampleModal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="#" class="offcanvas-form">
                    <div class="input-group border">
                        <div class="input-group-text">
                            <select class="form-select d-none d-xl-block" aria-label="Default select example">
                                <option selected="">All categories</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <input type="text" class="form-control border-0" placeholder="Enter your search key ... ">
                        <div class="input-group-text">
                            <button class="btn-search btn btn-hover-primary" type="submit">
                                Search
                            </button>
                        </div>
                    </div>
                </form>

                <!-- offcanvas-mobile-menu start -->

                <nav id="offcanvasNav" class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">Home</a>
                            <!-- home sub menu -->
                            <ul>
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                                <li><a href="index-3.html">Home 3</a></li>
                                <li><a href="index-4.html">Home 4</a></li>
                            </ul>
                            <!-- home sub menu end-->
                        </li>
                        <li>
                            <a href="javascript:void(0)">shop</a>

                            <!-- shop mega menu -->

                            <ul>
                                <li>
                                    <a href="#">Shop Grid</a>
                                    <ul>
                                        <li>
                                            <a href="shop-grid-5-column.html">Shop Grid 5 Column</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-6-column.html">Shop Grid 6 Column</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop List</a>
                                    <ul>
                                        <li><a href="shop-grid-list.html">Shop List</a></li>
                                        <li>
                                            <a href="shop-grid-list-left-sidebar.html">Shop List Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Single</a>
                                    <ul>
                                        <li><a href="single-product.html">Shop Single</a></li>
                                        <li>
                                            <a href="single-product-configurable.html">Shop Variable</a>
                                        </li>
                                        <li>
                                            <a href="single-product-affiliate.html">Shop Affiliate</a>
                                        </li>
                                        <li><a href="single-product-group.html">Shop Group</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">other pages</a>
                                    <ul>
                                        <li><a href="about-us.html">About Page</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- shop mega menu end-->
                        </li>
                        <li>
                            <a href="javascript:void(0)">pages</a>
                            <!-- pages sub menu -->
                            <ul>
                                <li><a href="about-us.html">About Page</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="login.html">Login &amp; Register Page</a></li>
                                <li><a href="myaccount.html">Account Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                            </ul>
                            <!-- pages sub menu end-->
                        </li>
                        <li>
                            <a href="javascript:void(0)">Blog</a>
                            <!-- blog sub menu -->
                            <ul>
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul>
                                        <li>
                                            <a href="blog-grid-5-column.html">Blog Grid 5 column</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-6-column.html">Blog Grid 6 column</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul>
                                        <li>
                                            <a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog details</a>
                                    <ul>
                                        <li>
                                            <a href="blog-details-left-sidebar.html">Blog details Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-right-sidebar.html">Blog details Right Sidbar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- blog sub menu end-->
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>

                    <div class="offcanvas-social">
                        <ul>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-google"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- offcanvas-mobile-menu end -->
                <div class="header-top">
                    <p>
                        Email:
                        <a class="header-top-link" href="../../index.htm">hastech@gmail.com</a>
                    </p>
                    <p>Free Shipping for all Order of $99</p>

                    <ul id="offcanvas-menu2" class="blog-ctry-menu blog-ctry-menu2">
                        <li>
                            <a href="javascript:void(0)">My Account</a>
                            <ul class="category-sub-menu">
                                <li>
                                    <a href="account.html">account</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a href="login.html">Sign in</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0)">currency: USD $</a>
                            <ul class="category-sub-menu">
                                <li><a href="#">EUR €</a></li>
                                <li><a href="#">USD $</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img class="me-1" src="assets/images/flag/1.jpg" alt="img">English</a>
                            <ul class="category-sub-menu">
                                <li>
                                    <a href="#"><img src="assets/images/flag/1.jpg" alt="flags">language:
                                        English</a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/flag/2.jpg" alt="flags">
                                        Français</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <!-- Header  Start -->
    <header>



        <div id="active-sticky2" class="header-section bg-primary">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <!-- Header Logo Start -->
                    <div class="col-6 col-lg-3">
                        <div class="header-logo">
                            <a href="/"><img style="height: 70px;" class="my-n-5" src="<?= $assets ?>/themes/benito/images/logo/logo-white.png" alt="Golojan.com"></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-md-6 col-lg-4 mt-4 mt-md-0 d-none d-lg-block">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control border-0" placeholder="Enter your search key ... ">
                                <div class="input-group-text">
                                    <button class="btn-search btn btn-hover-dark" type="submit">
                                        Search Products
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="col-6 col-lg-5">
                        <div class="d-flex align-items-center justify-content-end justify-content-lg-between justify-content-xl-end">
                            <div class="d-none d-lg-flex flex-wrap">

                                <div class="media media-2 mx-5">
                                    <span class="lnr lnr-history"></span>
                                    <div class="media-body">
                                        <h4 class="title">35% Sales Commission</h4>
                                        <p>Start your own online shop</p>
                                    </div>
                                </div>

                                <div class="media media-2 mx-5">
                                    <span class="lnr lnr-history"></span>
                                    <div class="media-body">
                                        <h4 class="title">35% Sales Commission</h4>
                                        <p>Start your own online shop</p>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex align-items-center">
                                <div class="block-cart-btn-wrapp">
                                    <button class="cart-action">
                                        <span class="lnr lnr-cart"></span>
                                        <span class="badge bg-dark">0</span>
                                    </button>

                                    <div class="checkout-cart">
                                        <ul class="checkout-scroll">
                                            <li class="checkout-cart-list">
                                                <div class="checkout-img">
                                                    <img class="product-image" src="<?= $assets ?>/themes/benito/images/mini-cart/1.jpg" alt="img">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="checkout-block">
                                                    <a class="product-name" href="#">Leaf & Bean Electric Milk Frother & Warmets</a>
                                                    <span class="product-price">$75.10</span>
                                                    <a class="remove-cart" href="#">
                                                        <i class="fa fa-remove pull-xs-left"></i>
                                                    </a>
                                                    <div class="product-size">
                                                        <span>Size: S</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="checkout-cart-list">
                                                <div class="checkout-img">
                                                    <img class="product-image" src="<?= $assets ?>/themes/benito/images/mini-cart/2.jpg" alt="img">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="checkout-block">
                                                    <a href="#" class="product-name">Le Creuset Signature Cast Iron Round Casserole</a>
                                                    <span class="product-price">$70.90</span>
                                                    <a class="remove-cart" href="#">
                                                        <i class="fa fa-remove pull-xs-left"></i>
                                                    </a>
                                                    <div class="product-size">
                                                        <span>Size: S</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="list-group checkout-sub-total">
                                            <li class="list-group-item">
                                                <span>Subtotal</span>
                                                <span>$146.00</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span>shipping</span>
                                                <span>$7.00</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span>Taxes</span>
                                                <span>$0.00</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span>Total</span>
                                                <span>$153.00</span>
                                            </li>
                                        </ul>

                                        <!-- checkout-action button start -->
                                        <div class="checkout-action">
                                            <a href="checkout.html" class="btn btn-lg btn-primary d-block">Checkout</a>
                                        </div>
                                        <!-- checkout-action button end -->
                                    </div>

                                </div>
                                <button class="toggle toggle2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span class="icon-top"></span>
                                    <span class="icon-middle"></span>
                                    <span class="icon-bottom"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="active-sticky" class="header-top2 bg-primary-2 d-none d-lg-block">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-auto col-lg-9">
                        <nav class="main-menu d-none d-lg-flex align-items-center justify-content-center justify-content-xl-start">

                            <div class="vertical-menu vertical-menu2 d-none d-lg-block me-xl-10">
                                <button class="menu-btn d-flex">
                                    <span class="lnr lnr-text-align-left"></span>Browse categories
                                </button>
                                <?= $Core->MainMenuCategories() ?>
                                <!-- menu content -->
                            </div>
                            <ul class="d-flex">

                                <li class="main-menu-item"><a class="main-menu-link" href="#">Sell Here</a></li>

                                <li class="main-menu-item"><a class="main-menu-link" href="#">Pickup Branches</a></li>

                                <li class="main-menu-item"><a class="main-menu-link" href="#">Careers</a></li>
                                <li class="main-menu-item"><a class="main-menu-link" href="#">FAQs</a></li>
                                <li class="main-menu-item"><a class="main-menu-link" href="#">Support</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto col-lg-3">
                        <div class="header-top-nav">
                            <ul class="d-flex flex-wrap justify-content-center align-items-center justify-content-xl-end">
                                <li class="dropdown top-nav-item"><a class="top-nav-link" href="#" role="button" id="account" data-bs-toggle="dropdown">My Golojan <i class="ion-ios-arrow-down"></i></a>

                                    <!-- dropdown-menu start -->
                                    <ul class="dropdown-menu" aria-labelledby="account">
                                        <li><a class="dropdown-item" href="#">My account</a></li>
                                        <li><a class="dropdown-item" href="#">MyHQ & Backoffice</a></li>
                                        <li><a class="dropdown-item" href="#">Checkout</a></li>
                                        <li><a class="dropdown-item" href="#">Wishlist</a></li>
                                    </ul>
                                    <!-- dropdown-menu start -->
                                </li>

                                <li class="dropdown top-nav-item">
                                    <!-- <span>Currency: </span> -->
                                    <a class="top-nav-link" role="button" id="currency" data-bs-toggle="dropdown" href="#"><?= "{$ThisLocation->currency} {$ThisLocation->currency_code}"  ?></a>
                                </li>

                                <li class="dropdown top-nav-item"><img class="me-1" src="_store/flags/tiny/<?= $ThisLocation->flag ?>.png" alt="<?= $ThisLocation->location ?>">
                                    <!-- <span>Language: </span> -->
                                    <a class="top-nav-link" role="button" id="language" data-bs-toggle="dropdown" href="#"><?= $ThisLocation->location ?><i class="ion-ios-arrow-down"></i></a>
                                    <!-- dropdown-menu start -->
                                    <ul class="dropdown-menu" aria-labelledby="language">
                                        <?= $Core->LocationDropList() ?>
                                    </ul>
                                    <!-- dropdown-menu start -->
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Header  End -->


    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Header Menu End -->
                <div id="ctry-sticky" class="col-12 order-last">
                    <div class="mobile-category-nav d-lg-none pt-4">
                        <!--=======  category menu  =======-->
                        <div class="hero-side-category">
                            <!-- Category Toggle Wrap -->
                            <div class="category-toggle-wrap">
                                <!-- Category Toggle -->
                                <button class="more-btn more-btn2"><span class="lnr lnr-text-align-left"></span> All
                                    Categories</button>
                            </div>

                            <!-- Category Menu -->
                            <nav class="category-menu">
                                <ul>
                                    <li class="menu-item-has-children menu-item-has-children-1">
                                        <a href="#">Accessories &amp; Parts<i class="ion-ios-arrow-down"></i></a>
                                        <!-- category submenu -->
                                        <ul class="category-mega-menu category-mega-menu-1">
                                            <li><a href="#">Cables &amp; Adapters</a></li>
                                            <li><a href="#">Batteries</a></li>
                                            <li><a href="#">Chargers</a></li>
                                            <li><a href="#">Bags &amp; Cases</a></li>
                                            <li><a href="#">Electronic Cigarettes</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children menu-item-has-children-2">
                                        <a href="#">Camera &amp; Photo<i class="ion-ios-arrow-down"></i></a>
                                        <!-- category submenu -->
                                        <ul class="category-mega-menu category-mega-menu-2">
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Camcorders</a></li>
                                            <li><a href="#">Camera Drones</a></li>
                                            <li><a href="#">Action Cameras</a></li>
                                            <li><a href="#">Photo Studio Supplies</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children menu-item-has-children-3">
                                        <a href="#">Smart Electronics <i class="ion-ios-arrow-down"></i></a>
                                        <!-- category submenu -->
                                        <ul class="category-mega-menu category-mega-menu-3">
                                            <li><a href="#">Wearable Devices</a></li>
                                            <li><a href="#">Smart Home Appliances</a></li>
                                            <li><a href="#">Smart Remote Controls</a></li>
                                            <li><a href="#">Smart Watches</a></li>
                                            <li><a href="#">Smart Wristbands</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children menu-item-has-children-4">
                                        <a href="#">Audio &amp; Video <i class="ion-ios-arrow-down"></i></a>
                                        <!-- category submenu -->
                                        <ul class="category-mega-menu category-mega-menu-4">
                                            <li><a href="#">Televisions</a></li>
                                            <li><a href="#">TV Receivers</a></li>
                                            <li><a href="#">Projectors</a></li>
                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                            <li><a href="#">TV Sticks</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children menu-item-has-children-5">
                                        <a href="#">Portable Audio &amp; Video <i class="ion-ios-arrow-down"></i></a>
                                        <!-- category submenu -->
                                        <ul class="category-mega-menu category-mega-menu-5">
                                            <li><a href="#">Headphones</a></li>
                                            <li><a href="#">Speakers</a></li>
                                            <li><a href="#">MP3 Players</a></li>
                                            <li><a href="#">VR/AR Devices</a></li>
                                            <li><a href="#">Microphones</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children menu-item-has-children-6">
                                        <a href="#">Video Game <i class="ion-ios-arrow-down"></i></a>
                                        <!-- category submenu -->
                                        <ul class="category-mega-menu category-mega-menu-6">
                                            <li><a href="#">Handheld Game Players</a></li>
                                            <li><a href="#">Game Controllers</a></li>
                                            <li><a href="#">Joysticks</a></li>
                                            <li><a href="#">Stickers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Televisions</a></li>
                                    <li><a href="#">Digital Cameras</a></li>
                                    <li><a href="#">Headphones</a></li>
                                    <li><a href="#">Wearable Devices</a></li>
                                    <li><a href="#">Smart Watches</a></li>
                                    <li><a href="#">Game Controllers</a></li>
                                    <li><a href="#"> Smart Home Appliances</a></li>
                                    <li class="hidden" style="display: none;"><a href="#">Projectors</a></li>
                                    <li>
                                        <a href="#" id="more-btn"><i class="ion-ios-plus-empty"></i>
                                            More Categories</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>