<?php
include './config.php';
ob_start();
?>

<div class="fe-page-title">
    <div class="container">
        <h2>SHOP GRID</h2>
        <ul class="fe-page-title-breadcrumb">
            <li><a href="http://">Home</a><i class="ri-arrow-right-s-line"></i></li>
            <li>Shop Grid</li>
        </ul>
    </div>
</div>


<div class="fe-shop-grid">

    <div class="container">

        <div class="fe-shop-grid-filter">

            <div class="fe-shop-widget">
                <div class="fe-shop-widget-title">
                    <h3>FILTER BY PRICE</h3>
                </div>
                <div class="fe-shop-widget-body">
                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                </div>
                <div class="fe-shop-widget-footer"></div>
            </div>



            <div class="fe-shop-widget">
                <div class="fe-shop-widget-title">
                    <h3>FILTER BY TAG</h3>
                </div>
                <div class="fe-shop-widget-body">
                    <ul>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <span>Pepe Jeans</span>
                                    <span>(40)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    <span>BNS Clothing</span>
                                    <span>(10)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    <span>Pepe Jeans</span>
                                    <span>(25)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    <span>BNS Clothing</span>
                                    <span>(10)</span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="fe-shop-widget-footer"></div>
            </div>


            <!-- tags -->
            <div class="fe-shop-widget">
                <div class="fe-shop-widget-title">
                    <h3>FILTER BY RATING</h3>
                </div>
                <div class="fe-shop-widget-body">
                    <ul>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDe1">
                                <label class="form-check-label" for="flexCheckDe1">
                                    <div class="fe-rating">
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                    </div>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDe2">
                                <label class="form-check-label" for="flexCheckDe2">
                                    <div class="fe-rating">
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-line ri-lg"></i>
                                    </div>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDe3">
                                <label class="form-check-label" for="flexCheckDe3">
                                    <div class="fe-rating">
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-line ri-lg"></i>
                                        <i class="ri-star-line ri-lg"></i>
                                    </div>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDe4">
                                <label class="form-check-label" for="flexCheckDe4">
                                    <div class="fe-rating">
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-fill ri-lg"></i>
                                        <i class="ri-star-line ri-lg"></i>
                                        <i class="ri-star-line ri-lg"></i>
                                        <i class="ri-star-line ri-lg"></i>
                                    </div>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="fe-shop-widget-footer"></div>
            </div>
            <!-- tags -->

        </div>
        <div class="fe-shop-grid-inner">

            <div class="fe-shop-grid-header"></div>
            <div class="fe-shop-grid-body">


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
            </div>
            <div class="fe-shop-grid-footer"></div>

        </div>
    </div>
</div>


<?php
$pageContent = ob_get_contents();
ob_end_clean();
$pageTitle = 'Dashboard';
include('master.php');
?>