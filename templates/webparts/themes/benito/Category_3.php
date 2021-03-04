<?php
$Maincat3 = $Core->CategoryInfo(3);
$Categories_3A = $Categories_3B = $Core->SubCategoriesArray(3);
$AllCategories_3A = array();
$AllCategories_3B = array();
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
                            <h3 class="title" title="<?= $Maincat3->category ?>"><a href="#"><?= $Maincat3->category ?></a></h3>
                        </div>
                        <!-- title section End -->
                        <div class="col-12 col-lg-8">
                            <ul class="nav nav-pills blue-pill product-tab-links mt-8 mt-lg-0 justify-content-md-right text-right">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#allcategoryitems">See all Items</a></li>

                                <?php foreach ($Categories_3A as $category_3A) :
                                    $AllCategories_3A[] = $category_3A;
                                    $category_3AInfo = $Core->CategoryInfo($category_3A); ?>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#catitems_<?= "{$category_3AInfo->id}" ?>"><?= $category_3AInfo->category ?></a></li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">

            <div class="tab-pane fade show active" id="allcategoryitems">
                <div class="row mb-n7">
                    <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                        <a class="zoom-in text-center" href="#">
                            <img src="<?= $Maincat3->photo_small ?>" alt="<?= $Maincat3->category ?>">
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
                                    <?= $Core->MixedProductsByCategories($AllCategories_3A) ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php foreach ($Categories_3B as $category_3b) :
                $AllCategories_3B[] = $category_3b;
                $category_3bInfo = $Core->CategoryInfo($category_3b); ?>
                <div class="tab-pane fade" id="catitems_<?= "{$category_3bInfo->id}" ?>">
                    <div class="row mb-n7">
                        <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                            <a class="zoom-in text-center" href="#<?= $category_3b ?>">
                                <img src="<?= $category_3bInfo->photo_small ?>" alt="<?= $category_3bInfo->category ?>">
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
                                        <?= $Core->MixedProductsByCategory($category_3b) ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- Product tab End -->