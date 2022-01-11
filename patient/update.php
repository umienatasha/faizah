<?php
include('connection.php');

$name=$_POST['name'];
$ic=$_POST['ic'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$uidusr=$_POST['id']; //drpd input hidden

$sql = "UPDATE tblpatient SET  name='$name',ic='$ic', password='$password', phone='$phone' WHERE id_patient='$uidusr'"; 

if ($conn->query($sql) === TRUE) {
	echo "Record has been updated successfully";
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
    window.location="profile.php";
</script>