<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title> Studi-Maske </title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		<!----Datenbank anbindung---->
 		<?php
		    if(isset($_POST["submit"])){
		      require("mysql.php");
		      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
		      $stmt->bindParam(":user", $_POST["username"]);
		      $stmt->execute();
		      $count = $stmt->rowCount();
		      if($count == 0){
			//Username ist frei
			$stmt = $mysql->prepare("SELECT * FROM accounts WHERE EMAIL = :email"); //Username überprüfen
			$stmt->bindParam(":email", $_POST["email"]);
			$stmt->execute();
			$count = $stmt->rowCount();
			if($count == 0){
			  if($_POST["pw"] == $_POST["pw2"]){
			    //User anlegen
			    $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD, EMAIL, TOKEN) VALUES (:user, :pw, :email, null)");
			    $stmt->bindParam(":user", $_POST["username"]);
			    $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
			    $stmt->bindParam(":pw", $hash);
			    $stmt->bindParam(":email", $_POST["email"]);
			    $stmt->execute();
			    echo "Dein Account wurde angelegt";
			  } else {
			    echo "Die Passwörter stimmen nicht überein";
			  }
			} else {
			  echo "Email bereits vergeben";
			}
		      } else {
			echo "Der Username ist bereits vergeben";
		      }
		    }
     		?>
		<!----Datenbank anbindung ENDE---->
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


<!--Loginmaske-->
<div class = "Accounterstellenbox">
	<img src="avatar.jpg" class="avatar">
		<h1> Account erstellen </h1>
		<form action="newaccount.php method="post">
			<p>E-Mail Adresse</p>
			<input type ="text" name="email" placeholder="E-Mail eingeben" required>
			<p>Benutzername</p>
			<input type ="text" name="username" placeholder="Benutzernamen eingeben" required>
			<p>Passwort</p>
			<input type="password" name="pw" placeholder="Passwort eingeben" required>
			<p>Passwort</p>
			<input type="password" name="pw2" placeholder="Passwort bestätigen" required>
			<button type="submit" name="submit">Registrieren</button>
		</form>
<!--Loginmaske ENDE-->
			
		
</div>

</body>

</html>
