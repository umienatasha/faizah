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

$id_patient=$_GET['id'];

$sql = "SELECT * FROM tblpatient WHERE id_patient='$id_patient'";
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

        <title>Details Patient</title>
		<style>
		table {
		  border-collapse: center;
		  width: 100%;
		}

		th {
		  text-align: right;
		  padding: 18px;
		}
		td {
		  text-align: left;
		  padding: 26px;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}
		</style>
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
                        <span class="nav__logo-name">Ohana Physiotherapy</span>
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
                                <a href="#" class="nav__link active">
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
                                <a href="#" class="nav__link">
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

            <div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							Profile Details
						</div>
						
						<?php
							if(mysqli_num_rows($result) > 0)
							{
							while($row = mysqli_fetch_assoc($result))
							{											

						?>
						
						<div class="col-md-10 text-right">
							<a href="edit.php?id=<?php echo $row["id_patient"]; ?>" class="btn btn-secondary btn-sm" onClick="return confirm('Do you really want to update?');">Update</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						
						<tr>
							<th class="text-right" width="40%">Id Patient</th>
							<td><?php echo $row["id_patient"]; ?></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Patient Name</th>
							<td><?php echo $row['name']; ?></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Identity Card</th>
							<td><?php echo $row["ic"]; ?></td>
						</tr>	
						<tr>
							<th class="text-right" width="40%">Contact No.</th>
							<td><?php echo $row["phone"]; ?></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Password</th>
							<td><?php echo $row["password"]; ?></td>
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