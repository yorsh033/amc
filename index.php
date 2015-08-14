<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description");?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>

</head>
<body>
<div class="Wrap">	
	<header class="Header">
		<div class="Header--logo">
			<a href="#">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/alcaldia-comacaran.png" alt="<?php bloginfo('name');?>" width="120"/>
			</a>
		</div>
		<div class="Header--name">
			<h1 class="Header--nameTitle">
				ALCALDIA MUNICIPAL DE COMACARÁN
			</h1>
			<h3 class="Header--nameSubtitle">
				ENRIS ARIAS ALCALDE 2015-2018
			</h3>
		</div>
		<div class="Header--social">
			<div class="Header--socialBox">
				<a href="#" class="Icon Icon-youtube"></a>
				<a href="#" class="Icon Icon-facebook"></a>
			</div>
			<div class="Header--socialSearchBox">
				<input class="Header--socialSearchBoxInput" type="text" name="" id="">
				<button class="Header--socialSearchBoxButton" type="button">Go!</button>
			</div>
		</div>
	</header>	
</div>	
	<nav class="Nav">
		<div class="Wrap">
			<ul class="Nav-menu">
				<li><a href="#">Item 1</a></li>
						<li><a href="#">Item 2</a></li>
						<li><a href="#">Item 3</a></li>
						<li><a href="#">Item 4</a></li>
						<li><a href="#">Item 5</a></li>		
			</ul>
		</div>
	</nav>
	<div class="Body">
		<section class="Body--Main">SLIDER</section>
		<aside class="Body--Aside">
			<div class="Body--AsideMessage">
				<figure>
					<img src="<?php bloginfo('stylesheet_directory');?>/img/alcalde.JPG" width="180" alt=""/>
 					<figcaption class="u-subtitle">mensaje del alcalde</figcaption>
					<h2 class="u-title">Sr. Enris Arias</h2>
				</figure>
			</div>
		</aside>
	</div>	
	<!-- END SLIDER, MENSAJE -->

	<div class="Wrap">	
		<div class="Body--MainThemes">
			<div class="Body--MainThemes1">1</div>
			<div class="Body--MainThemes2">2</div>
			<div class="Body--MainThemes3">3</div>
		</div>
	</div>
	<!-- END MAIN THEMES -->
	<div class="Body">
		<section class="Body--Main">
			<div class="Body-MainBox">
				asdas
			</div>
		</section>
		<aside class="Body--Aside">
			<div>
				FACEBOOK PLUGIN
			</div>
		</aside>
	</div>
	<!-- END MAIN INFO -->
	<div class="Wrap">
		<footer class="Footer">
			ALCALDIA DE COMARACAN - 2015
		</footer>
	</div>
</body>
</html>