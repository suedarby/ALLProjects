<footer>
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
         <a class="navbar-brand" href="<?php echo url_for('index.php'); ?>">&nbsp;&nbsp; <i class="fas fa-ruler"></i> Sewing Project Manager
        &nbsp;&nbsp;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
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
                <a class="nav-link" href="<?php echo url_for('#'); ?>" tabindex="-1" aria-disabled="true">LogIn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url_for('dash.php'); ?>" tabindex="-1" aria-disabled="true">Dash</a>
            </li>
            <li class="nav-item dropup">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dashboard Navigation</a>
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
        </div>
    </nav>
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

</body>
</html>
<?php 
 db_disconnect($db);
?>