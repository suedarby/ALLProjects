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
            <div class="container"><br>
                <nav class="nav">
                    <div class="col-sm-3 ">
                        <h3 class="menu-side">Site Map</h3>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item nav-list">
                                <ul>
                                    <li class="nav nav-item nav-list"><a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav nav-item nav-list"><a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav nav-item nav-list"><a class="nav-link" href="news.html">News</a>
                                    </li>
                                    <li class="nav nav-item nav-list"><a class="nav-link"
                                            href="portfolio.html">Portfolio
                                            Page</a>
                                    </li>
                                    <ul>
                                        <li class="nav nav-item nav-list"><a class="nav-link"
                                                href="http://www.sue-a-darby.com/todoapp/index.html">To Do App</a>
                                        </li>
                                        <li class="nav nav-item nav-list"><a class="nav-link"
                                                href="slider.html">Slider</a>
                                        </li>
                                        <li class="nav nav-item nav-list"><a class="nav-link"
                                                href="landing.html">Landing
                                                Page</a>
                                        </li>
                                        <li class="nav nav-item nav-list"><a class="nav-link"
                                                href="technicaldoc.html">Technical
                                                Documentation</a></li>
                                    </ul>
                                    <li class="nav nav-item nav-list"><a class="nav-link" href="sitemap.html">Site
                                            Map</a></li>
                                </ul>
                    </div>
            </div>
            <!--END CONTENT-->
        </div>
        <!--END ROW-->
    </div>
    <!--END CONTAINER-->

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