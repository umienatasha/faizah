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


    // When form submitted, insert values into the database.
    if (isset($_REQUEST['ic'])) {
        // removes backslashes
		$phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($conn, $phone);
		$name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($conn, $name);
		$ic = stripslashes($_REQUEST['ic']);
        $ic = mysqli_real_escape_string($conn, $ic);
		$password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `tblpatient` ( phone, name, ic, password, create_datetime)
                     VALUES ('$phone', '$name', '$ic', '$password', '$create_datetime')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <script>
					window.location='login.php';
				</script>
                  </div>";
        } 
    } else {
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

        <title>L O G M A S U K</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		* {
		  box-sizing: border-box;
		}

		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  resize: vertical;
		}
		
		input[type=number] {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  resize: vertical;
		}
		input[type=password] {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
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
		  padding: 20px;
		}

		.col-25 {
		  float: left;
		  width: 25%;
		  margin-top: 6px;
		}

		.col-75 {
		  float: left;
		  width: 75%;
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

                <a href="index.php" class="header__logo"><strong>Selamat Datang, Ohana Physiotherapy</b> !</strong></a>
				<div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>

            </div>
        </header>

        <!--========== CONTENTS ==========-->
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
                            
							<div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-category nav__icon' ></i>
                                    <span class="nav__name">Tentang Kami</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="rawatan.php" class="nav__dropdown-item">Senarai Rawatan</a>
                                        <a href="gallery.php" class="nav__dropdown-item">Galeri</a>
                                        <a href="video.php" class="nav__dropdown-item">Testimoni</a>
                                        <a href="time.php" class="nav__dropdown-item">Waktu Operasi</a>
                                    </div>
                                </div>
                            </div>
							
							<a href="contact.php" class="nav__link">
								<i class='bx bx-map-pin nav__icon' ></i>
								<span class="nav__name">Lokasi</span>
							</a>
						</div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Managament</h3>
							
							<div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-file-find nav__icon' ></i>
                                    <span class="nav__name">Temu Janji</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="search.php" class="nav__dropdown-item">Semak Temu Janji</a>
										<a href="login.php" class="nav__dropdown-item">Tempah Slot</a>
                                    </div>
                                </div>
                            </div>
							
							<a href="cuti.php" class="nav__link">
                                <i class='bx bx-navigation nav__icon' ></i>
                                <span class="nav__name">Cuti Umum</span>
                            </a>

                        </div>
                    </div>
                </div>

                <a href="login.php" class="nav__link nav__logout active">
                    <i class='bx bx-log-in nav__icon' ></i>
                    <span class="nav__name">Log In</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
            <div class="container">
		<BR>
		<center><h2>P E N D A F T A R A N</h2></center>
		<BR>
		  <form action="" method="post">
			<div class="row">
			<BR>
			  <div class="col-25">
				<label for="name">Nama Penuh</label>
			  </div>
			  <div class="col-75">
				<input type="text" id="name" name="name" placeholder="Masukkan Nama Penuh" required />
			  </div>
			</div>

			<div class="row">
			  <div class="col-25">
				<label for="phone">Nombor Telefon</label>
			  </div>
			  <div class="col-75">
				<input type="number" id="phone" name="phone" placeholder="Masukkan Nombor Telefon " required />
			  </div>
			</div>
			<div class="row">
			  <div class="col-25">
				<label for="ic">Kad Pengenalan</label>
			  </div>
			  <div class="col-75">
				<input type="number" id="ic" name="ic" placeholder="Contoh: 990088001122 " required />
				<span class="text-danger">* tanpa '-'</span>
			  </div>
			</div>
			<div class="row">
			  <div class="col-25">
				<label for="password">Kata Laluan</label>
			  </div>
			  <div class="col-75">
				<input type="password" id="password" name="password" placeholder="Masukkan Kata Laluan" required />
			  </div>
			</div>
			<BR>
			<div class="row">
			  <input type="submit" value="Submit">
			</div>
			
		  </form>
		  <p>Sudah Mempunyai Akaun ? <a href="login.php">LogMasuk</a>.<p>
		</div>
	<?php
		}
	?>
        </main>
		
		<center>
		<footer class="container-fluid">
			<h6 class="text-center small">©2021 Ohana Physiotherapy</h6>
		</footer>
		</center>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>