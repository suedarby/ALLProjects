<<<<<<< Updated upstream
 <!--Tools Table-->
            <div class="container row">
                <h1>View/Dash Tools</h1>
                <div class="row">
                    <table style="width:100%">
                        <tr>
                            <th>View</th>
                            <th>Tool</th>
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
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                        </tr>
                    </table>
                </div>
            </div>
=======
<?php include('../includes/database.php'); ?> 

<?php
    $sql = "SELECT * FROM tool;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

?>
<!--Tools Table-->
<div class="container row">
    <h1>Tools</h1>
    <div class="row">
        <table style="width:100%">
            <tr>
                <th>View</th>
                <th>Tool</th>
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
                <td><!--Tool-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['tool'] . "<br>";
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
