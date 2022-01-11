<?php 
session_start();

$conn = mysqli_connect('localhost', 'root' );

$db = mysqli_select_db($conn, 'ohana');

$sql = "SELECT * FROM tblpatient";
$result = mysqli_query($conn, $sql);

$rawatan_nama=$_POST['rawatan_nama'];
$rawatan_harga=$_POST['rawatan_harga'];
$category=$_POST['category'];


$sql = "INSERT INTO tbl_rawatan (rawatan_nama, rawatan_harga, category) VALUES ( '$rawatan_nama', '$rawatan_harga', '$category')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>

	window.location="viewtreatment.php";

</script>