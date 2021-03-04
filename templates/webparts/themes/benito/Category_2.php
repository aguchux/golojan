<?php
$Maincat2 = $Core->CategoryInfo(2);
$Categories_2A = $Categories_2B = $Core->SubCategoriesArray(2);
$AllCategories_2A = array();
$AllCategories_2B = array();
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
                            <h3 class="title" title="<?= $Maincat2->category ?>"><a href="#"><?= $Maincat2->category ?></a></h3>
                        </div>
                        <!-- title section End -->
                        <div class="col-12 col-lg-8">
                            <ul class="nav nav-pills blue-pill product-tab-links mt-8 mt-lg-0 justify-content-md-right text-right">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#allcategoryitems">See all Items</a></li>

                                <?php foreach ($Categories_2A as $category_2A) :
                                    $AllCategories_2A[] = $category_2A;
                                    $category_2AInfo = $Core->CategoryInfo($category_2A); ?>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#catitems_<?= "{$category_2AInfo->id}" ?>"><?= $category_2AInfo->category ?></a></li>
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
                            <img src="<?= $Maincat2->photo_small ?>" alt="<?= $Maincat2->category ?>">
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
                                    <?= $Core->MixedProductsByCategories($AllCategories_2A) ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php foreach ($Categories_2B as $category_2b) :
                $AllCategories_2B[] = $category_2b;
                $category_2bInfo = $Core->CategoryInfo($category_2b); ?>
                <div class="tab-pane fade" id="catitems_<?= "{$category_2bInfo->id}" ?>">
                    <div class="row mb-n7">
                        <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                            <a class="zoom-in text-center" href="#<?= $category_2b ?>">
                                <img src="<?= $category_2bInfo->photo_small ?>" alt="<?= $category_2bInfo->category ?>">
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
                                        <?= $Core->MixedProductsByCategory($category_2b) ?>
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