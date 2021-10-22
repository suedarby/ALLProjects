<!--Header-->
<?php include 'includes/header.php'; ?>
<div class="row">
<!--Start sidebar navigation-->              
<?php include 'includes/nav.php'; ?>
<!--End sidebar Navigation-->
<!--Content-->
            <div class="col-7 flex-grow-1 flex-wrap" data-bs-toggle="tooltip" data-bss-tooltip="">
                <h1>Log In</h1>
                <div class="row">
                    <div class="col">
                        <section class="login-clean">
                            <form method="post">
                                <h2 class="visually-hidden">Login Form</h2>
                                <div class="illustration"><i class="icon ion-ios-navigate" style="color: var(--bs-blue);"></i></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-blue);">Log In</button></div><a class="forgot" href="reset.php">Forgot your email or password?</a>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start: Footer Basic -->
<?php include 'includes/footer.php'; ?>