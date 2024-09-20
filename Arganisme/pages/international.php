<?php
	require "../Database/db.php";
	$connection = DataBase::connect(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ARGANisme</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/rhodium-libre" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/krona-one" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<link rel="shortcut icon" type="image/png" href="../images/logo.png">
</head>
<body>
	<div class="container-fluid contact">
		<div class="icons">
			<a class="bi bi-instagram" href="https://instagram.com"></a>
			<a class="bi bi-facebook" href="https://facebook.com"></a>
			<a class="bi bi-youtube" href="https://youtube.com"></a>
		</div>
		<h4>Contact us: +212 651 925 398 Monday-Friday 10am/6pm</h4>
	</div>
	<nav class="navbar navbar-expand-lg">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="..\index.php">
			<img src="../images/logo.png">
			<h1>ARGANisme</h1>
		</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
	      <div class="offcanvas-header">
	      	<img src="../images/logo.png">
			<h1 class="offcanvas-title" id="offcanvasNavbarLabel">ARGANisme</h1>
	        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	      </div>
	      <div class="offcanvas-body">
	        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
	          	<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="..\index.php">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle" href="products.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  Products
					</a>
					<ul class="dropdown-menu">
						<?php
							$statement = $connection->query('SELECT * FROM categories');
							while ($categories = $statement->fetch()) {
								echo '<li><a class="dropdown-item" id="'.$categories['id'].'" href="categorie.php?name='.$categories['name'].'">'.$categories['name'].'</a></li>';
							}
							
						?>
					  <li>
					    <hr class="dropdown-divider">
					  </li>
					  <li><a class="dropdown-item" href="products.php">All</a></li>
					</ul>
				</li>
				<li class="nav-item active">
				  <a class="nav-link active" href="vision.php">Vision</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="international.php">International</a>
				</li>
				<li class="nav-item active">
				  <a class="nav-link active" href="about.php">About</a>
				</li>
				<li class="nav-item active">
				  <a class="nav-link active" href="contact.php">Contact</a>
				</li>
				<li class="nav-item active">
				  <a class="nav-link active" href="order.php">Order</a>
				</li>
	        </ul>
	        <form class="d-flex" role="search" action="search.php" method="get">
				<input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-dark" id="searchButton" type="send" class="text" onclick="document.getElementById('searchForm').submit()"><i class="bi bi-search"></i></button>
			</form>
	      </div>
	    </div>
	  </div>
	</nav>
	<div id="content" class="container" align="center">
		<div class="title row" id="contactUs">
			<div class="divider col">
				<hr>
			</div>
			<h1 class="col" >International</h1>
			<div class="divider col">
				<hr>
			</div>
		</div>
		<section class="sec" id="article" align="center">
			<center>
				<h1></h1>
				<p>
				ARGANisme Cosmetics deals with international countries all over the world, in Europe, Asia, America, Australia, and Africa.
				</p>
				<div class="countriesImage" style="background-image: url(../images/countries.png);"></div>
			</center>
		</section>
	</div>
	<footer class="container-fluid" >
			<div class="walid-footer">
				<div class="walid-top">
					<div class="walid-sec1 walid-div">
						<h4>Follow us</h4>
						<a class="walid-a" href="https://www.facebook.com/ARGANOILofARGANisme"><i class="walid-icon fa-brands fa-square-facebook"></i></a>
						<a class="walid-a" href="https://www.instagram.com/arganisme/"><i class="walid-icon fa-brands fa-instagram"></i></a>
						<a class="walid-a" href="https://www.pinterest.com/arganisme/?invite_code=f2cc89f602f74a8a89eb87afe64345c9&sender=491033303030180877"><i class="walid-icon fa-brands fa-pinterest"></i></a>
						<a class="walid-a" href="https://x.com/arganisme"><i class="walid-icon fa-brands fa-square-twitter"></i></a>
					</div>
					<div class="walid-sec2 walid-div">
						<p class="walid-p">The Arganismecosmetics 
							<br class="walid-br">
							<a class="walid-a" href="">Tel : +212 651 925 398
								<br class="walid-br">
							</a>
							<br class="walid-br">
							<br class="walid-br">
						</p>
						<p class="walid-p">Office Phone hours: Monday - Friday 9:00 AM to 4:00 PM (Pacific Time)</p>
						<br class="walid-br">
						<p class="walid-p">Local pickup hours: Fridays Only 10 AM-2 PM</p>    
					</div>
					<div class="walid-sec3 walid-div" style="text-align: justify;">
						<a class="walid-a" href="mailto:contact@arganismecosmetics.com">contact@arganismecosmetics.com</a>
						<br class="walid-br">
						<br class="walid-br">
						<p class="walid-p" >Marrakech <br><a style="color: #FFF;" href="mailto:office.marrakesh@arganismecosmetics.com">office.marrakesh@arganismecosmetics.com</a></p>
						<p class="walid-p" >Essaouira <br><a style="color: #FFF;" href="mailto:office.essaouira@arganismecosmetics.com">office.essaouira@arganismecosmetics.com</a></p>
						<p class="walid-p">Casablanca <br><a style="color: #FFF;" href="mailto:office.casablanca@arganismecosmetics.com">office.casablanca@arganismecosmetics.com</a></p>    
					</div>
				</div>
				<div class="walid-bottom">
					<div class="walid-sec_1 walid-div">
						<a class="walid-a" class="walid-sec_1-a" href="about.php">About Us <span style="margin: 0 5px;font-weight:bold;">|</span> </a>
						<a class="walid-a" class="walid-sec_1-a" href="products.php">products<span style="margin: 0 5px;font-weight:bold;">|</span> </a>
						<a class="walid-a" class="walid-sec_1-a" href="vision.php">Vision <span style="margin: 0 5px;font-weight:bold;">|</span> </a>
						<a class="walid-a" class="walid-sec_1-a" href="international.php">International <span style="margin: 0 5px;font-weight:bold;">|</span> </a>
						<p class="walid-p" class="walid-copy-right walid-sec_1-p">
							Copyright © All rights reserved. 2023 ARGANisme
						</p>
					</div>
				</div>
			</div>	
	</footer>
	<div class="container-fluid copyright">
		<i><center>Copyright © All rights reserved. 2023 ARGANisme</center></i>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../script.js"></script>
</body>
</html>