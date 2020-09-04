<?php require_once('../../../private/initialize.php'); ?>

<?php

    $notion_set = find_all_notions();
 //  $locations = find_all_locations();
?>    

<?php
include(SHARED_PATH . '/head.php'); 

 $page_title = 'Notions';
 
 ?>
<!--
<title>Sewing Project Manager - <?php echo $page_title; ?></title>

<div class="wrapper">
  <header class="header">    
      <?php include(SHARED_PATH . '/topnav.php'); ?>
    </header>
 </div> 

<main role="main" class="dash main content bd-content flex-column ">
    <section class="container"> --> 
      <!--Notions SECTION HERE ---> 
       <!-- <div class="flex-column">           
            <div class="row">
                <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">   
                    <h1 class="h2">Notions</h1> 
                </div>  
            </div> -->
                <!--ADD BUTTON-->
         <!--   <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                <a class="action" href="<?php echo url_for('projects/notions/add.php'); ?>">
                <i class="fa fa-plus-square" aria-hidden="true"> &nbsp;Add New Notion</i>
                </a>
            </button>          
        </div> 
    </section>  
    <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3">  
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"><i class="fa fa-eye" aria-hidden="true"></i></button></th>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Size</th>
                    <th scope="col">Location</th>
                    <th scope="col"><i class="fa fa-pencil-square" aria-hidden="true">&nbsp;Edit</i></th>
                    <th scope="col"><i class="fa fa-trash" aria-hidden="true">&nbsp;Delete</i></th>
                </tr>
            </thead>
           
            <tbody>  -->
        <?php while ($result -> msqli_fetch_assoc ($notion_set)) { ?>

                <tr>             
                <th scope="row">
                <td>
                <a class="action" href="<?php echo url_for('projects/notions/.php?id=' . h(u($notions['id']))); ?>">View</a></td>
                    <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                <a class="action" href="<?php echo url_for('projects/notions/show.php?id=' . h(u($notion_set['id']))); ?>">
                            <i class="fa fa-eye" aria-hidden="true">&nbsp;View
                            </i>
                        </a>
                    </button>
                 <td><?php echo h($notion["id"]); ?></td>
                <?php }; ?>     
                <?php while($notion_set = msqli_fetch_assoc($notion)) { ?>
                 <td><?php echo h($notion["type"]); ?></td>
                <?php }; ?> 
                <?php while($notion_set = msqli_fetch_assoc($notion)) { ?>
                 <td><?php echo h($notion["description"]); ?></td>
                <?php }; ?> 
                <?php while($notion_set = msqli_fetch_assoc($notion)) { ?>
                 <td><?php echo h($notion["Qty"]); ?></td>
                <?php }; ?> 
                <?php while($notion_set = msqli_fetch_assoc($notion)) { ?>
                 <td><?php echo h($notion["Size"]); ?></td>
                <?php }; ?> 
               // <?php while($locations = msqli_fetch_assoc($location)) { ?>
                <td>//<?php echo h($location["locations"]); ?></td>
                <?php }; ?> 
           
                    <!--UPDATE -->
              <!--  <td> 
                    <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                    <a class="action" href="<?php echo url_for('./projects/notions/update.php?id=' . h(u($notions['type']))); ?>">
                        <i class="fa fa-pencil-square" aria-hidden="true"> Update</i>
                        </a>
                    </button>
                </td>
                <td> 
                    <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                    <i class="fa fa-trash" aria-hidden="true"> Delete</i>
                    </button>
                </td>-->
                </tr>
               
            </tbody>
        </table>  
    </div>
   
    <br> <br> <br>
</main>  

<aside class="aside aside-1">  
    <?php include(SHARED_PATH . '/sidenav.php'); ?>
</aside>

<?php include(SHARED_PATH . '/footer.php'); ?>