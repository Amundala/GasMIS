<?php error_reporting(1); ?>
<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>
<?php

$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;

$totalRevenue = 0;

while ($orderResult = $orderQuery->fetch_assoc()) {
    //echo $orderResult['paid'];exit;
    $totalRevenue += $orderResult['paid'];
}

$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$userwisesql = "SELECT * FROM orders LEFT JOIN tbl_client ON orders.client_name = tbl_client.id WHERE orders.order_status = 1 ORDER BY order_date desc";
$userwiseQuery = $connect->query($userwisesql);
$userwieseOrder = $userwiseQuery->num_rows;

$connect->close();

?>

<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
        </div>

    </div>


    <div class="container-fluid">




        <div class="row">

            <div class="col-md-3 dashboard">
                <div class="card" style="background: #0F9D58">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                            <span><i class="mdi mdi-gas-cylinder f-s-50"></i></span>
                        </div>
                        <div class="media-body media-text-right">


                            <h3 class="color-white"><?php echo $countProduct; ?></h3>
                            <a href="product.php">
                                <p class="m-b-0">Total Cylinder</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                <div class="col-md-3 dashboard">
                    <div class="card" style="background:#F4B400 ">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-user f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">




                                <h3 class="color-white"><?php echo 3 ?></h3>
                                <a href="#">
                                    <p class="m-b-0">Total Suppliers</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                <div class="col-md-3 dashboard">
                    <div class="card" style="background-color: #DB4437 ">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-vector f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <h3 class="color-white"><?php echo $countOrder; ?></h3>
                                <a href="Order.php">
                                    <p class="m-b-0">Total Booking</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <div class="col-md-3 dashboard">
                <div class="card" style="background-color:#226B91;">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-credit-card f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">

                            <h3 class="color-white"><?php if ($totalRevenue) {
                                                        //echo $totalRevenue." Rwf";
                                                        echo number_format($totalRevenue, 0, '.', ',') . ' Rwf';
                                                    } else {
                                                        echo '0';
                                                    } ?></h3>
                            <a href="Order.php">
                                <p class="m-b-0">Total Revenue</p>
                            </a>
                        </div>
                    </div>




                </div>

            </div>

            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                <div class="col-md-12">
  <div class="card">
  <div class="card-header" style="background-color: #fff;">
  <h5 class="text-center mb-0 py-2 text-muted">RECENT BOOKINGS</h5>
</div>

    <div class="card-body">
      <table class="table table-borderless">
        <thead style="background-color: #0F9D58;">
          <tr>
            <th scope="col" class="text-white">Name</th>
            <th scope="col" class="text-white">Booking Date</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($orderResult = $userwiseQuery->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $orderResult['name'] ?></td>
              <td><?php echo date('F j, Y', strtotime($orderResult['order_date'])); ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

        </div>
    <?php } ?>


    </div>
</div>
</div>


<?php include('./constant/layout/footer.php'); ?>
<script>
    $(function() {
        $(".preloader").fadeOut();
    })
</script>