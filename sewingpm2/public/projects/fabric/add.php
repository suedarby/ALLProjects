<?php 
require_once('../../../private/initialize.php'); 
$page_title = 'Add Fabric'; 

$test =$_GET['test'] ?? '';

if($test == '404') {
    error_404();
} elseif ($test == '500') {
    error_500();
} elseif($test == 'redirect') {
    redirect_to(url_for('../projects/fabric/index.php'));
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
                    <a class="back-link" href="<?php echo url_for('./projects/fabric/index.php'); ?>">&laquo; Back to List</a>
                    <h1 class="h2">Add New Fabric</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
        <form class="form-inline" action="" method="post">
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
    <section class="container-fluid form-inline">  
        <div class="row form-row align-items-center col px-md-5">
            <div class="p-3 form-group"> 
                    <!--Weave Multi Select-->
                <div class="col">
                    <label for="Weave">&nbsp;&nbsp;Weave&nbsp;&nbsp;</label>
                </div>
                <div class="col">
                    <select class="form-control" id="Weave">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>&nbsp;&nbsp;
                    <!--Fiber Multi Select-->    
                </div>
                <div class="col">
                    <label for="Fiber">&nbsp;&nbsp;Fiber&nbsp;&nbsp;</label>
                </div>
                <div class="col">
                    <select class="form-control" id="Fiber">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>&nbsp;&nbsp;
                    <!--Color Multi Select-->    
                </div>
                <div class="col">
                    <label for="Color">&nbsp;&nbsp;Color&nbsp;&nbsp;</label>
                </div>
                <div class="col">
                    <select class="form-control" id="Color">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>&nbsp;&nbsp;
                </div>
            </div>  
        </div>   
    </section>
    <section class="container-fluid form-inline">  
        <div class="row form-row align-items-center col px-md-5">
            <div id="operations">
                <button type="button" class="btn btn-primary">Add New Fabric
                </button>  
            </div>
        </div>
    </section>                       
        </form>    

    <br><br><br><br><br><br><br><br>
</main> 

<aside class="aside aside-1">  
    <?php include(SHARED_PATH . '/sidenav.php'); ?>  
</aside>

<?php include(SHARED_PATH . '/footer.php'); ?>