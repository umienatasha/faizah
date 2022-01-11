<?php
include('connection.php');

$id_patient=$_SESSION['id_patient'];

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

        <title>P R O F I L E</title>
		<style>
		table {
		  border-collapse: center;
		  width: 100%;
		}

		th {
		  text-align: right;
		  padding: 15px;
		}
		td {
		  text-align: left;
		  padding: 20px;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}
		</style>
    </head>
    <body>
	
		<?php
			if(mysqli_num_rows($result) > 0)
			{
			while($row = mysqli_fetch_assoc($result))
			{											

		?>
	
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="assets/img/4.jpg" alt="" class="header__img">

                <a href="#" class="header__logo"><strong>Hai, <?php echo $row['name'] ?></b> !</strong></a>
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
                        <span class="nav__logo-name"><strong>Hai, <?php echo $row['name'] ?></b> !</strong></span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
                            
							<a href="profile.php" class="nav__link active">
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
        <main>
            <div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10">
							Profile Details
						</div>
						
						
						
						<div class="col-md-10 text-right">
							<a href="edit.php?id=<?php echo $row["id_patient"]; ?>" class="btn btn-secondary btn-sm" onClick="return confirm('Do you really want to update?');">Edit</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						
						<tr>
							<th class="text-right" width="40%">ID</th>
							<td>1</td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Nama Penuh</th>
							<td><?php echo $row['name']; ?></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Kad Pengenalan (IC)</th>
							<td><?php echo $row["ic"]; ?></td>
						</tr>	
						<tr>
							<th class="text-right" width="40%">Number Telefon</th>
							<td><?php echo $row["phone"]; ?></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Kata Laluan</th>
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