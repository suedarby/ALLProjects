<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>Test Table Query</title> 

  <?php include 'includes/head.php'; ?>  

<?php include_once './assets/actions/connect.php'; ?>
<?php include_once './assets/actions/pattablehead.php'; ?><!--Shows the results of the Pattern Table VIEW -->

</head> 
  
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
                      <h1 class="h2">Data Entry</h1>  </div>
                <!--CONTENT-->
<ol>
<li>PUT data entered from Pattern Number and Description in Patterns table. </li>
<li>Query Brand, Size &amp; Style tables to fill in option drop downs.</li>
<li>Save choices from data and drop downs in correct tables and update database.</li>
<li>Form in accordion section 1 and Results Table full list in accordion section 2 for each data entry page.</li>
<li>Add image preview to add image area.</li>
<li>Update query to include images table.</li>
</ol>
<div class="row">        
    <form  action="./assets/actions/insert.php" enctype="multipart/form-data" method="POST"> 
    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="num">Pattern Number</label>
                <input type="text" class="form-control" name="num" >
            </div>
            <div class="form-group col-md-6">
                <label for="descri">Description</label>
                <textarea class="form-control" cols="25" name="descri" rows="5"></textarea><br>
            </div>
    </div>  
           <div class="form-row">      
                    <div class="form-group col-md-4">
                        <label for="inputBrand">Brand</label>
                        <select id="inputBrand" class="form-control">
                            <option selected>Choose...</option>
                            <option>1</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputSz">Size</label>
                        <select id="inputSz" class="form-control">
                            <option selected>Choose...</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputStyle">Style</label>
                        <select id="inputStyle" class="form-control">
                            <option selected>Choose...</option>
                            <option>3</option>
                        </select>
                    </div>
            </div>        

            <div class="form-row">
                <input type="file" name="uploadfile" value="" />     
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose Pattern Images</label>
                        <h3>IMAGE PREVIEW</h3>
                    </div>
            </div>           
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
</div>
                
    <!--PATTERN TABLE VIEW QUERY-->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">PATTERN TABLE VIEW Query</h1>
</div>
<div class="table-responsive">  
    <table class="table table-striped">  
        <tr>  
            <th>Image</th>
            <th>Pattern Number</th>  
            <th>Pattern Description</th>  
            <th>Brand</th> 
            <th>Size</th> 
            <th>Style</th> 
        </tr>  
        <!--Calls the items from the Pattern Table VIEW in a while loop-->
            <?php  
            while($row = mysqli_fetch_array($result))  
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
</div>
    <br>
 <!--CARDS--> 
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
</section>
</body> 
 </html> 