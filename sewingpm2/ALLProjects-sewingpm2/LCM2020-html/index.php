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
            <div class="container">
                <h2 class="page-title">Home Page</h2>
                <p>I can add more than just a table here. This is for everything that is not a menu.</p>
                <p>A list of things I want to do for this site as samples.</p>
                <ul>
                    <li>Home </li>
                    <li>About Me page </li>
                    <li>Slider of Samples from all my other sites </li>
                    <li>Mobile Friendly Page for my phone, tablet, Kindle and laptop </li>
                    <li>Use Font Awesome for Icons (obviously I am!) </li>
                    <li>Add in a favorite Google Font (Happy Monkey) </li>
                    <li>Moving Text
                    <li>CSS3 driven menu</li>
                    <li>PHP driven form page</li>
                    <li>Canvas page for a pattern drafting tutorial I have in mind</li>
                    <li>MySQL database for a new web app I have in mind</li>
                    <li>Mobile App (Android)</li>
                </ul>
                <p>The design of the page is being kept simple so that the bulk of the programming is for the fun
                    things I want to learn to do in HTML5, CSS and JavaScript.</p>
                <p>Ultimately, I am hoping that these samples will lead to a new career.</p>
            </div>
        </div>
        <!--END MAIN CONTENT-->

    </div>
    <!--END ROW-->
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