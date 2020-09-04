            <nav id="sidebarMenu" class="bd-sidenav col-md-4 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Projects &amp; Supplies</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../public/dashboard/index.php'); ?>">
                                <i class="fas fa-ruler"></i>Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../public/projects/index.php'); ?>">
                                <i class="fas fa-ruler"></i>Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../public/projects/fabric/index.php'); ?>">
                                <i class="fas fa-ruler"></i> Fabric</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../public/projects/notions/index.php'); ?>">
                                <i class="fas fa-ruler"></i> Notions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../public/projects/patterns/index.php'); ?>">
                                <i class="fas fa-ruler"></i>
                                Patterns
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../public/projects/tools/index.php'); ?>">
                                <i class="fas fa-ruler"></i>Tools</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../public/projects/trims/index.php'); ?>">
                                <i class="fas fa-ruler"></i>Trims</a>
                        </li>
                    </ul>
                     <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Shopping Wish List</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('shopping.php'); ?>">
                                <i class="fas fa-ruler"></i>Shopping List</a>
                        </li>
                   
                     <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Project Status</span>
                    </h6>
                   <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../../public/reports/inprogress/index.php'); ?>">
                                <i class="fas fa-ruler"></i>
                                In Progress
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../../public/reports/stalled/index.php'); ?>">
                                <i class="fas fa-ruler"></i>
                                Stalled 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../../public/reports/complete/index.php'); ?>">
                                <i class="fas fa-ruler"></i>
                                Completed 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('../../public/reports/planned/index.php'); ?>">
                                <i class="fas fa-ruler"></i>
                                Planned 
                            </a>
                        </li>
                        <li class="nav-item">
                           <br>  <br>  <br>  <br>                         
                        </li>
                    </ul>
                </div>
            </nav>
           