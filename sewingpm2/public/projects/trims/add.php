<?php 
require_once('../../../private/initialize.php'); 
 $page_title = 'Add Trims';

$test =$_GET['test'] ?? '';

if($test == '404') {
    error_404();
} elseif ($test == '500') {
    error_500();
} elseif($test == 'redirect') {
    redirect_to(url_for('../dashboard/index.php'));
}
?>
<?php include(SHARED_PATH . '/head.php'); ?>
<title>Sewing Project Manager - <?php echo $page_title; ?></title>

<div class="wrapper">
  <header class="header">    
      <?php include(SHARED_PATH . '/topnav.php'); ?>
    </header>
 </div> 
<main role="main" class="dash main content border bg-light bd-content flex-column ">
    <section class="container">   
        <div class="flex-column">           
            <div class="row">
                <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom"> 
                    <a class="back-link" href="<?php echo url_for('./projects/trims/index.php'); ?>">&laquo; Back to List</a>
                    <h1 class="h2">New Trim</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
        <form class="form-inline" action="" method="post">
            <div class="form-row">
                <div class=" form-group">
                    <!--Type drop down-->    
                    <div class="col">
                        <label for="Type">&nbsp;&nbsp;Type&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                    <div class="col">
                        <select class="form-control" id="Type">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        &nbsp;&nbsp;&nbsp; 
                    </div> 
                </div>
            </div> 
        </div>
    </section>
    <section class="container-fluid form-inline">  
        <div class="form-row"> 
            <div class=" form-group"> 
                <div class="col">
                    <label for="Description">Description</label>
                </div>
                <div class="col">
                    <textarea class="form-control container-fluid" id="Description" cols="60" rows="5">Describe print, colors, textures of fabric along with possible applications</textarea>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
            <!--Color drop down-->  
        <div class="row form-row ">
            <div class=" form-group"> 
                <div class="col"> 
                    <label for="Color">&nbsp;Color&nbsp;</label>
                </div>
                <div class="col"><select class="form-control" id="Color">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
         <div class="row form-row ">
            <div class=" form-group"> 
                <div class="col">     
                <!--Yardage Text Input--> 
                    <label for="Yardage">&nbsp;&nbsp;Yardage</label>
                </div>
                <div class="col">
                    <input class="form-control" type="text" placeholder="Yardage">&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
        <div class="row form-row align-items-center col px-md-5">
            <div id="operations">
                <button type="button" class="btn btn-primary">Create Project
                </button>  
            </div>
        </div>
     </section>                       
        </form>    
      <br><br><br><br><br><br><br><br>
    </section>  
</main> 

<aside class="aside aside-1">  
    <?php include(SHARED_PATH . '/sidenav.php'); ?>  
</aside>

<?php include(SHARED_PATH . '/footer.php'); ?>