<?php
session_start();

$conn = mysqli_connect('localhost', 'root' );

$db = mysqli_select_db($conn, 'ohana');

$sql = "SELECT * FROM tbl_cuti_umum";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
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
		
        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>H O L I D A Y </title>
		
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
                        <span class="nav__logo-name"><strong>Hai, <?php echo $_SESSION['username'] ?></b> !</strong></span>
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
                                <a href="#" class="nav__link">
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
                                <a href="#" class="nav__link active">
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
		
		<BR>

        <!--========== CONTENTS ==========-->
        <main>
            <div style="overflow-x: auto;">
			<center><h2>P U B L I C . H O L I D A Y</h2></center>
			<br>
			  <table>
				<tr>
				  <th>No.</th>
				  <th>Date</th>
				  <th>Reasons</th>
				  <th>Action</th>
				</tr>
				
					<?php
						if(mysqli_num_rows($result) > 0)
						{
						while($row = mysqli_fetch_assoc($result))
						{											

					?>

				<tr>
				    <td><?php echo $row['id_cuti_umum']; ?></td>
					<td><?php echo $row['tarikh']; ?></td>
					<td><?php echo $row['sebab']; ?></td>
					<td>											
						<button><a href="updatecuti.php?id=<?php echo $row["id_cuti_umum"]; ?>" class="btn btn-danger delete-listview-btn" onClick="return confirm">Update</a></button>
						<button><a href="deletecuti.php?id=<?php echo $row["id_cuti_umum"]; ?>" class="btn btn-danger delete-listview-btn" onClick="return confirm('Do you really want to delete?');">Delete</a></button>
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