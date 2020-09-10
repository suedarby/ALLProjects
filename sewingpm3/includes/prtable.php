<?php include('../includes/database.php'); ?> 
<?php
    $sql = "SELECT * FROM project;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

?>
<!--Projects Table-->
<div class="container row">
    <h1>Projects</h1>
    <div class="row">
        <table style="width:100%">
            <tr>
                <th>View</th>
                <th>Project Name</th>
                <th>Number</th>
                <th>Brand</th>
                <th>Image</th>
                <th>Status</th>
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
            <td><!--Project Name-->
                <?php
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['description'] . "<br>";
                        }
                    }
                ?>
            </td>
            <td><!--Number-->
                <?php
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['width'] . "<br>";
                        }
                    }
                ?>
            </td>
            <td><!--Brand-->
                <?php
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['yards'] . "<br>";
                        }
                    }
                ?>
            </td>
            <td><!--Image-->
                <?php
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['weave'] . "<br>";
                        }
                    }
                ?>
            </td>
            <td><!--Status-->
                <?php
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['fiber'] . "<br>";
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
        </table>
    </div>
</div>