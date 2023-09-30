<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="This MerezGas MIS Developed by Honorine MKU Rwanda Student">
    <meta name="keywords" content="Honorine MKU Student Rwanda">
    <meta name="author" content="Honorine">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/uploadImage/Logo/fevicon.png">
    <?php

    include('./constant/connect.php');
    // $sql_head_title = "select * from manage_website"; 
    // $result_head_title = $conn->query($sql_head_title);
    // $row_head_title = mysqli_fetch_array($result_head_title);
    ?>
    <style type="text/css">
        @media print {
            #printbtn {
                display: none;
            }
        }
    </style>
    <title>Merez Gas MIS</title>

    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/lib/html5-editor/bootstrap-wysihtml5.css" />
    <link href="assets/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="assets/css/lib/datepicker/bootstrap-datepicker3.min.css" rel="stylesheet">
<style>.card-header h5 {
  margin: 0;
  font-size: 20px;
  font-weight: 600;
}

.table thead th {
  border: none;
}

.table thead th.text-white {
  color: #fff;
}
table thead th:nth-of-type(1) {
  color: #ffffff !important;
}
</style>


</head>

<body class="fix-header fix-sidebar">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>