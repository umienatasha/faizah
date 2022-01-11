<?php
include('connection.php');


$sql = "SELECT * FROM bookings ";
$result = mysqli_query($conn, $sql);

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

        <title>S E M A K</title>
		<style>
			table {
			  border-collapse: collapse;
			  width: 100%;
			}

			th, td {
			  text-align: center;
			  padding: 8px;
			}

			tr:nth-child(even) {background-color: #f2f2f2;}
			
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
	
		<center>
		<div class="alert">
		  <strong>Perhatian! Sekirannya ingin membuat pembatalan temujanji, perlu membuat pembatalan sebelum 24 jam dari tarikh tempahan !</strong>
		</div>
		</center>
	
		
	
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="assets/img/4.jpg" alt="" class="header__img">

                <a href="#" class="header__logo"><strong>Ohana Physiotherapy</strong></a>
				
				<div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
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
		<br>
		<br>
		
        <main>
            <div style="overflow-x: auto;">
			  <table>
				<tr>
				  <th>ID</th>
				  <th>Tarikh</th>
				  <th>Masa Tempahan</th>
				  <th>Nama Pesakit - 1</th>
				  <th></th>
				</tr>
				
				<?php
			if(mysqli_num_rows($result) > 0)
			{
			while($row = mysqli_fetch_assoc($result))
			{											

		?>
				
				<tr>
				  <td><?php echo $row['id_book']; ?></td>
				  <td><?php echo $row['date']; ?></td>
				  <td><?php echo $row['timeslot']; ?></td>
				  <td><?php echo $row['name']; ?></td>
				  <td>											
					<button><a href="display.php?id=<?php echo $row["id_book"]; ?>" class="btn btn-danger delete-listview-btn" onClick="return confirm">Detail</a></button>
					<button><a href="deletebooking.php?id=<?php echo $row["id_book"]; ?>" class="btn btn-danger delete-listview-btn" onClick="return confirm('Do you really want to delete?');">Delete</a></button>
				  </td>
				</tr>

				
					<?php
						   }
						}
						else 
						{
						   echo "0 results";
						}

						mysqli_close($conn);
					?>
					
			  </table>
			</div>

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