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


$id_book=$_GET["id"];

$dis_usr="SELECT * FROM bookings WHERE id_book='$id_book'";
$resultusr=$conn->query($dis_usr);

$row=$resultusr->fetch_assoc();
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>A B O U T . P A T I E N T</title>
		<style>
		* {
		  box-sizing: border-box;
		}

		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 8px;
		  resize: vertical;
		}
		input[type=number] {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 8px;
		  resize: vertical;
		}
		input[type=date] {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 8px;
		  resize: vertical;
		}

		label {
		  padding: 12px 12px 12px 0;
		  display: inline-block;
		}

		input[type=submit] {
		  background-color: #04AA6D;
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  float: right;
		}

		input[type=submit]:hover {
		  background-color: #45a049;
		}

		.container {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 45px;
		}

		.col-25 {
		  float: left;
		  width: 50%;
		  margin-top: 6px;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
		  }
		}
		</style>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="assets/img/4.jpg" alt="" class="header__img">

                <a href="index.php" class="header__logo"><strong>Hai, <?php echo $_SESSION['username'] ?></b> !</strong></a>
				
				<div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
    
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="index.php" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">Ohana Physiotherapy</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="index.php" class="nav__link">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Managament</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user-plus nav__icon' ></i>
                                    <span class="nav__name">Patient</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="addpatient.php" class="nav__dropdown-item">Add</a>
                                        <a href="viewpatient.php" class="nav__dropdown-item">Details</a>
                                    </div>
                                </div>
                            </div>
							
							<div class="nav__dropdown">
                                <a href="#" class="nav__link active">
                                    <i class='bx bx-calendar-heart nav__icon' ></i>
                                    <span class="nav__name">Appointment</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="viewbooking.php" class="nav__dropdown-item">Details</a>
                                    </div>
                                </div>
                            </div>
							
							<div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-list-plus nav__icon' ></i>
                                    <span class="nav__name">Treatment</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="addtreatment.php" class="nav__dropdown-item">Add</a>
                                        <a href="viewtreatment.php" class="nav__dropdown-item">Details</a>
                                    </div>
                                </div>
                            </div>
							
							<div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-navigation nav__icon' ></i>
                                    <span class="nav__name">Holiday</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="addcuti.php" class="nav__dropdown-item">Add</a>
                                        <a href="viewcuti.php" class="nav__dropdown-item">Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <a href="logout.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <!--========== CONTENTS ==========-->
	
		 <div class="container">
		 <center><h2>U P D A T E . P A T I E N T</h2></center>
		 <br>
		  <form method="post" action="updatebooking.php">
		  
				<div class="row">
				  <div class="col-25">
					<label><strong>Date</strong></label>
					<input type="date" name="date" value="<?php echo $row["date"];?>" required />
				  </div>
				  <div class="col-25">
					<label><strong>Time Slot</strong><span class="text-danger"> * use format 00:00 AM/PM</span></label>
					<input type="text" name="timeslot" value="<?php echo $row["timeslot"];?>" required />
				  </div>
				</div>
				<br>
				
				<div class="row">
				  <div class="col-25">
					<label><strong>Full Name</strong></label>
				  </div>
				  <div class="col-75">
					<input type="text" name="name" value="<?php echo $row["name"];?>" required autofocus >
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-25">
					<label><strong>Gender</strong></label>
					<select id="gender" name="gender" value="<?php echo $row["gender"];?>" required >
					  <option value="" disabled selected hidden>Pilih Jantina</option>
					  <option value="perempuan">Perempuan</option>
					  <option value="lelaki">Lelaki</option>
					</select>
				  </div>
				  <div class="col-25">
					<label><strong>Identity Card</strong><span class="text-danger"> * tanpa '-'</span></label>
					<input type="number"  name="ic" value="<?php echo $row["ic"];?>" required />
				  </div>
				</div>
	
				
				<div class="row">
				  <div class="col-25">
					<label><strong>Contact No.</strong></label>
					<input type="number" name="phone" value="<?php echo $row["phone"];?>" required />
				  </div>
				  <div class="col-25">
					<label><strong>Age</strong></label>
					<input type="number" name="age" value="<?php echo $row["age"];?>" required />
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-25">
					<label><strong>Email</strong></label>
				  </div>
				  <div class="col-75">
					<input type="text" name="email" class="form-control" value="<?php echo $row["email"];?>"/>
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-25">
					<label><strong>Patient Comment</strong></label>
				  </div>
				  <div class="col-75">
					<input type="text" name="comment" class="form-control" value="<?php echo $row["comment"];?>" required />
				  </div>
				</div>
				<BR>
				
				<div class="row">
				  <input type="submit" value="Update">
				  <input type="hidden" name="id" value="<?php echo $row["id_book"]; ?>"/>
				</div>
			  </form>
			</div>
			
			<BR>
			<center>
			<footer class="container-fluid">
				<h6 class="text-center small">??2021 Ohana Physiotherapy</h6>
			</footer>
			</center>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>