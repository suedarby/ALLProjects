<?php 
require_once('../../../private/initialize.php'); 
$page_title = 'Add Pattern'; 

$test =$_GET['test'] ?? '';

if($test == '404') {
    error_404();
} elseif ($test == '500') {
    error_500();
} elseif($test == 'redirect') {
    redirect_to(url_for('../projects/patterns/index.php'));
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
                    <a class="back-link" href="<?php echo url_for('./projects/patterns/index.php'); ?>">&laquo; Back to List</a>
                    <h1 class="h2">New Pattern</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
        <form class="form-inline" action="" method="post">
    <section class="container-fluid form-inline">  
        <div class="row form-row align-items-center col px-md-5">
            <div class="form-group">  
                    <!--Pattern Number Text Input-->  
                    <label for="PatternNumber">&nbsp;Pattern Number&nbsp;</label>
                    <input class="form-control" type="text" placeholder="PatternNumber">
                    &nbsp;&nbsp;&nbsp;
                    <!--Brand drop down-->  
                <div class="row form-row align-items-center col px-md-5">
                    <label for="PatternCompany">&nbsp;Pattern Company&nbsp;</label>
                        <select class="form-control" id="PatternCompany">
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
        <div class="row form-row align-items-center col px-md-5">
            <div class="p-3 form-group">                              
                <!--uploadImage-->    
                <label for="PatternImages">&nbsp;&nbsp;Pattern Images&nbsp;&nbsp;</label>
                <input type="file" class="form-control-file" id="PatternImages">&nbsp;&nbsp;
                   <br><br>Display Images here<br><br>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
        <div class="row form-row align-items-center col px-md-5">
            <div class="p-3 form-group">     
                <!--Style drop down-->    
                <label for="Style">&nbsp;&nbsp;Style</label>
                    <select class="form-control" id="Style">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>&nbsp;&nbsp;
                <!--Size Multi Select-->
                <label for="Size">&nbsp;&nbsp;Size&nbsp;&nbsp;</label>
                    <select class="form-control" id="Size">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>&nbsp;&nbsp;
            </div>  
        </div>   
    </section>
    <section class="container-fluid form-inline">  
        <div class="row form-row align-items-center col px-md-5">
            <div id="operations">
                <button type="button" class="btn btn-primary">Add Pattern
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