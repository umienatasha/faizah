
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

				body {
			  font-family: Arial;
			  margin: 0;
			}

			* {
			  box-sizing: border-box;
			}

			img {
			  vertical-align: middle;
			}

			/* Position the image container (needed to position the left and right arrows) */
			.container {
			  position: relative;
			}

			/* Hide the images by default */
			.mySlides {
			  display: none;
			}

			/* Add a pointer when hovering over the thumbnail images */
			.cursor {
			  cursor: pointer;
			}

			/* Next & previous buttons */
			.prev,
			.next {
			  cursor: pointer;
			  position: absolute;
			  top: 40%;
			  width: auto;
			  padding: 16px;
			  margin-top: -50px;
			  color: white;
			  font-weight: bold;
			  font-size: 20px;
			  border-radius: 0 3px 3px 0;
			  user-select: none;
			  -webkit-user-select: none;
			}

			/* Position the "next button" to the right */
			.next {
			  right: 0;
			  border-radius: 3px 0 0 3px;
			}

			/* On hover, add a black background color with a little bit see-through */
			.prev:hover,
			.next:hover {
			  background-color: rgba(0, 0, 0, 0.8);
			}

			/* Number text (1/3 etc) */
			.numbertext {
			  color: #f2f2f2;
			  font-size: 12px;
			  padding: 8px 12px;
			  position: absolute;
			  top: 0;
			}

			/* Container for image text */
			.caption-container {
			  text-align: center;
			  background-color: #222;
			  padding: 2px 16px;
			  color: white;
			}

			.row:after {
			  content: "";
			  display: table;
			  clear: both;
			}

			/* Six columns side by side */
			.column {
			  float: left;
			  width: 16.66%;
			}

			/* Add a transparency effect for thumnbail images */
			.demo {
			  opacity: 0.6;
			}

			.active,
			.demo:hover {
			  opacity: 1;
			}
		</style>
        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>G A L E R I</title>
		
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

        <!--========== CONTENTS ==========-->
		<BR>		
		
		<div class="container">
		<center>
		  <div class="mySlides">
			<div class="numbertext">1 / 6</div>
			<img src="images/1.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">2 / 6</div>
			<img src="images/2.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">3 / 6</div>
			<img src="images/3.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">4 / 6</div>
			<img src="images/4.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">5 / 6</div>
			<img src="images/5.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">6 / 6</div>
			<img src="images/6.jpeg" style="width:60%">
		  </div>
		</center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/1.jpeg" style="width:100%" onclick="currentSlide(1)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/2.jpeg" style="width:100%" onclick="currentSlide(2)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/3.jpeg" style="width:100%" onclick="currentSlide(3)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/4.jpeg" style="width:100%" onclick="currentSlide(4)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/5.jpeg" style="width:100%" onclick="currentSlide(5)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/6.jpeg" style="width:100%" onclick="currentSlide(6)" alt="">
			</div>
		  </div>
		</div>
	
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>
			
		<div class="container">
		 <center>
		  <div class="mySlides">
			<div class="numbertext">7 / 12</div>
			<img src="images/7.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">8 / 12</div>
			<img src="images/8.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">9 / 12</div>
			<img src="images/9.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">10 / 12</div>
			<img src="images/10.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">11 / 12</div>
			<img src="images/11.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">12 / 12</div>
			<img src="images/6.jpeg" style="width:60%">
		  </div>
		 </center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/7.jpeg" style="width:100%" onclick="currentSlide(7)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/8.jpeg" style="width:100%" onclick="currentSlide(8)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/9.jpeg" style="width:100%" onclick="currentSlide(9)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/10.jpeg" style="width:100%" onclick="currentSlide(10)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/11.jpeg" style="width:100%" onclick="currentSlide(11)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/12.jpeg" style="width:100%" onclick="currentSlide(12)" alt="">
			</div>
		  </div>
		</div>
		
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>
			
		<div class="container">
		 <center>
		  <div class="mySlides">
			<div class="numbertext">13 / 18</div>
			<img src="images/13.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">14 / 18</div>
			<img src="images/14.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">15 / 18</div>
			<img src="images/15.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">16 / 18</div>
			<img src="images/16.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">17 / 18</div>
			<img src="images/17.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">18 / 18</div>
			<img src="images/18.jpeg" style="width:60%">
		  </div>
		 </center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/13.jpeg" style="width:100%" onclick="currentSlide(13)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/14.jpeg" style="width:100%" onclick="currentSlide(14)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/15.jpeg" style="width:100%" onclick="currentSlide(15)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/16.jpeg" style="width:100%" onclick="currentSlide(16)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/17.jpeg" style="width:100%" onclick="currentSlide(17)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/18.jpeg" style="width:100%" onclick="currentSlide(18)" alt="">
			</div>
			
		  </div>
		</div>
		
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>

		
		<div class="container">
		 <center>
		  <div class="mySlides">
			<div class="numbertext">19 / 24</div>
			<img src="images/19.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">20 / 24</div>
			<img src="images/20.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">21 / 24</div>
			<img src="images/21.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">22 / 24</div>
			<img src="images/22.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">23 / 24</div>
			<img src="images/23.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">24 / 24</div>
			<img src="images/24.jpeg" style="width:60%">
		  </div>
		 </center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/19.jpeg" style="width:100%" onclick="currentSlide(19)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/20.jpeg" style="width:100%" onclick="currentSlide(20)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/21.jpeg" style="width:100%" onclick="currentSlide(21)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/22.jpeg" style="width:100%" onclick="currentSlide(22)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/23.jpeg" style="width:100%" onclick="currentSlide(23)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/24.jpeg" style="width:100%" onclick="currentSlide(24)" alt="">
			</div>
			
		  </div>
		</div>
		
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>
			
			<div class="container">
		 <center>
		  <div class="mySlides">
			<div class="numbertext">25 / 30</div>
			<img src="images/25.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">26 / 30</div>
			<img src="images/26.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">27 / 30</div>
			<img src="images/27.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">28 / 30</div>
			<img src="images/28.jpeg" style="width:60%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">29 / 30</div>
			<img src="images/29.jpeg" style="width:60%">
		  </div>
			
		  <div class="mySlides">
			<div class="numbertext">30 / 30</div>
			<img src="images/30.jpeg" style="width:60%">
		  </div>
		 </center>
		
		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/25.jpeg" style="width:100%" onclick="currentSlide(25)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/26.jpeg" style="width:100%" onclick="currentSlide(26)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/27.jpeg" style="width:100%" onclick="currentSlide(27)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/28.jpeg" style="width:100%" onclick="currentSlide(28)" alt="">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/29.jpeg" style="width:100%" onclick="currentSlide(29)" alt="">
			</div>    
			<div class="column">
			  <img class="demo cursor" src="images/30.jpeg" style="width:100%" onclick="currentSlide(30)" alt="">
			</div>
			
		  </div>
		</div>
		
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
				  showSlides(slideIndex += n);
				}

				function currentSlide(n) {
				  showSlides(slideIndex = n);
				}

				function showSlides(n) {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  var captionText = document.getElementById("caption");
				  if (n > slides.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none";
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";
				  dots[slideIndex-1].className += " active";
				  captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script><br>

		<center>
		<footer class="container-fluid">
			<h6 class="text-center small">©2021 Ohana Physiotherapy</h6>
		</footer>
		</center>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>