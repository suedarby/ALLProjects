<?php require_once('../private/initialize.php'); 
 include(SHARED_PATH . '\head.php'); 
$page_title = 'Home'?>

<body>

<title>Sewing Project Manager - <?php echo $page_title; ?></title>

<div class="wrapper">
  <header class="header">    
      <?php include(SHARED_PATH . '/topnav.php'); ?>
    </header>
 </div> 

<main role="main" class="dash main content bd-content flex-column ">
    <section class="container">   
        <div class="flex-column">           
            <div class="row">
                <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Sewing Project Manager</h1>
                <p class="lead">This is a project and supplies tracker for sewing projects but it can be used for
                    knitting,
                    crochet, woodworking, car parts, Warhammer minis, or just about any other hobby that has smaller
                    projects and supplies for each one.
                    <br> This can also track what items need to be purchased or what is
                    already "in stock" to avoid over buying which is a bad habit of those with hobbies!</p>
            </div>
        </div>
    </section>
    <section class="container mb-5 pb-5">
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
    </section>
</main>
<?php include '../private/shared/footer.php'; ?>
</body>
</html>