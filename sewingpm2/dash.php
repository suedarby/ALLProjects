<body>
    <?php define("TITLE", "Sue Darby")?>
    <!--Header-->
    <section class="container">
        <div> <?php include 'includes/head.php'; ?></div>
        <!--Top Nav-->
        <?php include 'includes/topnav.php'; ?>
        <!--Share & Export-->
    </section>

    <!--Side Nav-->
    <?php include 'includes/sidenav.php'; ?>

    <!--ALL MAIN CONTENT STARTS HERE-->

    <main role="main" class="dash col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <h1 class="h2">Projects</h1>
        </div>
        <!--Projects-->
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
            <div><a href="projects.php" class="btn btn-primary">More Projects</a>
            </div>
            <br>
        </div>
        </section>
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
            <div><a href="patterns.php" class="btn btn-primary">More Patterns</a>
            </div>
            <br>
        </div>
        </section>
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
                <a href="fabric.php" class="btn btn-primary">More Fabric</a>
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
            <div><a href="tools.php" class="btn btn-primary">More Tools</a>
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
                <a href="shopping.php" class="btn btn-primary">More Shopping</a>
            </div>
            <br>
        </div>
    </main>
    </div>
    </div>

    <!--FOOTER include GOES HERE-->
    <div>
        <?php include 'includes/footer.php'; ?>
    </div>

</body>

</html>