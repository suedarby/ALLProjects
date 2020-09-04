<?php require_once('../../../private/initialize.php'); 

 include(SHARED_PATH . '/head.php'); 

$id = $_GET['id'] ?? '1';
echo h($id);

 $page_title = 'Show Trim Details'
?>


<title>Sewing Project Manager - <?php echo $page_title; ?></title>

<div class="wrapper">
  <header class="header">    
      <?php include(SHARED_PATH . '/topnav.php'); ?>
    </header>
 </div> 
<main role="main" class="dash main content bd-content">
    <section class="container">   <!--Projects SECTION HERE ---> 
        <div class="flex-column">           
            <div class="row">
                <div class="  justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">   
                    <a class="back-link" href="<?php echo url_for('./projects/trims/index.php'); ?>">&laquo; Back to List</a>
                    <h1 class="h2">Trim Details</h1> 
                </div> 
            </div> 
<div class="row">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="./assets/img/simplicity8555.jpg" class="card-img" alt="Pattern image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Title pulls from ID clicked</h5>
                        <p class="card-text">This pulls from the descriptions for Pattern, Fabric, Notions, Trims. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">
                            <ul class="list-left">
                                <li>Loops through list of data points for </li>
                                <li>Fiber,</li>
                                <li> Weave, </li>
                                <li>Width and Yardage</li>
                            </ul>
                            May also show if the item is needed or is in house already
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
                                        <td>COMPANY + PATTERN #</td>
                                        <td>status</td>
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
</div>
    </section>
</main>

<aside class="aside aside-1">
<?php include(SHARED_PATH . '/sidenav.php'); ?>  
</aside>

<?php include(SHARED_PATH . '/footer.php'); ?>