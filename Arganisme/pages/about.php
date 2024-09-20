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
			<h1 class="col" >About</h1>
			<div class="divider col">
				<hr>
			</div>
		</div>
		<section class="sec" id="article">
			<center>
				<h1>ARGANisme Cosmetics SARL</h1>
				<p>
				Founded in ESSAOUIRA, ARGANisme company’s primary objective was to service all sizes of companies. Prior to starting, ARGANisme held cooperatives positions at many of the leading suppliers.

				Born in ESSAOUIRA, the founders of ARGANISME had a respect for nature at an early age and were keen on our impact on the environment. Sustainability initiatives are part of our core vision.

				-Organic Producer of Argan Oil
				-Organic Producer of Prickly Pear Seed Oil
				-Producer of cream, shampoo, soap…etc
				–Tax-free for export (EUR1 Exporter)
				-Our raw material suppliers have met rigorous supplier specification
				-Lot coding is used for every production batch we manufacture. This enables us to follow the product’s manufacturing date and receipt of raw materials used
				</p>
				<h1>Anti-age Line</h1>
				<p>
				100% Pure Argan Oil, Eco-certified and US NOP<br>
				Lifting cream using argan oil and cactus oil.<br>
				Age Defying
				</p>
				<h1>Beauty Face Line</h1>
				<p>
				ARGANisme Cosmetics offers a line of skincare products that are designed for effective performance. These beauty treatments bring out the best nourishing, moisturizing, and healing elements from this remarkable plant. Prickly Pear Seed Oil

				Argan Oil Skin Care Cream. This cream is the ultimate defense against external and environmental factors that affect the skin. It can be used as a day and night moisturizer. Based on natural Argan oil, our Skin Care Cream protects, hydrates, and nourishes the epidermis. The result is that it regenerates the skin and acts preventatively against early aging due to external factors.
				</p>
				<h1>Body Care Line</h1>
				<p>
				HydraBody+ <br>
				Body Scrub<br>
				</p>
				<h1>Cold Pressed Argan Oil</h1>
				<p>
				An unrivaled Moroccan natural treasure, the beneficial uses of Argan oil were discovered centuries ago by women in the southern region of Morocco. Our Argan oil is organically certified by Ecocert / US NOP. It contains elevated levels of Omega 6 & 9 essential fatty acids, linoleic acid, and vitamin E. This rich oil is endowed with all the natural antioxidants recommended for the prevention of premature aging. Through its super hydration, it is able to defend the skin from skin aging and dehydration.
				</p>
				<h1>Argan Massage Lotions</h1>
				<p>
				Our Argan Oil Massage Lotions are available with a range of essential oils.
				</p>
				<h1>Cold Pressed Prickly Pear Seed Oil</h1>
				<p>
				This exotic cactus pear oil has a unique combination of components: an outstanding level of linoleic acid, an abundant content of tocopherols (more than 1000 mg/kg), and the presence of Delta 7 stigmasterol, a singular component very seldom encountered in plant life.
				Those elements combined set off a powerful anti-oxidative activity, a high moisturizing value, and a real cell rejuvenatory ability. Prickly pear oil has also great physical properties: smooth and very light, it penetrates the skin easily.
				Prickly pear oil is perfect for anti-aging use, giving the skin, the face, and the neck a great tone.
				Prickly pear oil slows down cutaneous aging, is very nutritive, and regenerative, preserves our cells from the ravages of time, and gives the skin good tone and firmness. It is a miraculous anti-wrinkle product. Our oil is extracted by the cold press process in a 100% natural way, without any use of heat or chemical solvents. CERTIFIED ORGANIC BY ECOCERT.
				</p>
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