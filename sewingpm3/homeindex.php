<?php require_once('./includes/initialize.php'); 
include('./includes/head.php'); 
$page_title = 'Patterns' 

 ?>
    <title>Sewing Project Manager - <?php echo $page_title; ?></title>

     <!--Top Nav Include-->
    <?php include('./includes/topnav.php'); ?>

<body class="container-fluid  ">
    <div class="grid-container">
        <div class="item1 container m-5">
            <div class="row">   
                <div class="justify-content-between flex-wrap  align-items-top p-3 border-bottom">
                    <h1 class="h2">Sewing Project Manager</h1>
                    <p class="lead">This is a project and supplies tracker for sewing projects but it can be used for
                        knitting,
                        crochet, woodworking, car parts, Warhammer minis, or just about any other hobby that has smaller
                        projects and supplies for each one.
                        <br> This can also track what items need to be purchased or what is
                        already "in stock" to avoid over buying which is a bad habit of those with hobbies!
                    </p>
                </div>
            </div>
</div>    
            <div class="container pl-5 ml-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Questions</h5>
                                <p class="card-text">
                                    <ul class="list-left">
                                        <li>What are my current UFOs (unfinished objects)</li>
                                        <li>Pattern Tracking - what patterns do I have?</li>
                                        <li>Fabric - what fabrics do I have?</li>
                                        <li>Notions - what notions do I have?</li>
                                        <li>Tools - what's on my wishlist?</li>
                                    </ul>
                                </p>
                                <a href="#" class="btn btn-primary">Questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Features</h5>
                                <p class="card-text">
                                    <ul class="list-left">
                                        <li>Link supplies to patterns</li>
                                        <li>Inventory of supplies on hand</li>
                                        <li>Shopping list to reduce double or more buying</li>
                                        <li>Project status</li>
                                        <li>Filters</li>
                                        <li>Sorting</li>
                                    </ul>
                                </p>
                                <a href="#" class="btn btn-primary">Uses</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Shopping</h5>
                            <p class="card-text">
                                <ul class="list-left">
                                    <li>What do I need?</li>
                                    <li>How much do I need?</li>
                                    <li>What's on the wishlist?</li>
                                </ul>
                            </p>
                            <a href="#" class="btn btn-primary">Questions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Footer-->
    <?php include('./includes/footer.php'); ?>