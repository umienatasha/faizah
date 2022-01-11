<?php
session_start();

$conn = mysqli_connect('localhost', 'root' );

$db = mysqli_select_db($conn, 'ohana');

$sql = "SELECT * FROM tbl_rawatan";
$result = mysqli_query($conn, $sql);

?>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `tbl_rawatan` WHERE CONCAT(`category`, `rawatan_nama`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `tbl_rawatan`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $conn = mysqli_connect("localhost", "root", "", "ohana");
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

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

        <title>T R E A T M E N T</title>
		<style>
			table {
			  border-collapse: collapse;
			  width: 100%;
			}

			th, td {
			  text-align: center;
			  padding: 12px;
			}

			tr:nth-child(even) {background-color: #f2f2f2;}
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
		
		<BR>

        <!--========== CONTENTS ==========-->
        <main>
		<form action="" method="post" class="checkdomain form-inline" >
			<div class="header__search">
				<input type="text" id="domainnamehere" name="valueToSearch" class="header__input"   placeholder="Masukkan Nama Rawatan / Kategori">
				<button  type="submit" name="search" value="Filter" class="btn btn-primary grd1"><i class='bx bx-search header__icon' ></i></button>
				
			</div>
            <div style="overflow-x: auto;">
			<center><h2>S E N A R A I . R A W A T A N</h2></center><br>
			  <table>
				<tr>
				  <th>No.</th>
				  <th>Kategori</th>
				  <th>Nama Rawatan</th>
				  <th>Harga Rawatan</th>
				</tr>
				
					<?php
						if(mysqli_num_rows($result) > 0)
						{
						while($row = mysqli_fetch_assoc($result))
						{											

					?>
					
				<tbody>
					<?php while($row = mysqli_fetch_array($search_result)):?>

				<tr>
				    <td><?php echo $row['id_rawatan']; ?></td>
				    <td><?php echo $row['category']; ?></td>
					<td><?php echo $row['rawatan_nama']; ?></td>
					<td><?php echo $row['rawatan_harga']; ?></td>		
				</tr>
				
				<?php endwhile;?>
				</tbody>
				
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
		</form>
		<BR>
		
		<center>
		<footer class="container-fluid">
			<h6 class="text-center small">©2021 Ohana Physiotherapy</h6>
		</footer>
		</center>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>