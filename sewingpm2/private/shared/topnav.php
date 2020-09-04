<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="<?php echo url_for('index.php'); ?>">&nbsp;&nbsp; <i class="fas fa-ruler"></i> Sewing Project Manager
        &nbsp;&nbsp;</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo url_for('index.php'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url_for('about.php'); ?>">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://project-planning.sue-a-darby.com/">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url_for('#'); ?>">LogIn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url_for('../public/dashboard/index.php'); ?>">Dash</a>
            </li>
            <li class="nav-item">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dashboard" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Dashboard Navigation</a>
                <div class="dropdown-menu" aria-labelledby="dashboard">
                    <a class="dropdown-item" href="<?php echo url_for('../public/projects/index.php'); ?>">Projects</a>
                    <a class="dropdown-item" href="<?php echo url_for('../public/projects/patterns/index.php'); ?>">Patterns</a>
                    <a class="dropdown-item" href="<?php echo url_for('../public/projects/fabric/index.php'); ?>">Fabric</a>
                    <a class="dropdown-item" href="<?php echo url_for('../public/projects/notions/index.php'); ?>">Notions</a>
                    <a class="dropdown-item" href="<?php echo url_for('../public/projects/trims/index.php'); ?>">Trims</a>
                    <a class="dropdown-item" href="<?php echo url_for('../public/projects/tools/index.php'); ?>">Tools</a>
                    <a class="dropdown-item" href="<?php echo url_for('shopping.php'); ?>">Shopping List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>