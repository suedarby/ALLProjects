<?php require_once('../../private/initialize.php'); 
include(SHARED_PATH . '/head.php'); 
$page_title = 'Patterns'?>

<?php  
$projects = [
["id"=>"1","status"=>"Stalled","name"=>"Test Project","number"=>"8286","brand"=>"Simplicity","image"=>"This will be an image thumbnail","fabric"=>"Cotton","location"=>"3 yds"],
["id"=>"2","status"=>"Stalled","name"=>"Test Project","number"=>"8286","brand"=>"Butterick","image"=>"This will be an image thumbnail","fabric"=>"Cotton","location"=>"3 yds"],
["id"=>"3","status"=>"Stalled","name"=>"Test Project","number"=>"8286","brand"=>"McCalls","image"=>"This will be an image thumbnail","fabric"=>"Cotton","location"=>"3 yds"],

];
 ?>

<title>Sewing Project Manager - <?php echo $page_title; ?></title>

<div class="wrapper">
  <header class="header">    
      <?php include(SHARED_PATH . '/topnav.php'); ?>
    </header>
 </div> 

<main role="main" class="dash main content bd-content flex-column ">
    <section class="container">   <!--Projects SECTION HERE ---> 
        <div class="flex-column">           
            <div class="row">
                <div class="  justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">   
                    <h1 class="h2">Projects</h1> 
                </div> 
            </div> 
        <button type="button" class="btn btn-outline-primary btn-link btn-sm">
            <a class="action" href="<?php echo url_for('projects/add.php'); ?>">
            <i class="fa fa-plus-square" aria-hidden="true"> &nbsp;Add A Project</i>
            </a>
        </button>
        </div> 
    </section>  
    <div class=" justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3">  
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><i class="fa fa-eye" aria-hidden="true"></i></th>
                        <th scope="col">ID</th>
                        <th scope="col">Status</th>
                        <th scope="col">Name</th>
                        <th scope="col">Number</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Image</th>
                        <th scope="col">Fabric</th>
                        <th scope="col">Location</th>
                        <th scope="col"><i class="fa fa-pencil-square" aria-hidden="true"></i></th>
                        <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($projects as $project) { ?>
                    <tr>
        <th scope="row">
            <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                <a class="action" href="<?php echo url_for('./projects/show.php?id=' . $project['id']); ?>">
            <i class="fa fa-eye" aria-hidden="true">View</i>
                </a>
            </button>
        </th>
                        <td><?php echo $project["id"]; ?></td>
                        <td><?php echo $project["status"]; ?></td>
                        <td><?php echo $project["name"]; ?></td>
                        <td><?php echo $project["number"]; ?></td>
                        <td><?php echo $project["brand"]; ?></td>
                        <td><?php echo $project["image"]; ?></td>
                        <td><?php echo $project["fabric"]; ?></td>
                        <td><?php echo $project["location"]; ?></td>
                        <td> <button type="button" class="btn btn-outline-primary btn-link btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
                        <td> <button type="button" class="btn btn-outline-primary btn-link btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
              
                   
                    <?php }; ?>                
                </tbody>
            </table>  
    </div>
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
    <section class="container">   <!--Fabric SECTION HERE ---> 
        <div class="flex-column">           
            <div class="row">
                <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">   
                    <h1 class="h2">Fabric</h1> 
                </div> 
            </div> 
            <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                <a class="action" href="<?php echo url_for('./projects/fabric/add.php'); ?>">
                <i class="fa fa-plus-square" aria-hidden="true"> &nbsp;Add New Fabric</i>
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
                <th scope="col">Weave</th>
                <th scope="col">Fiber</th>
                <th scope="col">Description</th>
                <th scope="col">Width</th>
                <th scope="col">Yards</th>
                <th scope="col">Color</th>
                <th scope="col"><i class="fa fa-pencil-square" aria-hidden="true"></i></th>
                <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($projects as $project) { ?>
                <tr>             
                <th scope="row">
                    <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                    <a class="action" href="<?php echo url_for('./projects/fabric/show.php?id=' . $project['id']); ?>">
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
    <section class="container">   <!--Notions SECTION HERE ---> 
        <div class="flex-column">           
            <div class="row">
                <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">   
                    <h1 class="h2">Notions</h1> 
                </div>  
            </div> 
                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                    <a class="action" href="<?php echo url_for('./projects/notions/add.php'); ?>">
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
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
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
                    <a class="action" href="<?php echo url_for('./projects/notions/show.php?id=' . $project['id']); ?>">
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
    <section class="container">   <!--Trims SECTION HERE ---> 
        <div class="flex-column">           
            <div class="row">
                <div class="justify-content-between flex-wrap  align-items-top pt-3 pb-2 mb-3 border-bottom">   
                    <h1 class="h2">Trims</h1> 
                </div>  
            </div> 
                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                    <a class="action" href="<?php echo url_for('./projects/trims/add.php'); ?>">
                    <i class="fa fa-plus-square" aria-hidden="true"> &nbsp;Add New Trims</i>
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
                        <a class="action" href="<?php echo url_for('./projects/trims/show.php?id=' . $project['id']); ?>">
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
    </div>    <br> <br> <br>
</main>  

<aside class="aside aside-1"><?php include(SHARED_PATH . '/sidenav.php'); ?></aside>

<?php include(SHARED_PATH . '/footer.php'); ?>