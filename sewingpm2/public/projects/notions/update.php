<?php 
require_once('../../../private/initialize.php'); 
$page_title = 'Update Notions'; 

if(!isset($_GET['id'])) {
    redirect_to(url_for('/projects/notions/index.php'));
}
$id = $_GET['id'];
$type = '';
$description = '';
$quantity = '';
$size = '';

if(is_post_request()){

    //handle form values sent by form

$id = $_POST['id']  ??  ' ';
$type = $_POST['type']  ??  ' ';
$description = $_POST['description']  ??  ' ';
$quantity = $_POST['quantity']  ??  ' ';
$size = $_POST['size']  ??  ' ';

echo "Form parameters</br>";
echo "id" . $id . "</br>";
echo "type" . $type . "</br>";
echo "description" . $description . "</br>";
echo "quantity" . $quantity . "</br>";
echo "size" . $size . "</br>";
} else{
    //
}
$test =$_GET['test'] ?? '';

if($test == '404') {
    error_404();
} elseif ($test == '500') {
    error_500();
} elseif($test == 'redirect') {
    redirect_to(url_for('../projects/notions/index.php'));
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
                    <a class="back-link" href="<?php echo url_for('./projects/notions/index.php'); ?>">&laquo; Back to List</a>
                    <h1 class="h2">Update Notions</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid form-inline">  
        <form  action="<?php echo url_for('projects/notions/update.php?id=' . h(u($id))); ?>" method="post">
            <div class="row form-row">
                <div class="form-group"> 
                        <!--Type Multi Select-->
                    <div class="col">
                        <label for="type">&nbsp;&nbsp;Type&nbsp;&nbsp;</label>
                    </div>
                    <div class="col">
                        <select class="form-control" id="type" name="type">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>&nbsp;&nbsp;
                        <!--Fiber Multi Select-->    
                    </div> 
                <div class="form-row">
                    <div class=" form-group"> 
                        <div class="col">
                            <label for="description">Description</label>
                        </div>
                        <div class="col">
                            <textarea class="form-control container-fluid" id="description" cols="60" rows="5" name="description" placeholder="Describe print, colors, textures of fabric along with possible applications"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                    <div class="col">
                        <label for="quantity">&nbsp;&nbsp;Quantity&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" placeholder="quantity" name="quantity" >
                    </div>
                    <div class="col">  
                        <label for="size">&nbsp;&nbsp;Size&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                    <div class="col">   
                        <input class="form-control" type="text" placeholder="size" name="size">
                    </div>  
            </div>   

        <div class="container-fluid form-inline">  
            <div class="row form-row">
                <div id="operations">
                    <button type="submit" class="btn btn-primary" value="Add New Notions">Add New Notions
                    </button>  
                </div>
          </div>   
        </div> 
    </form>    
      <br><br><br><br><br><br><br><br>
    </section>  
</main> 

<aside class="aside aside-1">  
    //<?php include(SHARED_PATH . '/sidenav.php'); ?>  
</aside>

//<?php include(SHARED_PATH . '/footer.php'); ?>