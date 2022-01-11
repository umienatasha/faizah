<?php
session_start();

$conn = mysqli_connect('localhost', 'root' );
if($conn){
	// echo "conenction successful";
}else{
	echo "no connection";
}


?>

<!DOCTYPE html>
<html>
		<head>
		<title>L O G M A S U K</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		body {font-family: Arial, Helvetica, sans-serif;}
		* {box-sizing: border-box;}

		.input-container {
		  display: -ms-flexbox; /* IE10 */
		  display: flex;
		  width: 100%;
		  margin-bottom: 15px;
		}

		.icon {
		  padding: 10px;
		  background: dodgerblue;
		  color: white;
		  min-width: 50px;
		  text-align: center;
		}

		.input-field {
		  width: 100%;
		  padding: 10px;
		  outline: none;
		}

		.input-field:focus {
		  border: 2px solid dodgerblue;
		}

		/* Set a style for the submit button */
		.btn {
		  background-color: dodgerblue;
		  color: white;
		  padding: 15px 20px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}

		.btn:hover {
		  opacity: 1;
		}
		</style>
		</head>
<body>
<BR>
<BR>
	<form action="logprocess.php"  method="post" style="max-width:500px;margin:auto">
	  <h2>L O G   M A S U K</h2>
	  <br>
	  <div class="input-container">
		<i class="fa fa-user icon"></i>
		<input class="input-field" type="text" placeholder="Username" name="username">
	  </div>
	  
	  <div class="input-container">
		<i class="fa fa-key icon"></i>
		<input class="input-field" type="password" placeholder="Password" name="password">
	  </div>

	  <button type="submit" name="submit" class="btn">Log Masuk</button>
	</form>
	
		<center>
		<footer class="container-fluid">
			<h6 class="text-center small">©2021 Ohana Physiotherapy</h6>
		</footer>
		</center>
</body>
</html>
