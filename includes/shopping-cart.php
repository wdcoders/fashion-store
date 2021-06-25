<div class="fe-shopping-cart" id="feShoppingCart">
    <div class="fe-shopping-cart-inner">
        <div class="fe-shopping-cart-header">
            <div class="fe-shopping-cart-close" id="feShoppingCartClose">
                <i class="ri-close-line ri-xl"></i>
            </div>
            <h4><i class="ri-shopping-cart-line"></i>Total Items (2)</h4>
        </div>
        <div class="fe-shopping-cart-body">

            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="fe-shopping-cart-item">
                    <div class="fe-shopping-cart-item-img">
                        <img src="<?= $base_url ?>assets/images/products/product-<?= ($i + 1) ?>.jpg" alt="" />
                    </div>
                    <div class="fe-shopping-cart-item-content">
                        <h4>Wool Crewneck Sweater</h4>

                        <div class="fe-shopping-cart-item-contorl">
                            <div class="fe-input-action">
                                <button class="fe-input-action-plus"><i class="ri-add-line"></i></button>
                                <input class="fe-input-action-value" type="text" value="1" />
                                <button class="fe-input-action-minus"><i class="ri-subtract-line"></i></button>
                            </div>
                            <h4>$300</h4>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div class="fe-shopping-cart-footer">
            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-checkout" type="button">
                    <span>Proceed To Checkout</span>
                    <span>$600</span>
                </button>
            </div>
        </div>
    </div>
</div>