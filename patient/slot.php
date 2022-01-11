<?php
include('connection.php');

$times = ['09:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '02:00 PM', '03:00 PM', '04:00 PM', '05:00 PM'];
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

        <title>T E M P A H</title>
		<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
		
		
		.alert {
		  padding: 10px;
		  background-color: #f44336;
		  color: white;
		}

		.closebtn {
		  margin-left: 15px;
		  color: white;
		  font-weight: bold;
		  float: right;
		  font-size: 22px;
		  line-height: 20px;
		  cursor: pointer;
		  transition: 0.3s;
		}

		.closebtn:hover {
		  color: black;
		}
	</style>
    </head>
    <body>
        <!--========== HEADER ==========-->
       <header class="header">
            <div class="header__container">
                <img src="assets/img/4.jpg" alt="" class="header__img">

                <a href="../index.php" class="header__logo"><strong>Selamat Datang, Ohana Physiotherapy</b> !</strong></a>
				
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

		
		<center>
		<div class="alert">
		  <strong>Perhatian! Sekirannya ingin membuat pembatalan temujanji, perlu membuat pembatalan sebelum 24 jam dari tarikh tempahan !</strong>
		</div>
		</center>
		
		<br>
		<br>
		
        <main>
            <form method="post" action="">
				<table>
					<tr>
						<th>Hari</th>
						<th>Tarikh</th>
						<?php
						foreach ($times as $time) {
							echo "<th>$time</th>";
						}
						?>
					</tr>

					<?php
					$tarikh = new DateTime(date('Y-m-d')); # tarikh hari ini
					$tempoh = 14; # 7 hari
					for ($x = 1; $x <= 14; $x++) {
						$tarikh->add(new DateInterval('P1D'));
						$date = $tarikh->format('Y-m-d');
						?>
						<tr>
							<td><?php echo $tarikh->format('l'); ?></td>
							<td><?php echo $tarikh->format('d M Y'); ?></td>
							<?php
							if ($tarikh->format('l') == 'Sunday') {
								echo "<td colspan=\"8\" style=\"background-color:#ff2424;\"></td>";
							} elseif (cuti($date)) {
								echo "<td colspan=\"8\" style=\"background-color:#ff2424;\">" . cuti($date) . "</td>";
							} else {
								foreach ($times as $time) {
									if (kosong($date, $time)) {
										echo "<td><a href=\"maklumat.php?date=$date&timeslot=$time\">Tempah</a></td>";
									} else {
										echo "<td style=\"background-color:#ff2424;\"></td>";
									}
									if ($tarikh->format('l') == 'Saturday') {
										if ($time == '12:00 PM') {
											echo "<td colspan=\"4\" style=\"background-color:#ff2424;\"></td>";
											break;
										}
									}
								}
							}
							?>
						</tr>
						<?php
					}
					?>
				</table>
			</form>
        </main>
		
		<br>
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
	<?php
	function cuti($tarikh)
	{
		global $conn;
		$sql = "SELECT  * FROM tbl_cuti_umum WHERE tarikh = '$tarikh'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) == 0) {
			return false;
		} else {
			$row = mysqli_fetch_array($result);
			return $row['sebab'];
		}
	}

	function kosong($date, $timeslot)
	{
		global $conn;
		$sql = "SELECT  * FROM bookings WHERE date = '$date' AND timeslot = '$timeslot'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 1) {
			return false;
		} else {
			return true;
		}
	}
	
