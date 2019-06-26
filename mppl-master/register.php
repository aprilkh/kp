<?php
require("connect.php");
?>
<?php
$uploadOk = 0;
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $username = $_POST['username'];
                $nama = $_POST['nama'];
                $notelp = $_POST['notelp'];
                $password = $_POST['password'];
               $ps_gambar1 = $_FILES['i_gambar']['name'];

                if ($ps_gambar1!=Null)
                {
                    $target_dir = "../img/";
                    $target_file = $target_dir . $ps_gambar1;
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $ps_gambar = $nama . "." . $imageFileType;
                    $target_file = $target_dir . $ps_gambar;
                    $check = getimagesize($_FILES["i_gambar"]["tmp_name"]);
                    if($check !== false) {
                     //   echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }

                    $sql = "INSERT INTO users (ID_User, Nama_User, No_Telepon, Foto, password_user)
            VALUES ('$username', '$nama', '$notelp', '$ps_gambar', '$password')";
                }
                require("connect.php");
                $result=mysqli_query($conn, $sql);

                mysqli_close($conn);
                        
            }

        ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ITS Lost n Found</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <style>
    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 80%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 80%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
   .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%;  Full height 
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

        .modal-header, h4, .close {
              background-color: #009999;
              color:white !important;
              text-align: center;
              font-size: 30px;
          }
          .modal-footer {
              background-color: #f9f9f9;
          }
          
    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
    }
        
    @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a href="index.php">
                    <img src="img/kecil1.png">
                </a>
            </div>

            <!-- PAGE NAVIGATION -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="register.php">Register</a>
                    </li>

                    <!-- 1. CARI BARANG -->
                    <li>
                        <a class="page-scroll" href="listtemu.php">Barang Temuan</a>
                    </li>

                    <!-- 2. TOLONG TEMUKAN -->       
                    <li>
                        <a class="page-scroll" href="listhilang.php">Barang Hilang</a>
                    </li>

                    <!-- 3. KONTAK -->
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                    <!-- 4. LOGIN, USER PROFILE, LOGOUT  --> 
                    <?php
                    if(!empty($_SESSION)){
                        include("connect.php");
                        $username  = $_SESSION['uname'];
                        echo '<li>
                        <a class="page-scroll" href="pengguna">'.$username.'</a>
                        </li>';
                        echo '<li>
                        <a class="page-scroll" href="logout.php">Logout</a>
                        </li>';
                        }
                    else 
                    {?>
                    
                     <li>
                        <a class="page-scroll" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
                        <div id="id01" class="modal" >     
                               <div class="modal-dialog">
                            <div class="modal-content animate">
                                <div class="modal-header">
                                <div class="clearfix"></div>
                                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                                        </div>
                                        <div class="modal-body">

                                          <form role="form" action="login.php" method="post" >
                                              <strong class="text-primary">
                                                <span class="glyphicon glyphicon-user"></span> Username</strong>
                                              <input type="text" class="form-control" name="uname" placeholder="Enter Username" style="width:100%;" required>
                                              
                                              <strong class="text-primary">
                                              <span class="glyphicon glyphicon-eye-open"></span> Password</strong>
                                              <input type="password" class="form-control" name="psw" placeholder="Enter password" style="width:100%;" required>

                                              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                                          </form>
                                        </div>
                                </div>
                                </div>
                    </li>       
                    <?php
                    }
                        
                    ?>
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <br><br><br><br><h1> Register </h1>
                <div class="col-md-12">

<?php   
                if ($uploadOk == 0) {
              
                } else {
                    if (move_uploaded_file($_FILES["i_gambar"]["tmp_name"], $target_file)) {
                        echo "<div class='alert bg-success bg-dismissable' role='alert'>Success! The file ". $ps_gambar. " has been uploaded. <a href='#' class='close' data-dismiss='alert'>&times;</a></div>";
                    } else {
                        echo "<div class='alert bg-danger bg-dismissable' role='alert'>Sorry, there was an error uploading your file. <a href='#' class='close' data-dismiss='alert'>&times;</a></div>";
                    }
                }
        
            ?>

                <form class="form-horizontal" action="register.php" method="post" enctype="multipart/form-data" id="register-form">
                    <div class="form-group">
                        <label for="" class="control-label col-xs-2">Username</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-xs-2">Nama</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-xs-2">No Telepon</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No Telepon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-xs-2">Password</label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-xs-2">Foto</label>
                        <div class="col-xs-10">
                            <input type="file" id="foto" name="i_gambar" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>                   
                </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2019 ITS lnf<p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/jquery.validate.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- <script type="text/javascript">
        
        $(document).ready(function () {
            $('#register-form').validate({
                rules: {
                    username: {
                        minlength: 5,
                        required: true
                    },
                    nama: {
                        required: true
                    },
                    password: {
                        minlength: 7,
                        required: true
                    }
                },
                messages: {
                    username: "Masukkan username",
                    nama: "Masukkan nama",
                    password: "Minimal 7 karakter"
                },
                highlight: function (element) {
                    $(element).closest('.control-group').removeClass('success').addClass('error');
                }
            });
            });

    </script> -->

</body>

</html>
