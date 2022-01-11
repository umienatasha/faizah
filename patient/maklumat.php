<?php
include('connection.php');

$date=$_GET['date'];
$timeslot=$_GET['timeslot'];

$sql = "SELECT * FROM bookings WHERE date = '$date' AND timeslot = '$timeslot' ";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>M A K L U M A T</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
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
                    <a href="../index.php" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">Ohana Physiotherapy</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="../index.php" class="nav__link active">
                                <i class='bx bx-user nav__icon' ></i>
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
                                        <a href="../rawatan.php" class="nav__dropdown-item">Senarai Rawatan</a>
                                        <a href="../gallery.php" class="nav__dropdown-item">Galeri</a>
                                        <a href="../video.php" class="nav__dropdown-item">Testimoni</a>
                                        <a href="../time.php" class="nav__dropdown-item">Waktu Operasi</a>
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
                                        <a href="../search.php" class="nav__dropdown-item">Semak Temu Janji</a>
                                        <a href="slot.php" class="nav__dropdown-item">Tempah Slot</a>
                                    </div>
                                </div>
                            </div>
							
							<a href="../cuti.php" class="nav__link">
                                <i class='bx bx-navigation nav__icon' ></i>
                                <span class="nav__name">Cuti Umum</span>
                            </a>

                        </div>
                    </div>
                </div>

            </nav>
        </div>


        <!--========== CONTENTS ==========-->
        <main>
            <center><h2>M A K L U M A T . P E S A K I T</h2></center>
			
			<form method="post" action="regmaklumat.php">
			  
				<div class="container">
				<div class="row">
				  <div class="col-25">
					<label><strong>Tarikh</strong></label>
					<input type="text" name="date" readonly value="<?php echo $date; ?>" required readonly>
				  </div>
				  <div class="col-25">
					<label><strong>Masa</strong></label>
					<input type="text"  name="timeslot" class="form-control"  value="<?php echo $timeslot; ?>"  readonly>
				  </div>
				</div>
				<br>
				<br>
				
				<div class="row">
				  <div class="col-25">
					<label><strong>Nama Penuh Pesakit</strong></label>
				  </div>
				  <div class="col-75">
					<input type="text" name="name" placeholder="Masukkan Nama Penuh" required />
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-25">
					<label><strong>Jantina</strong></label>
					<select id="gender" name="gender" required />
					  <option value="" disabled selected hidden>Pilih Jantina</option>
					  <option value="perempuan">Perempuan</option>
					  <option value="lelaki">Lelaki</option>
					</select>
				  </div>
				  <div class="col-25">
					<label><strong>Kad Pengenalan</strong><span class="text-danger"> * tanpa '-'</span></label>
					<input type="number"  name="ic" placeholder="Contoh: 990088001122" required />
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-25">
					<label><strong>Nombor Telefon </strong></label>
					<input type="number" name="phone" placeholder="Masukkan Nombor Telefon" required />
				  </div>
				  <div class="col-25">
					<label><strong>Umur</strong></label>
					<input type="number" name="age" placeholder="Masukkan Umur"  required />
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-25">
					<label><strong>E-Mel</strong></label>
				  </div>
				  <div class="col-75">
					<input type="text" name="email" placeholder="example@example.com"/>
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-25">
					<label for="comment"><strong>Jenis Sakit</strong></label>
				  </div>
				  <div class="col-75">
					<textarea type="text" name="comment" placeholder="Contoh: sakit lengan" style="height:200px" required /></textarea>
				  </div>
				</div>
				</div>

				<div class="row">
				  <input type="submit" value="Tempah">
				</div>
				</div>
			</form>
			
        </main>
		<br>
		<center>
		<footer class="container-fluid">
			<h6 class="text-center small">©2021 Ohana Physiotherapy</h6>
		</footer>
		</center>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>