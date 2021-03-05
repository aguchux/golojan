<?php $MainCategories = $Core->MainCategories() ?>
<?php while ($maincat = mysqli_fetch_object($MainCategories)) :
    $SubCategories = $Core->SubCategories($maincat->id);
    $ThisCategories = $Core->SubCategories($maincat->id);
?>
    <!-- Product tab Start -->
    <section class="section-pt">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="title-section text-center text-lg-start">
                        <div class="row">
                            <!-- title section Start -->
                            <div class="col-12 col-lg-4">
                                <h3 class="title" title="<?= $maincat->category ?>"><?= $maincat->category ?></h3>
                            </div>
                            <!-- title section End -->
                            <div class="col-12 col-lg-8">
                                <ul class="nav nav-pills blue-pill product-tab-links mt-8 mt-lg-0 justify-content-md-right text-right">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#all-items-<?= $maincat->id ?>">See all Items</a></li>
                                    <?php while ($subcat = mysqli_fetch_object($SubCategories)) : ?>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#<?= "{$subcat->category}-{$subcat->id}" ?>"><?= $subcat->category ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-content">

                <div class="tab-pane fade show active" id="all-items-<?= $maincat->id ?>">
                    <div class="row mb-n7">
                        <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                            <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                                <img src="<?= $assets ?>/themes/benito/images/banner/9.jpg" alt="img">
                            </a>
                        </div>
                        <div class="col-lg-8 col-xl-9 custom-col-80 mb-7">
                            <div class="product-list-carousel">
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
                                            <!-- media-list -->
                                            <div class="media-list mb-4">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/1.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Scanpan Classic Covered Saute Pan 26cm</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                            <!-- media-list -->
                                            <div class="media-list">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/10.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Scanpan Classic Covered Saute Pan</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <!-- media-list -->
                                            <div class="media-list mb-4">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/4.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                            <!-- media-list -->
                                            <div class="media-list">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/5.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Royal Doulton 1815 Tableware Pasta Bowl</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <!-- media-list -->
                                            <div class="media-list mb-4">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/6.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                            <!-- media-list -->
                                            <div class="media-list">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/7.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <!-- media-list -->
                                            <div class="media-list mb-4">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/8.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                            <!-- media-list -->
                                            <div class="media-list">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/6.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                        </div>
                                        <!-- single slide End -->
                                        <!-- single slide Start -->
                                        <div class="swiper-slide">
                                            <!-- media-list -->
                                            <div class="media-list mb-4">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/2.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                            <!-- media-list -->
                                            <div class="media-list">
                                                <div class="media">
                                                    <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/3.jpg" alt="img">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="product-category" href="#?">Studio Design</a>
                                                        <h3 class="product-title">
                                                            <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                        </h3>
                                                        <span class="price-lg regular-price">$68.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- media-list end -->
                                        </div>
                                        <!-- single slide End -->
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <?php while ($thiscat = mysqli_fetch_object($ThisCategories)) : ?>
                    <div class="tab-pane fade show" id="<?= "{$thiscat->category}-{$thiscat->id}" ?>">
                        <div class="row mb-n7">
                            <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                                    <img src="<?= $assets ?>/themes/benito/images/banner/8.jpg" alt="img">
                                </a>
                            </div>
                            <div class="col-lg-8 col-xl-9 custom-col-80 mb-7">
                                <div class="product-list-carousel">
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
                                                <!-- media-list -->
                                                <div class="media-list mb-4">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/1.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Scanpan Classic Covered Saute Pan 26cm</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                                <!-- media-list -->
                                                <div class="media-list">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/10.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Scanpan Classic Covered Saute Pan</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                            </div>
                                            <!-- single slide End -->
                                            <!-- single slide Start -->
                                            <div class="swiper-slide">
                                                <!-- media-list -->
                                                <div class="media-list mb-4">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/4.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                                <!-- media-list -->
                                                <div class="media-list">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/5.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Royal Doulton 1815 Tableware Pasta Bowl</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                            </div>
                                            <!-- single slide End -->
                                            <!-- single slide Start -->
                                            <div class="swiper-slide">
                                                <!-- media-list -->
                                                <div class="media-list mb-4">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/6.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                                <!-- media-list -->
                                                <div class="media-list">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/7.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                            </div>
                                            <!-- single slide End -->
                                            <!-- single slide Start -->
                                            <div class="swiper-slide">
                                                <!-- media-list -->
                                                <div class="media-list mb-4">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/8.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                                <!-- media-list -->
                                                <div class="media-list">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/6.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                            </div>
                                            <!-- single slide End -->
                                            <!-- single slide Start -->
                                            <div class="swiper-slide">
                                                <!-- media-list -->
                                                <div class="media-list mb-4">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/2.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
                                                <!-- media-list -->
                                                <div class="media-list">
                                                    <div class="media">
                                                        <a class="thumb" href="single-product.html"><img src="<?= $assets ?>/themes/benito/images/products/small/3.jpg" alt="img">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="product-category" href="#?">Studio Design</a>
                                                            <h3 class="product-title">
                                                                <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                            </h3>
                                                            <span class="price-lg regular-price">$68.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- media-list end -->
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
    <?php $Self->addpart("add_banners_4_cols"); ?>
    <!-- Product tab End -->
<?php endwhile; ?>