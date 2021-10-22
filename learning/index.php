    <!--page title--><?php include 'includes/header.php'; ?>
    <section class="container-fluid">
        <!--Top Nav-->
        <?php include 'includes/topnav.php';?>
        <div class="row">
            <!--Side Nav-->
            <?php include 'includes/sidenav.php';?>
            <!--BODY OF PAGE-->
            <div class="col">
                <div class=" mr-5 pr-5 card ">
                    <div class="card-body text-center">
                        <h2 class="card-title suedarbylg">
                            <?php echo TITLE;?>
                        </h2>
                        <p class="lead plain-card">This site is built purely with Bootstrap 4.6 and PHP 7.
                        </p>
                        <p class="lead plain-card">Check out my <a href="cont-ed.php" class="btn btn-primary">Continuing
                                Education Classes list</a> to see where I learned all my <a href="skills.php"
                                class="btn btn-primary">skills</a>.
                        </p>
                        <p class="lead plain-card">To learn more about me check my
                            <a href="about.php" class="btn btn-primary">About Page.</a>
                        </p>
                    </div>
                </div>
                <p></p>
                <section class="container-fluid mr-5 pr-5 ">
                    <div class="row ">
                        <div class="col">
                            <div class="card plain-card">
                                <div class="card-body ">
                                    <h5 class="card-title text-center suedarby"> Skills</h5>
                                    <p class="card-text achievements">
                                    <p><i class="fas fa-certificate"></i> Technical Writing</p>
                                    <p><i class="fas fa-certificate"></i> Process development</p>
                                    <p><i class="fas fa-certificate"></i> Word, Excel, Visio, Google Suite</p>
                                    <p><i class="fas fa-certificate"></i> Charts &amp; graphs</p>
                                    <p><i class="fas fa-certificate"></i> Photography</p>
                                    <p class="text-center"><a href="skills.php"
                                            class="card-link btn btn-primary text-center">Check out the full list</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card plain-card">
                                <div class="card-body pb-4 mb-2">
                                    <h5 class="card-title text-center suedarby">Recent Projects</h5>
                                    <p class="card-text achievements">
                                    <p><i class="fas fa-certificate"></i> Sewing Project Manager Application
                                    </p>
                                    <p><i class="fas fa-certificate"></i> Online Course Completion
                                    </p>

                                    <p><i class="fas fa-certificate"></i> Application Tracker
                                    </p>
                                    <p><i class="fas fa-certificate"></i> Compliance Tool
                                    </p>
                                    <p><i class="fas fa-certificate"></i> Certification Checklist
                                    </p>
                                    <p class="text-center">
                                        <a href="projects.php" class="card-link btn btn-primary text-center">More
                                            Projects
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container-fluid mr-5 pr-5 ">
                    <div class="row ">
                        <div class="card-col-lg-4">
                            <div class="card pb-3 text-center">
                                <div class="card-body ">
                                    <h5 class="card-title text-center suedarby">Recent Achievements</h5>
                                    <p class="card-text achievements text-left">
                                    <p class="text-left">
                                        <i class="fas fa-certificate"></i>
                                        Diagram internal processes using Universal Modelling Language (UML) to increase
                                        efficacies
                                    </p>
                                    <p class="text-left">
                                        <i class="fas fa-certificate"></i>
                                        Using macro programming and process design facilitated a 66% increase workflow
                                        processes
                                    </p>
                                    <p class="text-left">
                                        <i class="fas fa-certificate"></i>
                                        Facilitated 85% increase in data
                                        collection,
                                        clean up and notification efficiency
                                    </p>
                                    <p class="text-left">
                                        <i class="fas fa-certificate"></i>
                                        Designated by IT as a SharePoint Administrator for 3 State of Alaska sites;
                                        develop
                                        tools, manage permissions, train new staff, participate in budget and planning
                                        meetings
                                    </p>
                                    <p class="text-left">
                                        <i class="fas fa-certificate"></i>
                                        60% refinement in workflow from development of
                                        checklist tool, trained additional staff to maintain tool
                                    </p>
                                    <p class="text-left">
                                        <i class="fas fa-certificate"></i>
                                        74% progress in time management for unit from programming of tool to track
                                        certification process
                                    </p>
                                    <p class="text-left">
                                        <i class="fas fa-certificate"></i>
                                        Increased file
                                        organization by 50% via a standardized
                                        electronic folder
                                        system to organize documentation
                                    </p>
                                    <p class="text-left">
                                        <i class="fas fa-certificate"></i>
                                        50% improved time management; reduced management’s information systems data
                                        entry
                                    </p>
                                    <p class="text-center"><a href="achievements.php"
                                            class="card-link btn btn-primary">Achievements</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php';?>