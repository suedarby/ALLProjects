
<?php include '../private/header.php'; ?>

 <div class="col-3">      <!--sidebar-->
        <?php include '../private/nav.php'; ?>
        </div>
    <!--end sidebar-->
    <div class="col-7"><p>Paragraph</p>
        <h1>Welcome Dashboard</h1>
        <p>The sewing project manager is your one stop to track your supplies and projects. I can help you manage your stash of supplies and help you find what you know you have <em>somewhere</em>!</p>
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-1">Supplies</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Customizer</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Projects</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-4">Reports</a>
            </li>

        </ul>
        <!--SUPPLIES TAB CONTENT-->
        <div class="tab-content">
                <div class="tab-pane" role="tabpanel" id="tab-1">
        <h2>Supplies Overview</h2>
        <h3><a href="#">Fabric</a></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cell 1</td>
                    <td>Cell 2</td>
                </tr>
                <tr>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <!-- CUSTOMIZER TAB CONTENT-->
    <div class="tab-pane" role="tabpanel" id="tab-2">
        <h1>Customizer</h1>
        <p>Add details that are purely yours. Have a specific place to store your fabric scissors? You can add it here!<br>        
            <h3>
            <a href="#">Brand</a></h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 1</th>
                            <th>Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 3</td>
                            <td>Cell 4</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 3</td>
                            <td>Cell 4</td>
                            <td>Cell 3</td>
                            <td>Cell 4</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </p>
    </div>
    <!-- PROJECTS TAB CONTENT-->
    <div class="tab-pane" role="tabpanel" id="tab-3">
        <h1>Project List</h1>
        <p>All your projects in one place         
            <h3><a href="#">Project</a></h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </p>
    </div>
<!--REPORTS TAB CONTENT-->
        <div class="tab-pane active" role="tabpanel" id="tab-4">
            <h1>Reports</h1>
            <p>Various reports showing status, locations, quantities, project status and the all important shopping list         
            <h3><a href="#">Reports</a></h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </p>
            </div>
               </div>
               </div>
            </div>
<!-- End: 2 Rows 1+2 Columns -->
    <div class="container">
        <div class="row">
            <div class="col">
                    <!--footer-->
                    <?php include '../private/footer.php'; ?>
</div>
</div>
</div>