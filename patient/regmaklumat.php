<?php 
include('connection.php');

$date=$_POST['date'];
$timeslot=$_POST['timeslot'];
$name=$_POST['name'];
$email=$_POST['email'];
$ic=$_POST['ic'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$comment=$_POST['comment'];
$name2=$_POST['name2'];
$email2=$_POST['email2'];
$ic2=$_POST['ic2'];
$age2=$_POST['age2'];
$phone2=$_POST['phone2'];
$gender2=$_POST['gender2'];
$comment2=$_POST['comment2'];
$id_patient=$_SESSION['id_patient'];

$query = "SELECT * FROM bookings WHERE date = '$date' AND timeslot = '$timeslot' ";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$num_rows = mysqli_num_rows($result);
if ($num_rows < 2) {
	$sql = "INSERT INTO bookings (date, timeslot, name, email, ic, age, phone, gender, comment, name2, email2, ic2, age2, phone2, gender2, comment2, id_patient) 
	VALUES ('$date', '$timeslot', '$name', '$email', '$ic','$age', '$phone', '$gender', '$comment', '$name2', '$email2', '$ic2', '$age2','$phone2', '$gender2', '$comment2', '$id_patient')";
	echo "<div class='alert alert-success'>Tempahan Anda Berjaya !
			
			<script>
				window.location='viewbooking.php';
			</script>
			
			</div>";
			
   }else{
	    echo "<div class='form'>
			  <h3>Maaf, Tempahan Yang Anda Pilih Tidak Berjaya Atas Persesilihan Tempahan Dengan Pesakit Lain !</h3><br/>
			  <p class='link'>Tekan <a href='slot.php'>Tempah</a> untuk menempah.</p>
			  </div>";
   }


if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>