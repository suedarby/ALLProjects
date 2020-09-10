<<<<<<< Updated upstream
  <!--Patterns Table-->
            <div class="container row">
                <h1>View/Dash Patterns</h1>
                <div class="row">
                    <table style="width:100%">
                        <tr>
                            <th>View</th>
                            <th>Number</th>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Style</th>
                            <th>Size</th>
                            <th>Location</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <a class="action" href="./projects/show.php">
                                        <i class="fa fa-eye">View</i>
                                    </a>
                                </button>
                            </td>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fas fa-pencil-ruler"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>Smith</td>
                        </tr>
                    </table>
                </div>
            </div>
=======
<?php include('../includes/database.php'); ?> 

<?php
    $sql = "SELECT * FROM pattern;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

?>
<!--Patterns Table-->
<div class="container row">
    <h1>Patterns</h1>
    <div class="row">
        <table style="width:100%">
            <tr>
                <th>View</th>
                <th>Number</th>
                <th>Brand</th>
                <th>Description</th>
                <th>Image Thumbnail</th>
                <th>Image Name</th>
                <th>Style</th>
                <th>Size</th>
                <th>Location</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td><!--View-->
                    <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                        <a class="action" href="./projects/show.php">
                            <i class="fa fa-eye"></i>
                        </a>
                    </button></td>
                   <td> 
                   <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['type'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Number-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['num'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Brand-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['brand'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Image file dir actual thumbnail-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['file_dir'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Image Name-->
                    <?php
                    if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['	name'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Style-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['style'] . "<br>";
                            }
                        }
                    ?>                
                </td>
                <td><!--Size-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['size'] . "<br>";
                            }
                        }
                    ?>                
                </td>
                <td><!--Location-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['location'] . "<br>";
                            }
                        }
                    ?>                
                </td>
                <td><!--Edit-->
                    <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                        <i class="fas fa-pencil-ruler"></i>
                    </button>
                </td>
                <td><!--Delete-->
                    <button type="button" class="btn btn-outline-primary btn-link btn-sm">
                        <i class="fa fa-trash">
                        </i>
                    </button>
                </td>
            </tr>
        </table>
    </div>
</div>
>>>>>>> Stashed changes
