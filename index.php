<?php
include './config.php';
ob_start();
?>


<div class="fe-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ">
                <div class="fe-hero-section-banner-outer">
                    <div class="fe-hero-section-banner">
                        <img src="<?= $base_url ?>assets/images/banners/SmallBanner-1.jpg" />
                        <div class="fe-hero-section-banner-overlay">
                            <h4>50% OFF</h4>
                            <h5>NEW COLLECTION</h5>
                            <button class="btn btn-sm btn-outline-white btn-rounded">SHOW NOW</button>
                        </div>
                    </div>
                    <div class="fe-hero-section-banner">
                        <img src="<?= $base_url ?>assets/images/banners/SmallBanner-1.jpg" />
                        <div class="fe-hero-section-banner-overlay">
                            <h4>50% OFF</h4>
                            <h5>NEW COLLECTION</h5>
                            <button class="btn btn-sm btn-outline-white btn-rounded">SHOW NOW</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="fe-hero-slider">
                    <div class="fe-hero-slider-item">
                        <div class="fe-hero-slider-item-img">
                            <img src="<?= $base_url ?>assets/images/banners/banner-slider-1.jpg" />
                            <div class="fe-hero-slider-overlay">
                                <h3>MENS<br />FASHION</h3>
                                <button class="btn btn-lg btn-outline-white btn-rounded">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="fe-hero-slider-item">
                        <div class="fe-hero-slider-item-img">
                            <img src="<?= $base_url ?>assets/images/banners/banner-slider-1.jpg" />
                            <div class="fe-hero-slider-overlay">
                                <h3>MENS<br />FASHION</h3>
                                <button class="btn btn-lg btn-outline-white btn-rounded">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="fe-hero-slider-item">
                        <div class="fe-hero-slider-item-img">
                            <img src="<?= $base_url ?>assets/images/banners/banner-slider-1.jpg" />
                            <div class="fe-hero-slider-overlay">
                                <h3>MENS<br />FASHION</h3>
                                <button class="btn btn-lg btn-outline-white btn-rounded">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- featured products -->
<section class="fe-section fe-featured-products">
    <div class="container">
        <div class="fe-section-header">
            <h2>FEATURED PRODUCTS</h2>
            <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
        </div>
        <div class="fe-section-body">
            <div class="fe-products-layout">

                <?php for ($i = 0; $i < 12; $i++) { ?>
                    <div class="fe-product-item">
                        <div class="fe-product-img">
                            <img src="<?= $base_url ?>assets/images/products/product-<?= ($i + 1) ?>.jpg" alt="" />
                        </div>
                        <div class="fe-product-content">
                            <h4>Wool Crewneck Sweater</h4>
                            <div class="fe-rating">
                                <i class="ri-star-fill ri-lg"></i>
                                <i class="ri-star-fill ri-lg"></i>
                                <i class="ri-star-line ri-lg"></i>
                                <i class="ri-star-line ri-lg"></i>
                                <i class="ri-star-line ri-lg"></i>
                            </div>
                            <p class="fe-product-price mt-3">$210</p>
                        </div>

                        <ul class="fe-product-overlay-btn">
                            <li><a href=""><i class="ri-search-line ri-lg"></i></a></li>
                            <li><a href=""><i class="ri-shopping-bag-line ri-lg"></i></a></li>
                            <li><a href=""><i class="ri-heart-line ri-lg"></i></a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <div class="d-flex mt-5 justify-content-center">
                <a href="" class="btn btn-lg btn-outline-primary btn-rounded">SHOW MORE</a>
            </div>
        </div>
    </div>

</section>
<!-- featured products -->


<!-- trending -->
<section class="fe-section fe-banner-2">
    <div class="container">
        <div class="fe-banner-inner">
            <img src="<?= $base_url ?>assets/images/banners/banner-3.jpg" />
        </div>
        <div class="fe-banner-inner">
            <img src="<?= $base_url ?>assets/images/banners/banner-4.jpg" />
        </div>
    </div>
</section>
<!-- trending -->


<section class="fe-section fe-featured-products">
    <div class="container">
        <div class="fe-section-header">
            <h2>NEW PRODUCTS</h2>
            <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
        </div>
        <div class="fe-section-body">
            <div class="fe-products-layout fe-related-products" id="feRelatedProducts">

                <?php for ($i = 0; $i < 9; $i++) { ?>
                    <div class="fe-product-item">
                        <div class="fe-product-img">
                            <img src="<?= $base_url ?>assets/images/products/product-<?= ($i + 1) ?>.jpg" alt="" />
                        </div>
                        <div class="fe-product-content">
                            <h4>Wool Crewneck Sweater</h4>
                            <div class="fe-rating">
                                <i class="ri-star-fill ri-lg"></i>
                                <i class="ri-star-fill ri-lg"></i>
                                <i class="ri-star-line ri-lg"></i>
                                <i class="ri-star-line ri-lg"></i>
                                <i class="ri-star-line ri-lg"></i>
                            </div>
                            <p class="fe-product-price mt-3">$210</p>
                        </div>

                        <ul class="fe-product-overlay-btn">
                            <li><a href=""><i class="ri-search-line ri-lg"></i></a></li>
                            <li><a href=""><i class="ri-shopping-bag-line ri-lg"></i></a></li>
                            <li><a href=""><i class="ri-heart-line ri-lg"></i></a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <div class="d-flex mt-5 justify-content-center">
                <a href="" class="btn btn-lg btn-outline-primary btn-rounded">SHOW MORE</a>
            </div>
        </div>
    </div>

</section>



<!-- trending -->
<section class="fe-section fe-trending-banner">
    <div class="container">
        <div class="fe-section-header">
            <h4>TRENDING</h4>
            <h2 class="text-uppercase">New Fashion</h2>
            <p>Consectetur adipisicing elit. Dolores nisi distinctio magni, iure deserunt doloribus optio</p>
            <button class="btn btn-lg btn-outline-white btn-rounded">SHOP NOW</button>
        </div>
    </div>
</section>
<!-- trending -->

<!-- article -->
<section class="fe-section fe-article">
    <div class="container">
        <div class="fe-section-header">
            <h2 class="">Latest Article</h2>
            <p class="">Mauris luctus nisi sapien tristique dignissim ornare</p>
        </div>
        <div class="fe-section-body">
            <div class="fe-article-layout">
                <div class="fe-article-item">
                    <div class="fe-article-item-img">
                        <img src="./assets/images/work/work-1.jpg" alt="">
                    </div>
                    <div class="fe-article-item-content">
                        <h4>In this context, our main approach was to build</h4>
                        <p>Tempor kasd dolor erat aliquyam ipsum gubergren amet, kasd et invidunt est sit takimata
                            elitr.</p>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
                <div class="fe-article-item">
                    <div class="fe-article-item-img">
                        <img src="./assets/images/work/work-2.jpg" alt="">
                    </div>
                    <div class="fe-article-item-content">
                        <h4>In this context, our main approach was to build</h4>
                        <p>Tempor kasd dolor erat aliquyam ipsum gubergren amet, kasd et invidunt est sit takimata
                            elitr.</p>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
                <div class="fe-article-item">
                    <div class="fe-article-item-img">
                        <img src="./assets/images/work/work-3.jpg" alt="">
                    </div>
                    <div class="fe-article-item-content">
                        <h4>In this context, our main approach was to build</h4>
                        <p>Tempor kasd dolor erat aliquyam ipsum gubergren amet, kasd et invidunt est sit takimata
                            elitr.</p>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- article -->



<?php
$pageContent = ob_get_contents();
ob_end_clean();
$pageTitle = 'Dashboard';
include('master.php');
?>