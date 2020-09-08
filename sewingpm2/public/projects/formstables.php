<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Forms and Tables</title>
    <style>
        .item1 {
            grid-area: header;
        }

        .item2 {
            grid-area: menu;
            padding-bottom: 35px;
        }

        .item3 {
            grid-area: main;
            margin: 5px;
            column-width: auto;
            padding: 5px;
        }

        .item4 {
            grid-area: footer;
        }

        .grid-container {
            display: grid;
            grid-template-areas:
                'header header header header header header'
                'menu main main main main main'
                'footer footer footer footer footer footer';
            grid-gap: 5px;
            background-color: #2196F3;


        }

        .grid-container>div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: left;
            padding: 5px 0;
            font-size: 12px;
        }

        .form-control {
            line-height: 1;
            font-size: .5rem;
        }

        .btn {
            line-height: 1;
            font-size: .5rem;
        }
    </style>
    <link rel="icon" href="favicon.ico" type="favicon.ico" sizes="16x16">
    <!--my CSS-->
    <link href="./public/css/dashboard.css" rel="stylesheet">

</head>

<body class="container-fluid  ">
    <div class="grid-container">
        <div class="item1 container ">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top pb-1 pt-0 ">
                <a class="navbar-brand" href="index.php">&nbsp;&nbsp; <i class="fas fa-ruler"></i> Sewing Project
                    Manager
                    &nbsp;&nbsp;</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dash.php" tabindex="-1" aria-disabled="true">Dash</a>
                        </li>
                        <li class="nav-item">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dashboard" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dashboard Navigation</a>
                            <div class="dropdown-menu" aria-labelledby="dashboard">
                                <a class="dropdown-item" href="projects.php">Projects</a>
                                <a class="dropdown-item" href="patterns.php">Patterns</a>
                                <a class="dropdown-item" href="fabric.php">Fabric</a>
                                <a class="dropdown-item" href="notions.php">Notions</a>
                                <a class="dropdown-item" href="tools.php">Tools</a>
                                <a class="dropdown-item" href="shopping.php">Shopping List</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="item2 container">
            <nav id="sidebarMenu" class="sidebar-sticky  w-auto d-md-block ">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-5 mb-1 text-muted">
                    <span>Dashboard List</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">
                            <i class="fas fa-ruler"></i>
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="patterns.php">
                            <i class="fas fa-ruler"></i>
                            Patterns
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fabric.php">
                            <i class="fas fa-ruler"></i>
                            Fabric
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tools.php">
                            <i class="fas fa-ruler"></i>
                            Tools
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Shopping List</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">
                            <i class="fas fa-ruler"></i>
                            Projects
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Reports</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="inprogress.php">
                            <i class="fas fa-ruler"></i>
                            Projects in Progress
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stalled.php">
                            <i class="fas fa-ruler"></i>
                            Stalled Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="complete.php">
                            <i class="fas fa-ruler"></i>
                            Completed Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="planned.php">
                            <i class="fas fa-ruler"></i>
                            Planned Projects
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="item3 container mt-5 pt-5 mr-auto ml-2 pl-5">
            <!--Notions Form-->
            <div class="container">
                <h1>Add/Update Notions</h1>
                <div class="row">
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Type </label>
                                <input class="form-control" type="text" placeholder="Type">
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="location">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Qty </label>
                                <input class="form-control" type="text" placeholder="Qty">
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Size </label>
                                <input class="form-control" type="text" placeholder="Size">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="notionsdescription">Notions Description</label>
                                <textarea class="form-control" id="notionsdescription" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Add OR Update Notion</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container border-bottom">
                </div>
            </div>
            <!--Notions Table-->
            <div class="container">
                <h1>View/Dash Notions</h1>
                <div class="row">
                    <table style="width:100%">
                        <tr>
                            <th>View</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Size</th>
                            <th>Location</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <a class="action" href="./projects/show.php">
                                        <i class="fa fa-eye">View</i>
                                    </a>
                                </button></td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fas fa-pencil-ruler"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fa fa-trash">
                                    </i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                    </table>
                </div>
                 <div class="container border-bottom">
                </div>
            </div>
            <!--Patterns Form-->
            <div class="container">
                <h1>Add/Update Patterns</h1>
                <div class="row">
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Number </label>
                                <input class="form-control" type="text" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <select class="form-control" id="brand">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="patterndescription">Pattern Description</label>
                                <textarea class="form-control" id="patterndescription" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 mt-5 h-100">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="patternimage">
                                    <label class="custom-file-label" for="patternimage">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <br><br><br>
                                <label>Image Place Holder </label>
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="style">Style</label>
                                <select class="form-control" id="style">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select class="form-control" id="size">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="location">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Add OR Update Patterns</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="container border-bottom">
                </div>
            </div>
            <!--Patterns Table-->
            <div class="container">
                <h1>View/Dash Patterns</h1>
                <div class="row">
                    <table style="width:100%">
                        <tr>
                            <th>View</th>
                            <th>Number</th>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Style</th>
                            <th>Size</th>
                            <th>Location</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <a class="action" href="./projects/show.php">
                                        <i class="fa fa-eye">View</i>
                                    </a>
                                </button>
                            </td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fas fa-pencil-ruler"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                        </tr>
                    </table>
                </div>
                <div class="container">
                    <hr>
                </div>
            </div>
            <!--Tools Form-->
            <div class="container">
                <h1>Add/Update Tools</h1>
                <div class="row">
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Tool </label>
                                <input class="form-control" type="text" placeholder="Tool">
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="location">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Add OR Update Tools</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                </div>
            </div>
            <!--Tools Table-->
            <div class="container">
                <h1>View/Dash Tools</h1>
                <div class="row">
                    <table style="width:100%">
                        <tr>
                            <th>View</th>
                            <th>Tool</th>
                            <th>Location</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <a class="action" href="./projects/show.php">
                                        <i class="fa fa-eye">View</i>
                                    </a>
                                </button>
                            </td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fas fa-pencil-ruler"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                        </tr>
                    </table>
                </div>
                <div class="container">
                    <hr>
                </div>
            </div>
            <!--Fabric Form-->
            <div class="container">
                <h1>Add/Update Fabric</h1>
                <div class="row">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="fabricdescription">Fabric Description</label>
                                <textarea class="form-control" id="fabricdescription" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Width </label>
                                <input class="form-control" type="text" placeholder="Width">
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Yards </label>
                                <input class="form-control" type="text" placeholder="Yards">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Weave </label>
                                <input class="form-control" type="text" placeholder="Weave">
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Fiber </label>
                                <input class="form-control" type="text" placeholder="Fiber">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <select class="form-control" id="color">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="location">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Add OR Update Fabric</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                </div>
            </div>
            <!--Fabric Table-->
            <div class="container">
                <h1>View/Dash Fabric</h1>
                <div class="row">
                    <table style="width:100%">
                        <tr>
                            <th>View</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Size</th>
                            <th>Location</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <a class="action" href="./projects/show.php">
                                        <i class="fa fa-eye">View</i>
                                    </a>
                                </button>
                            </td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fas fa-pencil-ruler"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                    </table>
                </div>
                <div class="container">
                    <hr>
                </div>
            </div>
            <!--Trims Form-->
            <div class="container">
                <h1>Add/Update Trims</h1>
                <div class="row">
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Type</label>
                                <input class="form-control" type="text" placeholder="type">
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Yards </label>
                                <input class="form-control" type="text" placeholder="Yards">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="trimdescription">Trim Description</label>
                                <textarea class="form-control" id="trimdescription" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <select class="form-control" id="color">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="location">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Add OR Update Trim</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                </div>
            </div>
            <!--Trims Table-->
            <div class="container">
                <h1>View/Dash Trims</h1>
                <div class="row">
                    <table style="width:100%">
                        <tr>
                            <th>View</th>
                            <th>Type</th>
                            <th>Yards</th>
                            <th>Description</th>
                            <th>Color</th>
                            <th>Location</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <a class="action" href="./projects/show.php">
                                        <i class="fa fa-eye">View</i>
                                    </a>
                                </button>
                            </td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fas fa-pencil-ruler"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                    </table>
                </div>
                <div class="container">
                    <hr>
                </div>
            </div>
            <!--Projects Form-->
            <div class="container">
                <h1>Add/Update Projects</h1>
                <div class="row">
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" type="text" placeholder="Project Name">
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="number">Number</label>
                                <select class="form-control" id="Number">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <select class="form-control" id="brand">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 mt-5 h-100">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="patternimage">
                                    <label class="custom-file-label" for="patternimage">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <br><br><br>
                                <label>Image Place Holder </label>
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <br><br><br>
                                <label>Image Place Holder </label>
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="fabric">Fabric</label>
                                <select multiple class="form-control" id="fabric">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="notions">Notions</label>
                                <select multiple class="form-control" id="notions">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="trims">Trims</label>
                                <select multiple class="form-control" id="trims">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="tools">tools</label>
                                <select multiple class="form-control" id="tools">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control" id="Location">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Add OR Update Projects</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                </div>
            </div>
            <!--Projects Table-->
            <div class="container">
                <h1>View/Dash Projects</h1>
                <div class="row">
                    <table style="width:100%">
                        <tr>
                            <th>View</th>
                            <th>Project Name</th>
                            <th>Number</th>
                            <th>Brand</th>
                            <th>Image</th>
                            <th>Fabric</th>
                            <th>Notions</th>
                            <th>Trim</th>
                            <th>Tools</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <a class="action" href="./projects/show.php">
                                        <i class="fa fa-eye">View</i>
                                    </a>
                                </button>
                            </td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fas fa-pencil-ruler"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                        </tr>
                    </table>
                </div>
                 <div class="container border-bottom">
                </div>
            </div>
            <!--Single Projects-->
            <div class="container">
                <h1>Project</h1>
                <div class="row">
                    <div class="row">
                        <div class="col-3  h-100">
                            Project Name:
                        </div>
                        <div class="col-2  h-100">
                            DATA
                        </div>
                        <div class="col-2  h-100">
                            Status:
                        </div>
                        <div class="col-2  h-100">
                            DATA
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            Pattern Number/Brand:
                        </div>
                        <div class="col-2  h-100">
                            DATA Data
                        </div>
                        <div class="col-2  h-100">
                            Location:
                        </div>
                        <div class="col-2  h-100">
                            DATA
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <br><br><br>
                                <label>Image Place Holder </label>
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <br><br><br>
                                <label>Image Place Holder </label>
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <br><br><br>
                                <label>Image Place Holder </label>
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                        <div class="col-3  h-100">
                            <div class="form-group">
                                <br><br><br>
                                <label>Image Place Holder </label>
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <!--Supplies-->
                    <div class="row">
                        <div class="container">
                            <h3>Supplies</h3>
                            <div class="row">
                                <table style="width:100%">
                                    <tr>
                                        <th>Fabric</th>
                                        <th>Shopping</th>
                                        <th>Notions</th>
                                        <th>Shopping</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul>
                                                <!--Fabric-->
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="option1" aria-label="...">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="option1" aria-label="...">
                                            </div>
                                        </td>
                                        <td>
                                            <ul>
                                                <!--Notions-->
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="option1" aria-label="...">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="option1" aria-label="...">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Trims</th>
                                        <th>Shopping</th>
                                        <th>Tools</th>
                                        <th>Shopping</th>
                                    </tr>
                                    <tr>
                                        <!--Trims-->
                                        <td>
                                            <ul>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="option1" aria-label="...">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="option1" aria-label="...">
                                            </div>
                                        </td>
                                        <!--Tools-->
                                        <td>
                                            <ul>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="option1" aria-label="...">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="option1" aria-label="...">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                     <div class="container border-bottom">
                </div>
                </div>
            </div>


            <!--FOOTER-->
            <div class="item4 grid-container mr-auto">
                <footer>
                    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark pt-1 pb-0">
                        <a class="navbar-brand" href="/sewingpm2/public/index.php">&nbsp;&nbsp; <i class="fas fa-ruler"
                                aria-hidden="true"></i> Sewing Project Manager
                            &nbsp;&nbsp;</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/sewingpm2/public/index.php">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sewingpm2/public/about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://project-planning.sue-a-darby.com/">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sewingpm2/public/#" tabindex="-1"
                                        aria-disabled="true">LogIn</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sewingpm2/public/dash.php" tabindex="-1"
                                        aria-disabled="true">Dash</a>
                                </li>
                                <li class="nav-item dropup">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Dashboard
                                        Navigation</a>
                                    <div class="dropdown-menu" aria-labelledby="dashboard">
                                        <a class="dropdown-item"
                                            href="/sewingpm2/public/../public/projects/index.php">Projects</a>
                                        <a class="dropdown-item"
                                            href="/sewingpm2/public/../public/projects/patterns/index.php">Patterns</a>
                                        <a class="dropdown-item"
                                            href="/sewingpm2/public/../public/projects/fabric/index.php">Fabric</a>
                                        <a class="dropdown-item"
                                            href="/sewingpm2/public/../public/projects/notions/index.php">Notions</a>
                                        <a class="dropdown-item"
                                            href="/sewingpm2/public/../public/projects/trims/index.php">Trims</a>
                                        <a class="dropdown-item"
                                            href="/sewingpm2/public/../public/projects/tools/index.php">Tools</a>
                                        <a class="dropdown-item" href="/sewingpm2/public/shopping.php">Shopping
                                            List</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
            </script>
</body>

</html>