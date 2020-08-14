<body>
    <?php define("TITLE", "Sue Darby")?>
    <!--Header-->
    <section class="container">
        <div> <?php include 'includes/head.php'; ?></div>
        <!--Top Nav-->
        <?php include 'includes/topnav.php'; ?>
        <!--Share & Export-->
    </section>

    <!--BODY of the home page-->
    <main>
        <div>
            <br><br><br><br>
        </div>
        <section class="container">
            <div>
                <h1>Sewing Project Manager</h1>
                <p class="lead">This is a project and supplies tracker for sewing projects but it can be used for
                    knitting,
                    crochet, woodworking, car parts, Warhammer minis, or just about any other hobby that has smaller
                    projects and supplies for each one.
                    <br> This can also track what items need to be purchased or what is
                    already "in stock" to avoid over buying which is a bad habit of those with hobbies!</p>
            </div>
    </main>
    <div>
        <br>
    </div>
    <section class="container">
        <div class="row">
            <div class="col-md-6">
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
            <div class="col-md-6">
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
        </div>
    </section>
    <!--container -->

    <!--FOOTER include GOES HERE-->
    <div>
        <section class="container"></section>

        <?php include 'includes/footer.php'; ?>
    </div>
</body>

</html>