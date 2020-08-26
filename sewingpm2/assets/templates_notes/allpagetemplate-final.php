<!doctype html>
<html lang="en">
<!--HEAD-->
<?php include_once './assets/actions/connect.php'; ?>

<?php include 'includes/head.php'; ?>

<?php  
 $sql = "SELECT * FROM patterntable";  
 $result = mysqli_query($conn, $sql);  
 ?> 
 
<body>
      <!--Header-->
    <section class="container">
        <!--Top Nav-->
        <?php include 'includes/topnav.php'; ?>
        <!--Share & Export-->
    </section>
    <!--Body of page-->
    <div class="container-fluid">
        <div class="row">
            <!--SIDEBAR for dash pages only-->
            <?php include 'includes/sidenav.php'; ?>

            <!--CONTENT AREA-->
            <main role="main" class="dash col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Projects</h1>
                    <!--SHARE & EXPORT BUTTONS on dash pages only-->
                    <?php include 'includes/shareexport.php'; ?>

                </div>
                <!--CONTENT-->

<!--SQL TABLE --> 
  <div class="table-responsive-sm">
    <table class="table table-hover">
      <table class="table table-striped">  
        <tr>  
          <th>Pattern Number</th>  
           <th>Pattern Description</th>  
           <th>Brand</th> 
           <th>Size</th> 
           <th>Style</th> 
        </tr>  
<?php  while($row = mysqli_fetch_array($result))  
  {  
 ?>  
        <tr>  
            <td><?php echo $row["Pattern Number"]; ?></td>  
            <td><?php echo $row["Pattern Description"];?></td>  
            <td><?php echo $row["Brand"]; ?></td>  
            <td><?php echo $row["Size"]; ?></td> 
            <td><?php echo $row["Style"]; ?></td> 
        </tr>  
<?php  
  }  
?>  
    </table>  
<h1>Data Entry Forms</h1>
    <div class="row">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                            <select class="custom-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Pattern Images</label>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    <br>
                </div>
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
    <?php include 'includes/footer.php'; ?>

</body>

</html>