<?php
 session_start();
 include ('konek.php');
 if(isset($_POST['submit'])) {
  if(isset($_POST['username'])){
      $user = $_POST['username'];
      $pass = $_POST['passw'];
      $sql = "SELECT * FROM admins where username = '$user' and password = '$pass'";
      $result = mysqli_query($link, $sql) or die("Error, query failed!");
      
      $rows = $result->fetch_assoc();
      $nama = $rows['username'];
      $passw = $rows['password'];
      if(mysqli_num_rows($result) > 0)  
      {
        $_SESSION['user'] = $nama;
        $_SESSION['pw'] = $passw;
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";
          
      }
      else
      {
          echo "<script> 
            alert('Invalid username or password');
            window.location.assign('login.php');
            </script>";       
      }
    }
  }
  else{
     header("location: login.php");
  }
?>