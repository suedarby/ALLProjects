<!doctype html>

<!--replaced with header.php-->
<?php include 'includes/header.php'?>
<!--replaced with topnav.php-->
<?php include 'includes/topnav.php' ?>
<!--MAIN PAGE CONTAINER-->
<div class="container-fluid">
    <div class="row">
        <!--replace with sidenav.php-->
        <?php include 'includes/sidenav.php' ?>

        <!--********ALL pages get this to here*******-->
        <!--MAIN CONTENT ALL NON STATIC CONTENT GOES HERE-->
        <div class="col-sm-8">
            <!--PORTFOLIO TAB-->
            <div class="container"><br>
                <h2 class="page-title">Portfolio of Samples</h2>
                <p>A variety of samples follow the drop down links for more information about each.</p>
                <ul>
                    <li class="nav-item nav-list"><a class="nav-link" href="slider.php">Slider</a></li>
                    <li class="nav-item nav-list"><a class="nav-link" href="landing.php">Landing Page</a>
                    </li>
                    <li class="nav-item nav-list"><a class="nav-link" href="technicaldoc.php">Technical
                            Documentation</a></li>
                </ul>
            </div>
        </div>
        <!--END CONTENT-->
    </div>
    <!--END ROW-->
</div>

<!--All pages get from here down-->
<!--FOOTER include-->
<div>
    <?php include 'includes/footer.php' ?>
    <!--END FOOTER-->
</div>
<!--JavaScript include-->
<div>
    <?php include 'includes/js.php' ?>
    <!--end javascript-->
</div>
<!--END CONTAINER-->
</div>
</body>

</html>