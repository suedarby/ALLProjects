<!--HEAD-->
<?php include './private/includes/head.php'; ?>
<body>
    <!--TOP NAV-->
    <?php include 'includes/topnav.php'; ?>
    <!--Body of page-->
    <div class="container-fluid">
        <div class="row">
          <main role="main" class="dash col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="login-form">
<!--FIGURE THIS OUT!!--><form action="process.php" method="post">
                    <h2 class="text-center">Log in</h2>
                    <div class="form-group">
                        <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="form-control" placeholder="Password"
                            required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                    <div class="clearfix">
                        <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                        <a href="#" class="float-right">Forgot Password?</a>
                    </div>
                </form>
<!--FIGURE THIS OUT!!--><p class="text-center"><a href="#">Create an Account</a></p>
            </div>
         </main>
        </div>
    </div>
<!--footer-->
<?php include 'includes/footer.php'; ?>

</body>

</html>