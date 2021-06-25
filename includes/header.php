<div class="fe-topbar">
    <div class="container">
        <p>Welcome to your store</p>
        <ul>
            <li><a href="">Offers</a></li>
            <li><a href="">Need Help?</a></li>
        </ul>
    </div>
</div>
<div class="fe-header">
    <div class="container">
        <div class="fe-header-logo">
            <a href="<?= $base_url ?>">
                <h3>FASHION STORE</h3>
            </a>
        </div>
        <div class="fe-header-search-input">
            <div class="fe-header-search-input-inner">
                <input type="text" placeholder="Enter Your Email Address" />
                <button>Search</button>
            </div>
        </div>
        <div class="fe-header-controls">
            <a href="javascript:void(0)" class="shopping-cart" id="feShoppingCartOpen"><i class="ri-shopping-cart-2-line ri-xl"></i></a>
            <a href="javascript:void(0)" class="fe-header-search-icon"><i class="ri-search-line ri-xl"></i></a>
            <a href="./login.php" class="fe-header-user-icon"><i class="ri-user-line ri-xl"></i></a>
        </div>

    </div>

</div>

<div class="fe-navbar">
    <div class="container">
        <div class="fe-navbar-inner">
            <ul class="fe-navbar-nav">
                <li class="active"><a href="javascript:void(0)" id="feCategorySidebarOpen"><i class="ri-menu-line ri-xl"></i>Category</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</div>




<?php include_once "category-sidebar.php"; ?>


<div class="fe-footer-mb">
    <ul>
        <li>
            <a href="#">
                <i class="ri-home-line"></i>
                Home
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" id="feFooterMbCategory">
                <i class="ri-menu-line"></i>
                Category
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" id="feFooterMbCart">
                <i class="ri-shopping-cart-line"></i>
                Cart
            </a>
        </li>
        <li>
            <a href="#">
                <i class="ri-heart-line"></i>
                Wishlist
            </a>
        </li>
        <li>
            <a href="#">
                <i class="ri-user-line"></i>
                Account
            </a>
        </li>
    </ul>
</div>

<?php include_once "shopping-cart.php"; ?>