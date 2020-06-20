<!DOCTYPE HTML>
<html>
<head>
<title> Studi-Maske </title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">


</head>

<body>

<!--Navbar -->
<nav>
	<ul>
	
	<li><a href="Startseite.html">Startseite</a></li>
	<li><a href="Shop.html">Shop</a></li>
	<li><a href="MeinKonto.html">Mein Konto</a></li>
	<li><a href ='Warenkorb.html'> Warenkorb</a></li>
	<li><a href ='ÜberUns.html'> Über Uns</a></li>
	
	
	</ul>
</nav>

 <div class = "loginbox">
	<img src="avatar.jpg" class="avatar">
		
<?php

	$Benutzername = $_GET['userName'];
	if(!empty($_GET['userName']) && !empty($_GET['password'])){
	
	echo "<h1> Erfolgreich eingeloggt </h1>";
	echo "Hallo $Benutzername";

	}else{
		echo "<h1> Login fehlgeschlagen! </h1>";
	}
?>

</div>


</body>

</html>
