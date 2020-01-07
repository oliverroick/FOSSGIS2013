<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Qualitätsbewertung von OpenStreetMap-Gebäudedaten – Am Beispiel der Stadtgebiete Köln und Gera – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_UKFLSU">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Qualitätsbewertung von OpenStreetMap-Gebäudedaten – Am Beispiel der Stadtgebiete Köln und Gera</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Leoni Möske</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 17:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

            
            <p>Das Volunteered Geographic Information-Projekt OpenStreetMap (OSM) stellt aktuelle, global und frei zur Verfügung stehende Geodatensätze bereit. Diese Datensätze werden für verschiedene Anwendungen verwendet und sind eine alternative Datenquelle zu amtlichen Daten oder Fernerkundungsdaten (wie Satellitenbilder). Ein großer Nachteil der OSM-Daten besteht in der heterogenen Datenqualität. Beispielsweise ist die Validität der OSM-Gebäudedaten für eine Verwendung in einer Expositionsabschätzung bei einem Hochwasser (= Abschätzung betroffener Gebäude und Personen) fragwürdig. Für diese Daten existiert keine stabile und standardisierte Qualitätsbewertungsmethode. Daher bedarf es eigener Qualitätsbewertungsmethoden.</p>
<p>Im Rahmen einer Masterarbeit wurde eine intrinsische und extrinsische Qualitätsbewertungsmethode für OSM-Gebäudedaten unter Verwendung in einer Expositionsabschätzung entwickelt und umgesetzt.  Zur Bewertung dienen intrinsische Indikatoren und extrinsische Maße, die für bestimmte Qualitätskriterien (Vollständigkeit, geometrische Genauigkeit ...) und die Beitragsaktivität erarbeitet und umgesetzt wurden. Hierzu kamen für die intrinsischen Indikatoren die OpenStreetMapHistoryDatabase (OSHDB)-API des Heidelberg Institute for Geoinformation Technology (HeiGIT) und für die extrinsischen Maße zur Aufbereitung/Import der Daten (osmosis, osm2pgsql und norGIS-ALKIS) sowie eine PostgreSQL/PostGIS-Datenbank zum Einsatz. Die Bewertungen der Gebäude-Daten erfolgte im Bereich der Überschwemmungsflächen für die Stadtgebiete Köln und Gera.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>