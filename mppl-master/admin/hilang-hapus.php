<?php

include ("konek.php");
session_start();
	
if(!isset($_SESSION['user'])){
	header('Location: login.php');
}

if(empty($_GET['id'])) {
	echo "No arguments provided!";
	return false;
}

$id = $_GET['id'];

$sql = "DELETE FROM barang where ID_Barang = '$id'";
$result = mysqli_query($link, $sql);
mysql_close();

header('Location: baranghilang.php?delete='.$result);

?>