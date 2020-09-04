<?php 
require_once('../../../private/initialize.php'); 
$page_title = 'Add Tool'; 

$test =$_GET['test'] ?? '';

if($test == '404') {
    error_404();
} elseif ($test == '500') {
    error_500();
} elseif($test == 'redirect') {
    redirect_to(url_for('../projects/tools/index.php'));
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
                    <a class="back-link" href="<?php echo url_for('./projects/tools/index.php'); ?>">&laquo; Back to List</a>
                    <h1 class="h2">New Tool</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
        <form class="form-inline" action="" method="post">
    <section class="container-fluid form-inline">  
        <div class="row form-row align-items-center col px-md-5">
            <div class="form-group">  
                    <!--Tool Text Input-->  
                    <label for="Tool">&nbsp;Tool&nbsp;</label>
                    <input class="form-control" type="text" placeholder="Tool">
                    &nbsp;&nbsp;&nbsp;
    <section class="container-fluid form-inline">  
        <div class="row form-row align-items-center col px-md-5">
            <div id="operations">
                <button type="button" class="btn btn-primary">Add Tool
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