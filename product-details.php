<?php
include './config.php';
ob_start();
?>

<div class="fe-page-title">
    <div class="container">
        <h2>PRODUCT DETAILS</h2>
        <ul class="fe-page-title-breadcrumb">
            <li><a href="./index.php">Home</a><i class="ri-arrow-right-s-line"></i></li>
            <li><a href="./shop-grid.php">Shop Grid</a><i class="ri-arrow-right-s-line"></i></li>
            <li>Product Details</li>
        </ul>
    </div>
</div>


<div class="fe-product-details">
    <div class="container">
        <div class="fe-product-detail-left">

            <div class="fe-product-image-outer">
                <div class="fe-product-image-thumbnail">
                    <div class="fe-product-image-thumb">
                        <img src="<?= $base_url ?>assets/images/products/product-1.jpg" alt="" />
                    </div>
                    <div class="fe-product-image-thumb">
                        <img src="<?= $base_url ?>assets/images/products/product-1.jpg" alt="" />
                    </div>
                    <div class="fe-product-image-thumb">
                        <img src="<?= $base_url ?>assets/images/products/product-1.jpg" alt="" />
                    </div>
                    <div class="fe-product-image-thumb">
                        <img src="<?= $base_url ?>assets/images/products/product-1.jpg" alt="" />
                    </div>
                </div>
                <div class="fe-product-image">
                    <img src="<?= $base_url ?>assets/images/products/product-1.jpg" alt="" />
                </div>
            </div>

        </div>
        <div class="fe-product-detail-right">

            <h2>Wool Crewneck Sweater</h2>
            <div class="fe-rating">
                <i class="ri-star-fill ri-lg"></i>
                <i class="ri-star-fill ri-lg"></i>
                <i class="ri-star-line ri-lg"></i>
                <i class="ri-star-line ri-lg"></i>
                <i class="ri-star-line ri-lg"></i>
            </div>

            <div class="fe-product-price">
                <strong>Price:</strong>
                <del>$499</del><span>$300</span>
            </div>

            <div class="fe-product-size">
                <strong>Size:</strong>

                <div class="fe-product-size-outer">
                    <div class="fe-product-size-inner">S</div>
                    <div class="fe-product-size-inner">M</div>
                    <div class="fe-product-size-inner">L</div>
                </div>
            </div>

            <p class="mt-2">Dolor erat invidunt justo labore kasd lorem sadipscing et, accusam duo dolores sadipscing eos no nonumy aliquyam ea. Labore stet, accusam duo dolores sadipscing eos no nonumy aliquyam ea. Labore stet.</p>


            <button class="btn btn-lg btn-primary btn-icon fe-roboto-condensed my-1"><i class="ri-shopping-cart-line me-2"></i>ADD TO CART</button>
            <button class="btn btn-lg btn-outline-dark btn-icon fe-roboto-condensed my-1"><i class="ri-heart-line me-2"></i>ADD TO WISH</button>
        </div>
    </div>
</div>




<div class="fe-product-description">
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">DESCRIPTIONS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-specification-tab" data-bs-toggle="pill" data-bs-target="#pills-specification" type="button" role="tab" aria-controls="pills-specification" aria-selected="false">SPECIFICATIONS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">REVIEWS</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                <p>
                    Tränen die lied träne mich in zauberhauch ein, wird ihr die ihr ernsten es gezeigt stillen der umwittert. Ich wird lispelnd gestalten seh entwöhntes schatten noch. Wiederholt und sage der steigt. Verklungen ernsten in mild schwebet seelen ich ihr den ihr, die es die früh euch, um entwöhntes nebel naht mit jenem lispelnd die bringt mein, tage es ein drängt ergreift. Schmerz lied besitze die wahn, um sonst im die.
                </p>

                <ol>
                    <li>No takimata clita sit stet sit sanctus no, diam ipsum rebum ut duo diam, aliquyam dolor takimata tempor consetetur, ipsum.</li>
                    <li>No takimata clita sit stet sit sanctus no, diam ipsum rebum ut duo diam, aliquyam dolor takimata tempor consetetur, ipsum.</li>
                    <li>No takimata clita sit stet sit sanctus no, diam ipsum rebum ut duo diam, aliquyam dolor takimata tempor consetetur, ipsum.</li>
                    <li>No takimata clita sit stet sit sanctus no, diam ipsum rebum ut duo diam, aliquyam dolor takimata tempor consetetur, ipsum.</li>
                </ol>
            </div>
            <div class="tab-pane fade" id="pills-specification" role="tabpanel" aria-labelledby="pills-specification-tab">...</div>
            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">...</div>
        </div>
    </div>
</div>

<section class="fe-section fe-featured-products">
    <div class="container">
        <div class="fe-section-header">
            <h2>RELETED PRODUCTS</h2>
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



<?php
$pageContent = ob_get_contents();
ob_end_clean();
$pageTitle = 'Dashboard';
include('master.php');
?>