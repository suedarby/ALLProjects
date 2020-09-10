<<<<<<< Updated upstream
=======
<?php include('../includes/database.php'); ?> 

<?php
    $sql = "SELECT * FROM fabrics;";//view table combines fabric, color and location
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>
>>>>>>> Stashed changes
<!--Fabric Table-->
            <div class="container row">
                <h1>View/Dash Fabric</h1>
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
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>Smith</td>
                            <td>50</td>
                        </tr>
                    </table>
                </div>