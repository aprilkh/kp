<?php
session_start();
if(empty($_SESSION)){
	header("Location: index.php");
}
else
{
	$username = $_SESSION["uname"];
}
?>

<?php
require("connect.php");
$result = mysqli_query($conn, "SELECT * FROM barang where Kategori = 'Ditemukan' and ID_User='$username' order by Tanggal desc");

$i = 0; 
while ($row = mysqli_fetch_array($result)) {
  $i++;
  $ID_Barang[$i] = $row['ID_Barang'];
  $ID_User[$i] = $row['ID_User'];
  $Nama_Barang[$i] = $row['Nama_Barang'];
  $Tanggal[$i] = $row['Tanggal'];
  $Tempat[$i] = $row['Tempat'];
  $Keterangan[$i] = $row['Keterangan'];
  $result3 = mysqli_query($conn, "SELECT Status FROM transaksi where ID_Barang='$ID_Barang[$i]'");
  $row3 = mysqli_fetch_array($result3);
  $status[$i] = $row3['Status'];
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ITS Lost n Found</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php include 'navbar.php';?>
	<?php include 'sidebar.php';?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Barang Temuan</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Barang temuan yang pernah anda post</div>
					<div class="panel-body">
						<table data-toggle="table" data-select-item-name="toolbar1" data-pagination="true">
						    <thead>
						    <tr>
						        <th data-field="id" data-sortable="true">ID Barang</th>
						        <th data-field="name"  data-sortable="true">Nama Barang</th>
						        <th data-field="date" data-sortable="true">Tanggal</th>
						        <th data-field="location" data-sortable="true">Lokasi</th>
						        <th data-field="status" data-sortable="true">Status</th>
						        <th data-field="action" data-sortable="true">Action</th>
						    </tr>

						    </thead>
						    <?php if($i>0) for($i=1; $i<=sizeof($ID_Barang); $i++) { ?>
						    <tr>
						    	<td><?php echo $ID_Barang[$i]?></td>
						    	<td><?php echo $Nama_Barang[$i]?></td> 
						    	<td><?php echo date('M j Y g:i A', strtotime($Tanggal[$i]));?></td>
						    	<td><?php echo $Tempat[$i]?></td> 
						    	<td><?php echo $status[$i]?></td>
						    	<td><a href="editbrgtemuan.php?editid=<?php echo $ID_Barang[$i] ?>">Edit</a></td>
						    </tr>
						    <?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
			
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
		
</body>

</html>
