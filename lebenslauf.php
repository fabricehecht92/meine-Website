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
    <div class="welcome">
        <div class="search-container" style="display: none;">
            <input type="text" id="search" placeholder="Suche...">
            <div id="suggestions" class="suggestions"></div>
        </div>
    </div>
<!-- Inhaltsbereich -->
    <div class="content">
        <div class="cv-container">
            <!-- Platz für das Foto -->
            <div class="photo-section">
                <img src="assets/images/profile.jpg" alt="Fabrice Hecht Foto" class="profile-photo">
            </div>

            <!-- Tabelle Persönliches -->
            <div class="vita-section">
                <table class="vita-table">
                    <thead>
                        <tr>
                            <th>Persönliche Daten</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>Fabrice Hecht</td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td><?php if(!isset($_COOKIE['LOGIN'])){?>Zur Ansicht <a href="login.php">anmelden!</a><?php }else{ echo "ADRESSE"; }?></td>
                        </tr>
                        <tr>
                            <td>Mail</td>
                            <td>fabrice.hecht [at] t-online.de</td>
                        </tr>
			<tr>
			    <td>Telefon</<td>
			    <td><?php if(!isset($_COOKIE['LOGIN'])){?>Zur Ansicht <a href="login.php">anmelden!</a><?php }else{ echo "TELEFONNUMMER"; }?></td>
			</tr>

                    </tbody>
		    <thead>
			<tr>
			    <th>Werdegang</th>
			    <th>&nbsp;</th>
			</tr>
		    </thead>
		    <tbody>
			<tr>
			    <td>2010</td>
			    <td>Erweiterter Realschulabschluss, Sekundarschule A. Schweizer</td>
			</tr>
			<tr>
			    <td>2011 - 2014</td>
			    <td>Diverse Jobs und Praktika</td>
			</tr>
			
			<tr>
			    <td>2014 - 2016</td>
			    <td>Ausbildung kaufmännischer Assistent für Informationsverarbeitung, Institut Braune Bernburg</td>
			</tr>
			<tr>
			    <td>2016</td>
			    <td>Beginn des Studiums Angewandte Informatik, University of applied science Merseburg</td>
			</tr>
			<tr>
			    <td>2018 - 2020</td>
			    <td>Secondlevel Support in den Bereichen Hardware, Software und Netzwerke, Dell</td>
			</tr>
			<tr>
			    <td>2021 - 2022</td>
			    <td>Full Stack Entwickler und Projektleitung, Smart Green City Haßfurt</td>
			</tr>
			<tr>
			    <td>2022 - Heute</td>
			    <td>Secondlevel Support im Bereich Documentum, VWGis</td>
			</tr>
		    </tbody>
		    <thead>
			<tr>
			    <th>Fähigkeiten</th>
			    <th>&nbsp;</th>
			</tr>
		    </thead>
		    <tbody>
			<tr>
			    <td>Sprachen</td>
			    <td>Deutsch, Englisch</td>
			</tr>
			<tr>
			    <td>Software-Entwicklung</td>
			    <td>C, C++, C#, Javascript, php, python</td>
			</tr>
			<tr>
			    <td>Datenbanken</td>
			    <td>Orcale, MySql, Postgres, grundlegendes Wissen über nosql Datenbanken</td>
			</tr>
			<tr>
			    <td>Netzwerk & Administration</td>
			    <td>Sicherer Umgang mit Linux und BSD, Comptia Linux+ 103, Webserver Erfahrung vor allem mit Apache, in meinem jetzigen Job arbeite ich mit einer komplexen Serverinfrastruktur, auf der Software läuft, die von mehreren Tausend Mitarbeiter*innen genutzt wird
			</tr>
			<tr>
			    <td>Menschliche Skills</td>
			    <td>Freundlich und höflich, Lösungsorientiert, Auch im Streit um Diplomatie bemüht, Kollegial, Erfahren im Lösen von Konflikten, Ich habe keine Angst davor für Lösungen mehr zu leisten als mein Aufgabenbereich verlangt</td>
			</tr>
		    </tbody>
                </table>
            </div>
        </div>


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
