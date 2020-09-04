<?php require_once('../../private/initialize.php'); 

 include(SHARED_PATH . '/head.php'); 

$id = $_GET['id'] ?? '1';
echo h($id);

 $page_title = 'Show Details'
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
                    <h1 class="h2">Details</h1> 
                </div> 
            </div> 

            
<p>Other Content here</p>


        </div>
    </section>
</main>




<aside class="aside aside-1">  <?php include(SHARED_PATH . '/sidenav.php'); ?>  
 
</aside>


<?php include(SHARED_PATH . '/footer.php'); ?>