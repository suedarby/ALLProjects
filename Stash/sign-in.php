<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>Project Manager - Sign In</title>
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
  <!--App's CSS-->
  <link href="assets/dist/css/sewing.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/dist/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
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
        <!-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Dropdown</a>
                          <div class="dropdown-menu" aria-labelledby="dropdown01">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </li>-->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <h1>Login Form is non-functional at this time. Other elements of the system must be created before this can be
    functional. Guest Login will only be for demo, view only purposes not for actual use.</h1>
  <!--Nav bar ENDS here and should be on each page-->
  <div class="login-form">
    <form action="assets/actions/confirmation.php" method="post">
      <h2 class="text-center">Log in</h2>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Log in</button>
      </div>
      <div class="clearfix">
        <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
        <a href="#" class="float-right">Forgot Password?</a>
      </div>
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
  </div>
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
          <li class="nav-item">
            <a class="nav-link" href="sign-in.html">Sign In</a>
          </li>
          <!--<li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>-->
        </ul>
      </span>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>