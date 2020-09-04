<?php require_once('../../../private/initialize.php'); 
 include(SHARED_PATH . '/head.php'); 
 $page_title = 'Patterns'

 ?>

 <?php
$projects = [
["id"=>"1","status"=>"Stalled","name"=>"Test Project","number"=>"8286","brand"=>"Simplicity","image"=>"This will be an image thumbnail","fabric"=>"Cotton","yardage"=>"3 yds","notions"=>"Zipper","trims"=>"Ribbon","tools"=>"Scissors"],
["id"=>"2","status"=>"Stalled","name"=>"Test Project","number"=>"8286","brand"=>"Butterick","image"=>"This will be an image thumbnail","fabric"=>"Cotton","yardage"=>"3 yds","notions"=>"Button","trims"=>"Ribbon","tools"=>"Scissors"],
["id"=>"3","status"=>"Stalled","name"=>"Test Project","number"=>"8286","brand"=>"McCalls","image"=>"This will be an image thumbnail","fabric"=>"Cotton","yardage"=>"3 yds","notions"=>"Snap","trims"=>"Ribbon","tools"=>"Scissors"],


];
 ?>

<title>Sewing Project Manager - <?php echo $page_title; ?></title>

<div class="wrapper">
  <header class="header">    
      <?php include(SHARED_PATH . '/topnav.php'); ?>
    </header>
 </div> 

<main role="main" class="dash main content bd-content flex-column ">
    <section class="container">   <!--Patterns SECTION HERE ---> 
        <div class="flex-column">           
            <div class="row">
                <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">   
                    <h1 class="h2">Patterns</h1> 
                </div> 
            </div> 
                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                    <a class="action" href="<?php echo url_for('./projects/patterns/add.php'); ?>">
                    <i class="fa fa-plus-square" aria-hidden="true"> &nbsp;Add New Pattern</i>
                    </a>
                </button>     
        </div> 
    </section>  
    <div class=" justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3">  
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="row"><i class="fa fa-eye" aria-hidden="true"></i></th>
                    <th scope="col">Pattern Number</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Style</th>
                    <th scope="col">Size</th>
                    <th scope="col"><i class="fa fa-pencil-square" aria-hidden="true"></i></th>
                    <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($projects as $project) { ?>
                <tr>             
                <th scope="row">
                    <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                    <a class="action" href="<?php echo url_for('./projects/patterns/show.php?id=' . $project['id']); ?>">
                    <i class="fa fa-eye" aria-hidden="true">View</i>
                    </a>
                    </button>
                <td><?php echo $project["id"]; ?></td>
                <td><?php echo $project["status"]; ?></td>
                <td><?php echo $project["name"]; ?></td>
                <td><?php echo $project["number"]; ?></td>
                <td><?php echo $project["brand"]; ?></td>
                <td><?php echo $project["image"]; ?></td>
                <td><?php echo $project["fabric"]; ?></td>
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