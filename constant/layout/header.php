<?php 
//session_start();
//include('../constant/check.php');?>
<?php 
//session_start();
include('./constant/check.php');
 include('./constant/connect.php');
?>
    
    <div id="main-wrapper">
        
        <div class="header">
             <marquee class="d-lg-none d-block">
                <div class="ml-lg-5 pl-lg-5 ">
                     <b id="ti" class="ml-lg-5 pl-lg-5"></b>
                    </div>
            </marquee>
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">
            <b><h3>Merez Gas MIS</h3></b>
        </a>
    </div>
    <div class="navbar-collapse justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link nav-toggler hidden-md-up text-muted" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a>
            </li>
            <li class="nav-item m-l-10">
                <a class="nav-link sidebartoggler hidden-sm-down text-muted" href="javascript:void(0)"><i class="ti-menu"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./assets/uploadImage/Profile/young-woman-avatar-facial-features-stylish-userpic-flat-cartoon-design-elegant-lady-blue-jacket-close-up-portrait-80474088.jpg" alt="user" class="profile-pic" />
                </a>
                <div class="dropdown-menu dropdown-menu-right animated zoomIn" style="right: 0;">
                    <ul class="dropdown-user">
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li><a href="setting.php"><i class="fa fa-key"></i> Change Password</a></li>
                        <li><a href="users.php"><i class="fa fa-user"></i> Add user</a></li>
                        <?php }?>
                        <li><a href="./constant/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

        </div>
        
             <script language="javascript">
var today = new Date();
document.getElementById('ti').innerHTML=today;

var today = new Date();
document.getElementById('time').innerHTML=today;
 </script>