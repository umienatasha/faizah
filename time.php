<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>M A S A </title>
		<style>	
		table {
		  border-collapse: collapse;
		  border-spacing: 0;
		  width: 100%;
		  border: 1px solid #ddd;
		}

		th, td {
		  text-align: center;
		  padding: 14px;
		}

		tr:nth-child(even){background-color: #f2f2f2}
	
		
	
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
                                <a href="#" class="nav__link active">
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
		<div class="row">
		  <div class="column" style="">
		  
		  <center><h2>W A K T U . B E R O P E R A S I</h2>
			<div style="overflow-x:auto;">
			  <table>
				<tr>
				  <th>Hari</th>
				  <th>Masa</th>
				</tr>
				<tr>
				  <td>Isnin</td>
				  <td>9 am - 6 pm</td>
				</tr>
				<tr>
				  <td>Selasa</td>
				  <td>9 am - 6 pm</td>
				</tr>
				<tr>
				  <td>Rabu</td>
				  <td>9 am - 6 pm</td>
				</tr>
				<tr>
				  <td>Khamis</td>
				  <td>9 am - 6 pm</td>
				</tr>
				<tr>
				  <td>Jumaat</td>
				  <td>9 am - 6 pm</td>
				</tr>
				<tr>
				  <td>Sabtu</td>
				  <td>9 am - 1 pm</td>
				</tr>
				<tr>
				  <td>Ahad</td>
				  <td>TUTUP</td>
				</tr>
			  </table>
			</div>
		  </div>
		</div>

	
		
		<center>
		<footer class="container-fluid">
			<h6 class="text-center small">©2021 Ohana Physiotherapy</h6>
		</footer>
		</center>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>