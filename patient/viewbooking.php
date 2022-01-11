<?php
include('connection.php');

$id_patient=$_SESSION['id_patient'];

$sql = "SELECT * FROM bookings WHERE id_patient='$id_patient'";
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
                                <a href="#" class="nav__link active">
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
                                <a href="#" class="nav__link">
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