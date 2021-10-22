<?php include('../includes/database.php'); ?> 
<?php
    $sql = "SELECT * FROM fabrics;";//view table combines fabric, color and location
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>
<!--Fabric Table-->
<div class="container row">
    <h1>Fabric</h1>
    <div class="row">
        <table style="width:100%">
            <tr>
                <th>View</th>
                <th>Description</th>
                <th>Width</th>
                <th>Yards</th>
                <th>Weave</th>
                <th>Fiber</th>
                <th>Color</th>
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
                    </button>
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
                <td><!--Width-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['width'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Yards-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['yards'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Weave-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['weave'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Fiber-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['fiber'] . "<br>";
                            }
                        }
                    ?>
                </td>
                <td><!--Color-->
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['color'] . "<br>";
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
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        </table>
    </div>
</div>    