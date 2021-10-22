<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Project Manager - Dashboard</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <!--App's CSS-->
    <link href="assets/dist/css/sewing.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/dashboard.css" rel="stylesheet">
</head>

<body>
    <!--Nav Bar Starts here and should be on each page-->
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
                    <!--Dashboard drop down menu-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dashboard" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dashboard Navigation</a>
                    <div class="dropdown-menu" aria-labelledby="dashboard">
                        <a class="dropdown-item" href="#">Projects</a>
                        <a class="dropdown-item" href="#">Patterns</a>
                        <a class="dropdown-item" href="#">Fabric</a>
                        <a class="dropdown-item" href="#">Notions</a>
                        <a class="dropdown-item" href="#">Tools</a>
                        <a class="dropdown-item" href="#">Shopping List</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--Nav bar ENDS here and should be on each page-->
    <!--SIDEBAR MENU-->
    <div class="container-fluid">
        <div class="row">
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
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="award"></span>
                                Patterns
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Fabric
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="scissors"></span>
                                Tools
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Shopping List
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Projects in Progress
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Stalled Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Completed Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Planned Projects
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--no container class!!
Main area call stuff and display from database tables
add modal for input form-->
            <main role="main" class="dash col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="dash-pages">
                        <div>
                            <h1>Projects</h1>
                            <hr>
                        </div>
                        <p>This should have an add project button and a modal? or pop up form to fill in pertinent
                            information for each project. The table on this page will have more displayed information
                            for each item or should it link to an individual page for each project with the form so that
                            updates can be made for each one?</p>
                        <div><a href="projects.html" class="btn btn-primary">Add Projects</a>
                        </div>

                        <div>
                            <p>This should have the full list of UFOs and Planned Projects</p>
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

                                <br>
                            </div>
                        </div>
                    </div>

                </div>>
            </main>
            <!--FOOTER Goes here-->
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
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
            <script src="assets/dist/js/bootstrap.bundle.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
            <script src="assets/dist/js/dashboard.js"></script>
</body>

</html>