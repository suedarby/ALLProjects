<!--Header-->
<?php include 'includes/header.php'; ?>
<div class="row">
<!--Start sidebar navigation-->              
<?php include 'includes/nav.php'; ?>
<!--End sidebar Navigation-->
<!--Content-->
    <div class="col-7 flex-grow-1 flex-wrap" data-bs-toggle="tooltip" data-bss-tooltip="">
        <h1>Register</h1>
        <div class="row">
            <div class="col">
                <section class="login-clean">
                    <form method="post">
                        <h4 class="text-center" style="color: var(--bs-blue);"><strong>Create</strong> an account.</h4>
                        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                        <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
                        <div class="mb-3">
                            <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox"><a href="terms.php">I agree to the license terms</a></label></div>
                        </div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="color: var(--bs-white);background: var(--bs-blue);">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>

        <!-- Start: Footer Basic -->
<?php include 'includes/footer.php'; ?>