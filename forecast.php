<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Meteorological online service</title>
	<meta name="description" content="Описание страницы" />
	<meta name="keywords" content="Ключевые слова" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	</head>
<body>
	<?php
 
	$speed = htmlspecialchars($_POST["speed"]);
	$temperature = htmlspecialchars($_POST["temperature"]);
	$vlazhnost = htmlspecialchars($_POST["vlazhnost"]);
	$par = htmlspecialchars($_POST["par"]);
	$moshnost = htmlspecialchars($_POST["moshnost"]);

	$result = ($speed + $temperature + $vlazhnost + $par + $moshnost) % 6;
	
	?>

	<div id="page">
	<header>	
		<a href="index.html" title="" class="logo"><img src="images/logo.png" alt="Meteorological online service" /></a>
		<div class="phone">+7 (123) 45-67-890</div>
		<nav>
			<ul id="top_menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		
		<div class="header_img">
		
		<?php
			switch ($result) {
				case 0: $str = 'images/header_img0.jpg';
					break;
				case 1: $str = 'images/header_img1.jpg';
					break;
				case 2: $str = 'images/header_img2.jpg';
					break;
				case 3: $str = 'images/header_img3.jpg';
					break;
				case 4: $str = 'images/header_img4.jpg';
					break;
				case 5: $str = 'images/header_img5.jpg';
					break;
			}
			echo '<img src="' . $str . '" alt="Meteorological online service" />';
		?>
		</div>
	</header>
	<section id="content">       
		<center>
		<h1>The most likely forecast: 
			<?php
			switch ($result) {
				case 0: print("precipitation is not expected.");
					break;
				case 1: print("light rain.");
					break;
				case 2: print("shower.");
					break;
				case 3: print("storm.");
					break;
				case 4: print("snowfall.");
					break;
				case 5: print("rain of hail.");
					break;
			}
			?>
		</h1>
		</center>
	</section>
	
	</div>
</body>
</html>