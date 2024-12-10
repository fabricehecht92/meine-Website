<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabrice Hecht</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <!-- Header -->
    <header>
	<h1><a href="index.html" class="titlelink">Fabrice Hecht</a></h1>
        <button id="menu-btn" aria-label="Menü öffnen">☰</button>
    </header>

    <!-- Begrüßung -->
    <div class="welcome" style="display: none;">
        <div class="text-background">
            <p>Willkommen auf meiner Website! Lass uns kreativ werden.</p>
        </div>
        <div class="search-container">
            <input type="text" id="search" placeholder="Suche...">
            <div id="suggestions" class="suggestions"></div>
        </div>
    </div>
    <div class="login">
	<p style="text-align: center;">Der Login setzt einen Cookie</p>
	<form action="login.php" method="post">
	    <input type="text" name="login_name" placeholder="Name..." id="loginname"><br />
	    <input type="password" name="password" placeholder="password" id="loginpassword"><br />
	    <input type="submit" name="submit" value="Anmelden" id="loginbutton">
	</form>

	<?php
	    if(isset($_POST['submit'])){
		if($_POST['login_name']=="FIRMENNAME" && $_POST['password']=="CUSTOMPASSWORD"){
		    $value = '1';
		    setcookie("LOGIN", $value);
		    header("Location: https://fabrice.uber.space/lebenslauf.php");
		}
		else{
		   echo "Login Daten Inkorrekt";
		}
	    }
	?>
    </div>
    <!-- Menü (Overlay) -->
    <div id="fullscreen-menu" class="fullscreen-menu">
        <button id="close-menu-btn" aria-label="Menü schließen">✖</button>
        <div class="menu-grid">
            <div class="tile" onclick="window.location.href='lebenslauf.php'">Lebenslauf</div>
            <div class="tile" onclick="window.location.href='projekte.html'">Projekte</div>
            <div class="tile" onclick="window.location.href='kontakt.php'">Kontakt</div>
        </div>
    </div>
</body>
</html>
