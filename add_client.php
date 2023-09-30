<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add Consumer</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add Client</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="row">
            <div class="col-lg-8" style="    margin-left: 10%;">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" id="submitProductForm" action="php_action/createclient.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">


                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label"> Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" placeholder=" Name" name="name" autocomplete="off" required="" pattern="[A-Za-z\s]+" title="Please enter letters and spaces only" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="brandName" name="gender">
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Telephone</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control" id="" placeholder="" name="mob_no" autocomplete="off" required="" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" id="" placeholder="" name="address" autocomplete="off" required="" pattern="[A-Za-z0-9\s]+" title="Please enter letters, numbers, and spaces only" style="height: 150px;"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Upload Image:</label>
                                        <div class="col-sm-9">
                                            <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>
                                            <div class="kv-avatar center-block">
                                                <input type="file" class="form-control" id="productImage" name="productImage" class="file-loading" style="width:auto;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>