<?php
include './config.php';
ob_start();
?>

<div class="fe-page-content auth-form">
    <div class="container">
        <div class="row">
            <div class="offset-lg-4 col-lg-4 my-5">
                <div class="error-page">
                    <h1>404</h1>
                    <h4>PAGE NOT FOUND</h4>
                    <a href="<?= $base_url ?>" class="btn btn-primary btn-rounded">BACK TO HOME</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$pageContent = ob_get_contents();
ob_end_clean();
$pageTitle = 'Dashboard';
include('master.php');
?>