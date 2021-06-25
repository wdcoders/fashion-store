<?php
include './config.php';
ob_start();
?>

<div class="fe-page-title">
    <div class="container">
        <h2>REGISTER</h2>
        <ul class="fe-page-title-breadcrumb">
            <li><a href="http://">Home</a><i class="ri-arrow-right-s-line"></i></li>
            <li>Register</li>
        </ul>
    </div>
</div>


<div class="fe-page-content auth-form">
    <div class="container">
        <div class="row">
            <div class="offset-lg-4 col-lg-4 my-5">
                <div class="card  auth-form-inner">
                    <div class="card-body">
                        <h5 class="card-title">Join Now!</h5>
                        <h6 class="card-subtitle mb-4 text-muted">Create your new account</h6>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" placeholder="Your Name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body fw-bold d-flex justify-content-center">
                        Already Have An Account?<a href="./login.php" class="fw-bold mx-1">Login Here</a>
                    </div>
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