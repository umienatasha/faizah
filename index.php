<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		* {
		  box-sizing: border-box;
		}

		body {
		  font-family: Arial;
		  font-size: 18px;
		}

		.container {
		  position: relative;
		  max-width: 800px;
		  margin: 0 auto;
		}

		.container img {vertical-align: middle;}

		.container .content {
		  position: absolute;
		  bottom: 0;
		  background: rgb(0, 0, 0); /* Fallback color */
		  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
		  color: #f1f1f1;
		  width: 100%;
		  padding: 20px;
		}
		
		
		* {
		  box-sizing: border-box;
		}

		/* Create two equal columns that floats next to each other */
		.column {
		  float: left;
		  width: 50%;
		  padding: 10px;
		  height: 300px; /* Should be removed. Only for demonstration */
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		
		* {
		  box-sizing: border-box;
		}

		body {
		  font-family: Arial, Helvetica, sans-serif;
		}

		/* Float four columns side by side */
		.column {
		  float: left;
		  width: 25%;
		  padding: 0 10px;
		}

		/* Remove extra left and right margins, due to padding */
		.row {margin: 0 -5px;}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Responsive columns */
		@media screen and (max-width: 600px) {
		  .column {
			width: 100%;
			display: block;
			margin-bottom: 20px;
		  }
		}

		/* Style the counter cards */
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  padding: 16px;
		  text-align: center;
		  background-color: #f1f1f1;
		}
	
		</style>

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>H O M E</title>
		
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
    
                            <a href="index.php" class="nav__link active">
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

                <a href="login.php" class="nav__link nav__logout">
                    <i class='bx bx-log-in nav__icon' ></i>
                    <span class="nav__name">Log In</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
		<center>
		<img src="images/3.jpg" alt="Notebook" width="900" height="200">

			<p>Ohana Physiotherapy sebuah pusat rawatan rehabilitasi yang menyediakan kaedah perawatan </p>
			<p>klinikal menggunakan terapi mesin dan urutan terapeutik.</p>	
			
		<BR>
		<BR>
		
			<h2>Hubungi Kami</h2>
			
			<div class="row">
			  <div class="column">
				<div class="card">
				  <h3>Call</h3>
				  <br>
				  <p><a href="tel:019-373 4924">019-373 4924</a></p>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				  <h3>Alamat</h3>
				  <p>Klinik Faizah Kangar 01000 Kangar, Perlis, Malaysia</p>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				  <h3>Map</h3>
				  <br>
				  <p><a href="contact.php">Lokasi</a></p>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				  <h3>Media Sosial</h3>
				  <br>
				  <p><a href="https://www.facebook.com/ohanaphysiotherapy/">Facebook</a></p>
				</div>
			  </div>
			</div>
		
		<footer class="container-fluid">
			<h6 class="text-center small">©2021 Ohana Physiotherapy</h6>
		</footer>
		</center>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>