<!DOCTYPE html>
<?php
$variable1=" PHP 7";
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div id="wrapper">
	<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">PlainDisplay</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li><a href="#" accesskey="3" title="">About Us</a></li>
				<li><a href="#" accesskey="4" title="">Careers</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<!-- </div>
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>Etiam rhoncus volutpat</h2>
				<span class="byline">Proin gravida porttitor accumsan</span> </div>
			<ul class="actions">
				<li><a href="#" class="button">Etiam posuere</a></li>
			</ul>
		</div>
	</div>
	<div id="extra" class="container">
		<div class="title">
			<h2>Praesent scelerisquet</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span> </div>
		<div id="three-column">
			<div class="boxA">
				<div class="box"> <span class="fa fa-cloud-download"></span>
					<p>Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
				</div>
			</div>
			<div class="boxB">
				<div class="box"> <span class="fa fa-cogs"></span>
					<p>Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis.</p>
				</div>
			</div>
			<div class="boxC">
				<div class="box"> <span class="fa fa-user"></span>
					<p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus.</p>
				</div>
			</div>
		</div>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div>
	<div id="featured">
		<div class="container">
			<div class="title">
				<h2>Fusce ultrices fringilla metus</h2>
				<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span> </div>
			<p>This is <strong>PlainDisplay</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
		</div>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div>
	<div id="page" class="container">
		<div class="title">
			<h2>Nulla luctus eleifend</h2>
			<span class="byline">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span> </div>
		<p> Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor.</p>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div> -->
</div>
<?php
echo "<title>Une page pleine d'inclusions $variable1</title>";
?>
</head>
<body>
<?php
$variableext="Ce texte provient du fichier inclus";
echo
"<div><h1
style=\"border-width:5;border-style:double;background-
color:#ffcc99;\">
Bienvenue sur le site $variable1 </h1>";
echo "<h3> $variableext</h3>";
echo "Nom du fichier ex&#233;cut&#233;: ", $_SERVER['PHP_SELF'],"&nbsp;&nbsp;&nbsp;";

echo " Nom du fichier inclus : ", __FILE__ ,"</div> "; 
?>