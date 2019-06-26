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
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Member</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
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
                                    <li><!-- <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> -->
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
                        <li> <a href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Member</span></a>
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
                    <div class="col-12">
                        <div class="card">
            
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Member</h4>
                                <h6 class="card-subtitle">Data table member ITS Lost and Found</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id User</th>
                                                <th>Nama</th>
                                                <th>No Telepon</th>>
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              include 'konek.php';
                                              $query = "SELECT users.`ID_User`, users.`Nama_User`, users.`No_Telepon` 
                                                FROM users";

                                              $result = mysqli_query($link, $query);
                                              //mengecek apakah ada error ketika menjalankan query
                                              if(!$result){
                                                die ("Query Error: ".mysqli_errno($link).
                                                   " - ".mysqli_error($conn));
                                              }

                                              //buat perulangan untuk element tabel dari data mahasiswa
                                               // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                              // kemudian dicetak dengan perulangan while
                                              while($data = mysqli_fetch_assoc($result))
                                              {
                                                $id = $data["ID_User"];
                                                $nama = $data["Nama_User"];
                                                $notelp = $data["No_Telepon"];

                                                // mencetak / menampilkan data
                                                echo "<tr>";
                                                echo '<td scope="data">'.$id.'</td>';
                                                echo "<td>$nama</td>";
                                                echo "<td>$notelp</td>";
                                                // echo '<td><form method="post" action="member-hapus.php"><div class="container-login100-form-btn"><input type="submit" class="login100-form-btn" value="Delete" name="delete"></input>
                                                //     </div></form></td>';

                                                echo '<td><a href="#" data-href="member-hapus.php?id='.$id.'" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o fa-lg"></i></a></td>';


                                                 //menampilkan 
                                                // membuat link untuk mengedit dan menghapus data
                                                echo "</tr>";
                                              }
                                            ?>
                                           

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                <!-- End PAge Content -->
            </div>
            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        Menghapus Data
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin akan menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <!-- <a href="#" data-target="#close" class="btn btn-default" data-dismiss="modal" aria-label="close">Batal</a> -->
                        <a class="btn btn-danger btn-ok">Hapus</a>
                    </div>                  
                </div>
            </div>
        </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
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
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
            $('#confirm-delete').on('show.bs.modal', 
                function(e){
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    // $(this).find('.btn-default').modal("hide");
                });
        </script>
</body>

</html>