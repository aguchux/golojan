<!-- bread-crumb2 start -->
<nav class="breadcrumb-section mb-3">
    <div class="container wrapper">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center">
                    <li class="breadcrumb-item"><a href="\">Home</a></li>
                    <li class="breadcrumb-item active text-black-100" aria-current="page"><?= $ProductInfo->name ?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- bread-crumb2 start -->

<div class="single-product-wrap">
    <div class="container wrapper">
        <div class="row mb-n10">
            <div class="col-lg-5 mb-10">
                <div class="product-detail_img vertical-slider_wrap2">
                    <div class="swiper-container pd-vertical_slider2 lightgallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-img">
                                    <img src="assets/images/products/product2.jpg" alt="Product Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-img">
                                    <img src="assets/images/products/product3.jpg" alt="Product Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-img">
                                    <img src="assets/images/products/product4.jpg" alt="Product Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vertical-slider_nav2">
                        <div class="swiper-navination-vertical2 d-none d-md-inline-block">
                            <div class="swiper-button-prev">
                                <span class="lnr lnr-chevron-up"></span>
                            </div>
                            <div class="swiper-button-next">
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#?">
                                    <img src="assets/images/products/small/2.jpg" alt="Product Thumnail"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#?">
                                    <img src="assets/images/products/small/3.jpg" alt="Product Thumnail"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#?"><img src="assets/images/products/small/4.jpg" alt="Product Thumnail"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mb-10">
                <div class="content">
                    <h3 class="title"><?= $ProductInfo->name ?></h3>
                    <p class="reference">Product Code: <strong><?= $ProductInfo->id ?></strong></p>
                    <a href="#" class="open-comment-form">Write a review</a>
                    <div class="mb-4">
                        <!-- <span class="old-price text-decoration-line-through">$87.80</span> -->
                        <span class="price-lg regular-price d-inline-block my-1"><?= $Core->ToMoney($ProductInfo->selling) ?></span>
                        <!-- <span class="badge bg-success">Save 6%</span> -->
                    </div>
                    <p class="border-bottom pb-4"><?= $ProductInfo->description ?></p>

                    <h4 class="modal-quantity">Quantity</h4>
                    <div class="product-count style d-flex my-4">
                        <div class="count d-flex">
                            <input type="number" min="1" max="100" step="1" value="1">
                            <div class="button-group">
                                <button class="count-btn increment">
                                    <span class="lnr lnr-chevron-up"></span>
                                </button>
                                <button class="count-btn decrement">
                                    <span class="lnr lnr-chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#add-to-cart" class="btn btn-warning btn-hover-primary text-uppercase">
                                Add to cart
                            </button>
                            <button class="btn btn-primary btn-hover-success text-uppercase">
                                Buy Now
                            </button>
                        </div>
                    </div>
                    <div>
                        <a href="#">Add to wishlist</a>
                        <a class="mx-2" href="#">My wishlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-py">
    <div class="container wrapper">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs single-product-tab justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#description" role="tab">Description</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#productdetails" role="tab">Product Details</a>
                    </li>
                    <li class="nav-item d-none" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab">Reviews</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="description" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <div class="single-product-desc">
                            <p><?= $ProductInfo->description ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="productdetails" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <div class="single-product-desc">
                            <div class="product-anotherinfo-wrapper">
                                <ul>
                                    <?php while($feature = mysqli_fetch_object($ProductFeatures)): ?>
                                    <li><span><?= $feature->feature_key ?></span> <?= $feature->feature_value ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade d-none" id="reviews" role="tabpanel">
                <div class="single-product-desc">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="assets/images/testimonial/1.png" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>
                                                Vestibulum ante ipsum primis aucibus orci
                                                luctustrices posuere cubilia Curae Suspendisse
                                                viverra ed viverra. Mauris ullarper euismod
                                                vehicula. Phasellus quam nisi, congue id nulla.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-review child-review">
                                    <div class="review-img">
                                        <img src="assets/images/testimonial/2.png" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>
                                                Vestibulum ante ipsum primis aucibus orci
                                                luctustrices posuere cubilia Curae Sus pen disse
                                                viverra ed viverra. Mauris ullarper euismod
                                                vehicula.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="ratting-form-wrapper">
                                <h3>Add a Review</h3>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="star-box">
                                            <span>Your rating:</span>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-10">
                                                    <input placeholder="Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-10">
                                                    <input placeholder="Email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                    <button type="submit" class="btn btn-warning btn-hover-primary text-uppercase">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>