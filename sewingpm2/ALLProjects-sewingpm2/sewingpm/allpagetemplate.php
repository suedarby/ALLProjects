<!doctype html>
<html lang="en">
<!--HEAD-->
<?php include 'includes/head.php'; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Project Manager - Dashboard</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--FontAwesome 4 & 5-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--my CSS-->

    <link href="assets/css/sewing.css" rel="stylesheet">

    <link href="assets/dist/css/dashboard.css" rel="stylesheet">

</head>

<body>

    <!--TOP NAV-->
    <?php include 'includes/topnav.php'; ?>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html">Sewing Project Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.html">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-in.html" tabindex="-1" aria-disabled="true">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dash.html" tabindex="-1" aria-disabled="true">Dash</a>
                </li>
                <li class="nav-item">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dashboard" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dashboard Navigation</a>
                    <div class="dropdown-menu" aria-labelledby="dashboard">
                        <a class="dropdown-item" href="projects.html">Projects</a>
                        <a class="dropdown-item" href="patterns.html">Patterns</a>
                        <a class="dropdown-item" href="fabric.html">Fabric</a>
                        <a class="dropdown-item" href="notions.html">Notions</a>
                        <a class="dropdown-item" href="tools.html">Tools</a>
                        <a class="dropdown-item" href="shopping.html">Shopping List</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--Body of page-->

    <div class="container-fluid">
        <div class="row">

            <!--SIDEBAR for dash pages only-->
            <?php include 'includes/sidenav.php'; ?>

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dash.html">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="projects.html">
                                <span data-feather="file"></span>
                                Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="patterns.html">
                                <span data-feather="award"></span>
                                Patterns
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fabric.html">
                                <span data-feather="layers"></span>
                                Fabric
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tools.html">
                                <span data-feather="scissors"></span>
                                Tools
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shopping.html">
                                <span data-feather="shopping-cart"></span>
                                Shopping List
                            </a>
                        </li>
                    </ul>
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="savedreports.html"
                            aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="inprogress.html">
                                <span data-feather="file-text"></span>
                                Projects in Progress
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stalled.html">
                                <span data-feather="file-text"></span>
                                Stalled Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="complete.html">
                                <span data-feather="file-text"></span>
                                Completed Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="planned.html">
                                <span data-feather="file-text"></span>
                                Planned Projects
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--CONTENT AREA-->
            <main role="main" class="dash col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Projects</h1>
                    <!--SHARE & EXPORT BUTTONS on dash pages only-->
                    <?php include 'includes/shareexport.php'; ?>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
                <!--CONTENT-->
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Start Date</th>
                                <th>Pattern #</th>
                                <th>Status</th>
                                <th>Pattern Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DATE</td>
                                <td>CONCAT OF COMPANY + PATTERN #</td>
                                <td>DROP DOWN</td>
                                <td>IMAGE</td>
                            </tr>
                            <tr>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>misc</td>
                            </tr>
                            <tr>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>MISC</td>
                                <td>misc</td>
                            </tr>
                        </tbody>
                    </table>
                    <div><a href="projects.html" class="btn btn-primary">More Projects</a>
                    </div>
                    <br>
                </div>
                <h2>Patterns</h2>
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pattern #</th>
                                <th>Company</th>
                                <th>Type</th>
                                <th>Pattern Image</th>
                                <th>Project</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>INTEGER</td>
                                <td>TEXT</td>
                                <td>Description</td>
                                <td>IMAGE</td>
                                <td>Query Project</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>amet</td>
                                <td>consectetur</td>
                                <td>adipiscing</td>
                                <td>elit</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>Integer</td>
                                <td>nec</td>
                                <td>odio</td>
                                <td>Praesent</td>
                            </tr>
                        </tbody>
                    </table>
                    <div><a href="patterns.html" class="btn btn-primary">More Patterns</a>
                    </div>
                    <br>
                </div>
                <h2>Fabric, Notions &amp; Trims</h2>
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Color</th>
                                <th>Yardage or QTY</th>
                                <th>Wishlist</th>
                                <th>Pattern</th>
                                <th>Project</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>fabric, notion or trim type</td>
                                <td>Color Drop Down</td>
                                <td>Number</td>
                                <td>number +link to shopping</td>
                                <td>Co + Pattern #</td>
                                <td>Query Project</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>amet</td>
                                <td>consectetur</td>
                                <td>adipiscing</td>
                                <td>elit</td>
                                <td>elit</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>Integer</td>
                                <td>nec</td>
                                <td>odio</td>
                                <td>Praesent</td>
                                <td>elit</td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <a href="fabric.html" class="btn btn-primary">More Fabric</a>
                    </div>
                    <br>
                </div>
                <h2>Tools</h2>
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tools</th>
                                <th>Use</th>
                                <th>Wishlist +link to shopping</th>
                                <th>Project</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>string</td>
                                <td>dropdown?</td>
                                <td>checkbox +link to shopping</td>
                                <td>query Project list</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>amet</td>
                                <td>consectetur</td>
                                <td>adipiscing</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>Integer</td>
                                <td>nec</td>
                                <td>odio</td>
                            </tr>
                        </tbody>
                    </table>
                    <div><a href="tools.html" class="btn btn-primary">More Tools</a>
                    </div>
                    <br>
                </div>
                <h2>Shopping</h2>
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Color</th>
                                <th>Yardage</th>
                                <th>Pattern</th>
                                <th>Project</th>
                                <th>Wishlist</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>From Fabric</td>
                                <td>From Fabric</td>
                                <td>From Fabric</td>
                                <td>From Number + Company</td>
                                <td>From Project Name</td>
                                <td>From wishlists in Fabric + Tools etc</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>amet</td>
                                <td>consectetur</td>
                                <td>adipiscing</td>
                                <td>elit</td>
                                <td>misc</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>Integer</td>
                                <td>nec</td>
                                <td>odio</td>
                                <td>Praesent</td>
                                <td>misc</td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <a href="shopping.html" class="btn btn-primary">More Shopping</a>
                    </div>
                    <br>
                </div>
            </main>
        </div>
    </div>
    <!--footer-->
    <?php include 'includes/topnav.php'; ?>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                </ul>
            </span>
        </div>
    </footer>
    <!--Scripts JQuery first then rest only use CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <!--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        type="0088a5a519ac33cb9052c93b-text/javascript"></script>
    <script type="0088a5a519ac33cb9052c93b-text/javascript">
    window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="assets/dist/js/bootstrap.bundle.js" type="0088a5a519ac33cb9052c93b-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"
        type="0088a5a519ac33cb9052c93b-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"
        type="0088a5a519ac33cb9052c93b-text/javascript"></script>
    <script src="assets/dist/js/dashboard.js" type="0088a5a519ac33cb9052c93b-text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"
        type="0088a5a519ac33cb9052c93b-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="0088a5a519ac33cb9052c93b-|49" defer=""></script>-->
</body>

</html>