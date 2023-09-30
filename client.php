<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>
<?php include('./constant/connect');
$sql = "SELECT * FROM tbl_client WHERE delete_status = 0 ORDER BY created_date_time DESC";
$result = $connect->query($sql);
//echo $sql;exit;

?>
<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> View Consumer</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">View Consumer</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="add_client.php"><button class="btn btn-primary">Add Consumer</button></a>

                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-borderless">
                        <thead style="background-color: #0F9D58;">
                            <tr>
                                <th style="color: white;">#</th>
                                <th style="color: white;">Client Name</th>
                                <th style="color: white;">Gender</th>
                                <th style="color: white;">Telephone</th>
                                <th style="color: white;">Address</th>
                                <th style="color: white;">Photo</th>
                                <th style="color: white;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['mob_no']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><img src="assets/myimages/<?php echo $row['image']; ?>" style="width: 80px; height: 80px;"></td>
                                    <td>
                                        <a href="editclient.php?id=<?php echo $row['id'] ?>">
                                            <button type="button" class="btn btn-sm btn-outline-info">
                                                <i class="fa fa-pencil"></i> Edit
                                            </button>
                                        </a>
                                        <a href="php_action/removeclient.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">
                                            <button type="button" class="btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        <?php include('./constant/layout/footer.php'); ?>