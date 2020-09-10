<?php require_once('../private/initialize.php'); 
 include(SHARED_PATH . '\head.php'); 
$page_title = 'About'?>

<body>

<title>Sewing Project Manager - <?php echo $page_title; ?></title>

<div class="wrapper">
  <header class="header mb-5 pb-5">    
      <?php include(SHARED_PATH . './topnav.php'); ?>
    </header>
 </div> 

<main role="main" class="dash main content bd-content flex-column ">
    <section class="container-fluid pt-5">
        <h2>About The App</h2>
    </section>
    <section class="container-fluid">
        <p>This project is being started in July of 2020. The idea has been percolating for a number of years as I
            have
            been sewing for a long time. The primary reason I'm building my copy of the app is to literally track my
            sewing projects. At first it was just to track patterns and then I realized I needed to track fabric and
            notions as well as trims and various tools used for sewing and pattern making.</p>
        <p>As the specifications were being developed for sewing I realized that it could work for knitting &
            crochet to
            track needles, hooks, patterns and yarn. I know many people who have "too much yarn" but don't really
            know
            what they have. Seamstresses, knitters and crocheters all have some of the same issues with tracking
            tools
            and patterns... "do I have a____?" or "where did I see the pattern for ___?".</p>
        <p>Additionally I've seen the same thing with just about every other hobby and a lot of professionals too.
            Tracking supply inventory is just as important in the business world as it is for the rest of us.</p>
        <p>I plan to document my journey building this tool and then how to modify it for other purposes. When I
            finish
            a bit more I will share and post the Git Hub for it.</p>
    </section>
    <section class="container-fluid">
        <h3>About the Coder</h3>
        <p>The chatty coder who wrote all of the above is Sue Darby who also goes by Lady Code Monkey. She enjoys
            code
            and fiddling with little projects but it is time for her to "grow up" and build something more serious.
        </p>
        <p>Sue has built some serious things unfortunately she can't show those off online because they are for
            previous
            jobs hence this little corner of the web.</p>
        <p>Sue has been coding off and on since she was about 8. She started in Basic A, moved to old school DOS
            then
            into HTML, CSS, Javascript, a dash of Perl and has dabbled in several frameworks. You will notice this
            site
            is build on BootStrap just to make life easier. That doesn't mean that it is vanilla BootStrap as there
            are
            plenty of customizations.</p>
    </section>
    <section class="container-fluid">
        <h4>Other Projects</h4>
        <p>Remember that HTML stuff from above...I've done many sites in straight HTML and long since taken them
            down
            but I have been building and maintaining many WordPress based sites for a number of years. I am
            definitely
            not afraid of the PHP or tweaking the CSS manually on any of my other sites.</p>
        <p>You can find a list of my sites below:</p>
    </section>
    <section class='container'>
        <h1>Website Network</h1>
    </section>
        <section class="container-fluid">
            <!--start-->
            <div class="row">
                <!--Portfolio-->
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Portfolio &amp; Photography</h5>
                            <p class="card-text">
                                <ul>
                                    <li> <a href="http://www.sue-a-darby.com/" target="_blank">
                                            <i class="fa fa-link" aria-hidden="true"></i> Portfolio
                                        </a></li>
                                    <li> <a href="http://www.work-samples.sue-a-darby.com/" target="_blank">
                                            <i class="fa fa-link" aria-hidden="true"></i> Photography
                                        </a></li>
                                    <li> <a href="http://codemonkey.sue-a-darby.com/" target="_blank">
                                            <i class="fa fa-link" aria-hidden="true"></i> Code Monkey </a></li>
                                     <li> <a href="http://ladycodemonkey.sue-a-darby.com/" target="_blank">
                                            <i class="fa fa-link" aria-hidden="true"></i> LadyCode Monkey</a></li>
                                    <li> <a href="https://www.facebook.com/suedarbyportfolio/">
                                            <i class="fa fa-facebook-official" aria-hidden="true"></i> Page
                                        </a></li>
                                    <li> <a href="https://twitter.com/suedarby">
                                            <i class="fa fa-twitter" aria-hidden="true"> @SueDarby on Twitter</i>
                                        </a></li>
                                    <li> <a href="https://www.linkedin.com/in/suedarby/">
                                            <i class="fa fa-linkedin" aria-hidden="true"> LinkedIn</i>
                                        </a></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!--STC-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sue's Tiny Costumes</h5>
                            <p class="card-text">
                                <ul>
                                    <li> <a href="http://suestinycostumes.com/" target="_blank"><i class="fa fa-link"
                                                aria-hidden="true"></i>Sue's Tiny Costumes </a></li>
                                    <li> <a href="https://www.facebook.com/suestinycostumes"><i
                                                class="fa fa-facebook-official" aria-hidden="true"></i> Page</a></li>
                                    <li> <a href="https://www.facebook.com/groups/1954345461551855/?ref=bookmarks"> <i
                                                class="fa fa-facebook-f" aria-hidden="true"></i> Group</a></li>
                                    <li> <a href="https://twitter.com/STCDolls"><i class="fa fa-twitter"
                                                aria-hidden="true"></i> @STCDolls on Twitter</a></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container mt-3 mb-5 pb-5">
            <!--end-->
                <!--AOS-->
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Alaska Office Specialists</h5>
                            <p class="card-text">
                                <ul class="elementor-icon-list-items">
                                    <li> <a href="http://www.alaskaos.com/" target="_blank">
                                            <i class="fa fa-link" aria-hidden="true"></i> Alaska Office Specialists </a>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>

        </section>
    </main>
    <!--container -->



<?php include '../private/shared/footer.php'; ?>
</body>
</html>