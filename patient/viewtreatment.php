<?php
include('connection.php');

$sql = "SELECT * FROM tbl_rawatan";
$result = mysqli_query($conn, $sql);
?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `tbl_rawatan` WHERE CONCAT(`rawatan_nama`,`category`) LIKE '%".$valueToSearch."%'";
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

        <title>R A W A T A N</title>
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

                <a href="index.php" class="header__logo"><strong>Ohana Physiotherapy</strong></a>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">Ohana Physiotherapy</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
                            
							<a href="profile.php" class="nav__link">
								<i class='bx bx-user-pin nav__icon' ></i>
								<span class="nav__name">Profile</span>
							</a>
						</div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Managament</h3>
							
							<div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-calendar-heart nav__icon' ></i>
                                    <span class="nav__name">Appointment</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="slot.php" class="nav__dropdown-item">Booking</a>
                                        <a href="viewbooking.php" class="nav__dropdown-item">Details</a>
                                    </div>
                                </div>
                            </div>
							
							<div class="nav__dropdown">
                                <a href="#" class="nav__link active">
                                    <i class='bx bx-list-plus nav__icon' ></i>
                                    <span class="nav__name">Rawatan</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
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
                                        <a href="viewcuti.php" class="nav__dropdown-item">Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <a href="../logout.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        <!--========== CONTENTS ==========-->
        <main>
		<form action="" method="post" class="checkdomain form-inline" >
		<div class="header__search">
			<input class="header__input" type="text" class="form-control" id="domainnamehere" name="valueToSearch" placeholder="Category Name or Treatment Name">
			<button type="submit" name="search" value="Filter" class="btn btn-primary grd1"><i class='bx bx-search header__icon' ></i></button>
			
		</div>	
		
            <div style="overflow-x: auto;">
			<center><h2>R A W A T A N</h2></center>
			<br>
			  <table>
				<tr>
				  <th>No.</th>
				  <th>Kategori Rawatan</th>
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