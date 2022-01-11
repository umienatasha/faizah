<?php 
session_start();

$conn = mysqli_connect('localhost', 'root' );

$db = mysqli_select_db($conn, 'ohana');

$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

$category=$_POST['category'];


$sql = "INSERT INTO category (category) VALUES ( '$category')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script>

	window.location="category.php";

</script>