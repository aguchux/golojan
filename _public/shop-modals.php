<!-- Modals -->
<!-- quick view modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="quickview" tabindex="-1" aria-labelledby="quickview">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body my-6">
                <div class="row mb-n10">
                    <div class="col-xl-6 col-lg-6 mb-10">
                        <div class="product-detail_img vertical-slider_wrap">
                            <div class="swiper-container pd-vertical_slider lightgallery">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-img">
                                            <img src="<?= $assets ?>/themes/benito/images/products/product2.jpg" alt="Product Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-img">
                                            <img src="<?= $assets ?>/themes/benito/images/products/product3.jpg" alt="Product Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-img">
                                            <img src="<?= $assets ?>/themes/benito/images/products/product4.jpg" alt="Product Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vertical-slider_nav">
                                <div class="swiper-navination-vertical d-none d-md-inline-block">
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
                                            <img src="<?= $assets ?>/themes/benito/images/products/small/2.jpg" alt="Product Thumnail"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#?">
                                            <img src="<?= $assets ?>/themes/benito/images/products/small/3.jpg" alt="Product Thumnail"></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#?"><img src="<?= $assets ?>/themes/benito/images/products/small/4.jpg" alt="Product Thumnail"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-10">
                        <div class="content">
                            <h3 class="title">Leaf & Bean Electric Milk Frother & Warmer</h3>
                            <span class="price-lg regular-price mb-2 d-block">$83.90</span>
                            <p>
                                The Crown Summit Backpack is equally at home in a gym locker, study cube
                                or a pup tent, so be sure yours is packed with books, a bag lunch, water
                                bottles, yoga block, laptop, or whatever else you want in hand. Rugged
                                enough for day hikes and camping trips, it has two large zippered
                                compartments and padded, adjustable shoulder straps.
                            </p>
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
                                    <button class="btn btn-warning btn-hover-primary text-uppercase">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-hover-warning text-uppercase">Add to my wishlist</button>
            </div>
        </div>
    </div>
</div>

<!-- add to wishlist -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addtowishlist" tabindex="-1" aria-labelledby="addtowishlist">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="wishlist-modal">
                    <p>You must be logged in to manage your wishlist.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- adto cart -->
<!-- Modal -->
<div class="modal fade" id="add-to-cart" tabindex="-1" aria-labelledby="add-to-cart">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning border-bottom-0 justify-content-center">
                <span class="ion-android-done me-5"></span>
                <h4 class="modal-title text-center">Product successfully added to your shopping cart</h4>
                <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body p-5">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="product-image" src="<?= $assets ?>/themes/benito/images/products/product4.jpg" alt="img">
                            </div>
                            <div class="col-md-6">
                                <h6 class="product-name">Leaf & Bean Electric Milk Frother & Warmets</h6>
                                <ul class="quntity-list">
                                    <li>$83.90</li>
                                    <li>Quantity:2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cart-content">
                            <p class="title">There are 3 items in your cart.</p>
                            <p><span>Total products:</span> $218.70</p>
                            <p><span>Total shipping:</span>Free</p>
                            <p><span>Taxes:</span> $0.00</p>
                            <p><span>Total:</span> $218.70 (tax excl.)</p>
                            <div class="cart-content-btn">
                                <button class="btn btn-dark btn-hover-warning text-uppercase me-1" data-bs-dismiss="modal" aria-label="Close">Continue shopping</button>
                                <button class="btn btn-dark btn-hover-warning text-uppercase mt-3 mt-sm-0">Proceed to checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>