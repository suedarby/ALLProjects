<?php require_once('../../../private/initialize.php'); 
 include(SHARED_PATH . '/head.php'); 
 $page_title = 'Tools'

 ?>

 <?php
$projects = [
["id"=>"1","status"=>"Scissors"],
["id"=>"2","status"=>"Stalled"],
["id"=>"3","status"=>"Stalled"],


];
 ?>
<title>Sewing Project Manager - <?php echo $page_title; ?></title>

<div class="wrapper">
  <header class="header">    
      <?php include(SHARED_PATH . '/topnav.php'); ?>
    </header>
 </div> 

<main role="main" class="dash main content bd-content flex-column ">
    <section class="container">   <!--Tools SECTION HERE ---> 
        <div class="flex-column">           
            <div class="row">
                <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">   
                    <h1 class="h2">Tools</h1> 
                </div>  
            </div> 
                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                    <a class="action" href="<?php echo url_for('./projects/tools/add.php'); ?>">
                    <i class="fa fa-plus-square" aria-hidden="true"> &nbsp;Add New Tool</i>
                    </a>
                </button>             
        </div> 
    </section>  
    <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3">  
            <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i class="fa fa-eye" aria-hidden="true"></i></button></th>
                            <th scope="col">Type</th>
                            <th scope="col"><i class="fa fa-pencil-square" aria-hidden="true"></i></th>
                            <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                <tbody>
                    <?php foreach($projects as $project) { ?>
                    <tr>             
                    <th scope="row">
                        <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                        <a class="action" href="<?php echo url_for('./projects/tools/show.php?id=' . $project['id']); ?>">
                        <i class="fa fa-eye" aria-hidden="true">View</i>
                        </a>
                        </button>
                    <td><?php echo $project["status"]; ?></td>
                    
                    <td> <button type="button" class="btn btn-outline-primary btn-link btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
                    <td> <button type="button" class="btn btn-outline-primary btn-link btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <?php }; ?> 
                </tbody>
            </table>  
    </div>

    <br> <br> <br>
</main>  

<aside class="aside aside-1"><?php include(SHARED_PATH . '/sidenav.php'); ?></aside>

<?php include(SHARED_PATH . '/footer.php'); ?>