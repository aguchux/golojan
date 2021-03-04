<!-- Product tab Start -->
<section class="section-pt">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <ul class="nav nav-pills product-tab-links2">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#newarrivals">New Arrivals</a></li>
                        <?php while ($top1cat = mysqli_fetch_object($tabbed_Top1Categories)) : ?>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#<?= "{$top1cat->top1cat}-{$maincat->id}" ?>"><?= $top1cat->category ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active " id="newarrivals">
                <div class="row mb-n7">
                    <div class="col-lg-5 col-xl-4 mb-7">
                        <div class="product-card-large">
                            <a class="thumb" href="single-product.html"><img class="d-block mx-auto" src="<?= $assets ?>/themes/benito/images/products/product-lg2.jpg" alt="img">
                            </a>
                            <div class="product-content">
                                <a class="product-category" href="#?">Studio Design</a>
                                <h3 class="product-title">
                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                </h3>
                                <span class="price-lg onsale-price d-block mb-7">$68.30</span>
                                <button class="product-btn-lg btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                    Add to cart
                                </button>
                            </div>
                            <!-- actions links start -->
                            <ul class="actions">
                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                            </ul>
                            <!-- actions links end -->
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8 mb-7 order-first order-lg-last">
                        <div class="product-carousel2">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product1.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                        <span class="badge bg-success">-5%</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product2.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                        <span class="badge bg-success">-9%</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Graphic Corner</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM100 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product3.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                        <span class="badge bg-success">-15%</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product12.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product4.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product5.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                        <span class="badge bg-success">-25%</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product10.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product11.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product6.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product7.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product8.jpg" alt="img">
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                        <div class="product-card">
                                            <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product12.jpg" alt="img">
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php while ($top2cat = mysqli_fetch_object($tabbed_Top2Categories)) : ?>
                <div class="tab-pane fade show" id="<?= "{$top2cat->category}-{$top2cat->id}" ?>">
                    <div class="row mb-n7">
                        <div class="col-lg-5 col-xl-4 mb-7">
                            <div class="product-card-large">
                                <a class="thumb" href="single-product.html"><img class="d-block mx-auto" src="<?= $assets ?>/themes/benito/images/products/product-lg2.jpg" alt="img">
                                </a>
                                <div class="product-content">
                                    <a class="product-category" href="#?">Studio Design</a>
                                    <h3 class="product-title">
                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                    </h3>
                                    <span class="price-lg onsale-price d-block mb-7">$68.30</span>
                                    <button class="product-btn-lg btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                        Add to cart
                                    </button>
                                </div>
                                <!-- actions links start -->
                                <ul class="actions">
                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                </ul>
                                <!-- actions links end -->
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8 mb-7 order-first order-lg-last">
                            <div class="product-carousel2">
                                <div class="d-none d-sm-block swiper-navination-arrows">
                                    <div class="swiper-button-prev">
                                        <span class="ion-android-arrow-back"></span>
                                    </div>
                                    <div class="swiper-button-next">
                                        <span class="ion-android-arrow-forward"></span>
                                    </div>
                                </div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <div class="product-list">
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product1.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                            <span class="badge bg-success">-5%</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixer</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product2.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                            <span class="badge bg-success">-9%</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Graphic Corner</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">KitchenAid Artisan KSM100 Stand Mixer</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <div class="product-list">
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product3.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                            <span class="badge bg-success">-15%</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product12.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <div class="product-list">
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product4.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product5.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                            <span class="badge bg-success">-25%</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <div class="product-list">
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product10.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product11.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixe</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <div class="product-list">
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product6.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                                <div class="product-card">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product7.jpg" alt="img">
                                                        <div class="onsales-badges">
                                                            <span class="badge bg-dark">new</span>
                                                        </div>
                                                    </a>
                                                    <div class="product-content">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                        </h3>
                                                        <span class="price regular-price">$68.30</span>
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                    <!-- actions links start -->
                                                    <ul class="actions">
                                                        <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                        <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                    <!-- actions links end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product8.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/product12.jpg" alt="img">
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                        <!-- single slide End -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>
<!-- Product tab End -->