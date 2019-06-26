<?php
include 'konek.php';

$query = "SELECT barang.`ID_Barang`, barang.`ID_User`, barang.`Nama_Barang`, barang.`Tanggal`, barang.`Tempat`, barang.`Kategori`, transaksi.`Status`
	FROM barang, transaksi
    WHERE barang.`ID_Barang`=transaksi.`ID_Barang`";
$result = mysqli_query($link, $query);
//mengecek apakah ada error ketika menjalankan query
if(!$result){
die ("Query Error: ".mysqli_errno($link).
   " - ".mysqli_error($conn));
                                              }

while($data = mysqli_fetch_assoc($result))
{
// mencetak / menampilkan data
    echo "<tr>";
    echo "<td>$data[ID_Barang]</td>"; //menampilkan data nama
    echo "<td>$data[ID_User]</td>";
    echo "<td>$data[Nama_Barang]</td>";
    echo "<td>detil</td>";
    echo "</tr>";
}
?>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>