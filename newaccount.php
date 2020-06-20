<!DOCTYPE HTML>
<html>
<head>
<title> Studi-Maske </title>
	<link rel="stylesheet" href="stylesheet.css">


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
<!--Logininmaske-->
<div class = "loginbox">
	<img src="avatar.jpg" class="avatar">
		<h1> Login </h1>

			<form action ="auswertung.php" methode="POST">
			<p>Benutzername</p>
			<input type ="text" name="userName" placeholder="Benutzernamen eingeben">
			
		
			<p>Passwort</p>
			<input type="password" name="password" placeholder="Passwort eingeben"> 
			
			
			<input type="submit" name="login" value="Login">
			
			
			
			<a href="Passw.html"> Passwort vergessen ? </a> <br>
			<a href="Accounterstellen.html"> Account erstellen </a> 
		
		</form>

</div>

</body>
</html>
