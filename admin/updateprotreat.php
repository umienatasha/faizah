<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ohana";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}

$rawatan_nama=$_POST['rawatan_nama'];
$rawatan_harga=$_POST['rawatan_harga'];
$category=$_POST['category'];
$uidusr=$_POST['id']; //drpd input hidden

$sql = "UPDATE tbl_rawatan SET rawatan_nama='$rawatan_nama', rawatan_harga='$rawatan_harga', category='$category' where id_rawatan='$uidusr'"; 

if ($conn->query($sql) === TRUE) {
	echo "Record has been updated successfully";
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
    window.location="viewtreatment.php";
</script>