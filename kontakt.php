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

    <div class="container">
	<form action="kontakt.php" method="post">
	    <label for="fname">Vorname</label>
	    <input type="text" id="fname" name="firstname" placeholder="Ihr Vorname...">

	    <label for="lname">Nachnamee</label>
	    <input type="text" id="lname" name="lastname" placeholder="Ihr Nachname...">

	    <label for="mailaddress">Mail Adresse</label>
	    <input type="text" id="mailaddress" name="mailaddress" placeholder="Ihre Mailadresse...">

	    <label for="subject">Anliegen</label>
	    <textarea id="subject" name="subject" placeholder="Ihre Nachricht..." style="height:200px"></textarea>

	     <input type="submit" name="submit" value="Abschicken" id="contactbutton">
	</form>

	<?php
	    if(isset($_POST['submit'])){
	        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['mailaddress']) && !empty($_POST['subject'])){
		    $Betreff = "Nachricht von " . $_POST['firstname'] . " " . $_POST['lastname'] . " | " . $_POST['mailaddress'];
		    $Nachricht = $_POST['subject'];
		    mail('fabrice.hecht@t-online.de', $Betreff, $Nachricht);
		    echo "Die Nachricht wurde verschickt.";
	        }else{
		    echo "Alle Felder müssen ausgefült sein.";
	        }
	    }
	?>
    </div>



    <!-- Menü (Overlay) -->
    <div id="fullscreen-menu" class="fullscreen-menu">
        <button id="close-menu-btn" aria-label="Menü schließen">✖</button>
        <div class="menu-grid">
            <div class="tile" onclick="window.location.href='lebenslauf.html'">Lebenslauf</div>
            <div class="tile" onclick="window.location.href='projekte.html'">Projekte</div>
            <div class="tile" onclick="window.location.href='kontakt.html'">Kontakt</div>
        </div>
    </div>
</body>
</html>
