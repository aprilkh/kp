<?php
    session_start();
    if(!isset($_SESSION['user'])){
        echo "<script>
            alert('you need to login as admin first');
            window.location.assign('login.php');
            </script>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <title>ITS LnF Admin Database</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>

                        <!-- Messages -->
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
<!--                                     <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li> -->
                                    <li><!-- <form action="logout.php" method="post"><button type="submit" name="logout" class="btn banner_btn"><?php echo $_SESSION['user'];?>, logout di sini hehe</button></form> -->
                                        <a href="logout.php"><i class="fa fa-sign-out"></i><?php echo $_SESSION['user'];?>, logout lewat sini</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li>
                        <li class="nav-label">Data Admin</li>
                        <li> <a href="member.php" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Member</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Riwayat Barang</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="baranghilang.php">Barang Hilang</a></li>
                                <li><a href="barangtemuan.php">Barang Temuan</a></li>
                                <li><a href="barangsemua.php">Semua</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-label">Layout</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-blank.html">Blank</a></li>
                                <li><a href="layout-boxed.html">Boxed</a></li>
                                <li><a href="layout-fix-header.html">Fix Header</a></li>
                                <li><a href="layout-fix-sidebar.html">Fix Sidebar</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-send f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2> 
                                    <?php
                                              include 'konek.php';
                                              $query = "SELECT COUNT(Kategori) AS Total_Hilang
                                                FROM transaksi
                                                WHERE kategori='Kehilangan'";

                                              $result = mysqli_query($link, $query);
                                              //mengecek apakah ada error ketika menjalankan query
                                              if(!$result){
                                                die ("Query Error: ".mysqli_errno($link).
                                                   " - ".mysqli_error($conn));
                                              }

                                              while($data = mysqli_fetch_assoc($result))
                                              {
                                                echo "$data[Total_Hilang]";
                                              }
                                    ?>
                                    </h2>
                                    <p class="m-b-0">Total Kehilangan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-hourglass-1 f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                    <?php
                                              include 'konek.php';
                                              $query = "SELECT COUNT(Kategori) AS Total_Temuan
                                                FROM transaksi
                                                WHERE kategori='Ditemukan'";

                                              $result = mysqli_query($link, $query);
                                              //mengecek apakah ada error ketika menjalankan query
                                              if(!$result){
                                                die ("Query Error: ".mysqli_errno($link).
                                                   " - ".mysqli_error($conn));
                                              }

                                              while($data = mysqli_fetch_assoc($result))
                                              {
                                                echo "$data[Total_Temuan]";
                                              }
                                    ?>
                                    </h2>
                                    <p class="m-b-0">Total Temuan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                    <?php
                                              include 'konek.php';
                                              $query = "SELECT COUNT(transaksi.`Status`) AS Total_selesai
                                                FROM transaksi
                                                WHERE transaksi.`Status`='CLEAR'";

                                              $result = mysqli_query($link, $query);
                                              //mengecek apakah ada error ketika menjalankan query
                                              if(!$result){
                                                die ("Query Error: ".mysqli_errno($link).
                                                   " - ".mysqli_error($conn));
                                              }

                                              while($data = mysqli_fetch_assoc($result))
                                              {
                                                echo "$data[Total_selesai]";
                                              }
                                    ?>                                        
                                    </h2>
                                    <p class="m-b-0">Kasus Selesai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                    <?php
                                              include 'konek.php';
                                              $query = "SELECT COUNT(transaksi.`Status`) AS Total_belum
                                                FROM transaksi
                                                WHERE transaksi.`Status`='NOT CLEAR'";

                                              $result = mysqli_query($link, $query);
                                              //mengecek apakah ada error ketika menjalankan query
                                              if(!$result){
                                                die ("Query Error: ".mysqli_errno($link).
                                                   " - ".mysqli_error($conn));
                                              }

                                              while($data = mysqli_fetch_assoc($result))
                                              {
                                                echo "$data[Total_belum]";
                                              }
                                    ?>                                        
                                    </h2>
                                    <p class="m-b-0">Kasus On-going</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>
                                    <?php
                                              include 'konek.php';
                                              $query = "SELECT COUNT(ID_User) AS Total_Users FROM users";

                                              $result = mysqli_query($link, $query);
                                              //mengecek apakah ada error ketika menjalankan query
                                              if(!$result){
                                                die ("Query Error: ".mysqli_errno($link).
                                                   " - ".mysqli_error($conn));
                                              }

                                              while($data = mysqli_fetch_assoc($result))
                                              {
                                                echo "$data[Total_Users]";
                                              }
                                    ?>
                                    </h2>
                                    <p class="m-b-0">Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <!-- <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer> -->
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/dashboard1-init.js"></script>


	<script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->

    <script src="js/custom.min.js"></script>

</body>

</html>
