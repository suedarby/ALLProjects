<?php include('../includes/database.php'); ?> 
<?php
    $sql = "SELECT * FROM notion;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>
<!--CHANGE THE QUERY TO POINT TO THE VIEW NOT THE MAIN TABLE -->

<!--Notions Table-->
<div class="container row">
    <h1>Notions</h1>
    <div class="row">
        <table style="width:100%">
            <tr>
                <th>View</th>
                <th>Type</th>
                <th>Description</th>
                <th>Qty</th>
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
                <td><!--Type-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['type'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Description-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['description'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Qty-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['qty'] . "<br>";
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