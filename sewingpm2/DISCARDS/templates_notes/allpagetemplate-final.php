<!-- ALWAYS use static string NO DYNAMIC functionality here-->
<?php require_once '../../private/functions/initialize.php'; ?>
<!--HEAD notes change file path as needed to get functions 
and includes correct-->

<?php
  $page_set = find_all_pages();
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/head.php'); ?>

 
<body>
                <br>
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
                <br>
    <div class="row">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="./assets/img/simplicity8555.jpg" class="card-img" alt="Pattern image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
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
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </main>
        </div>
    </div>
    <!--footer-->
    <?php include './private/includes/footer.php'; ?>

</body>

</html>