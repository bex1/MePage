<?php include("incl/config.php"); 

$title = "Mina redovisningar av kursmomenten";
$pageId = "report";

include("incl/header.php"); ?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<div id="content">

	<?php include("incl/logoRight.php"); ?>
	
	<article class="justify border" style="width:80%">
		<h1>Redovisning av kursmomenten</h1>
		<h3>Redovisning av knom01</h3>
		<p>Momentet var enkelt och tydligt och det var inga problem att följa instruktionerna.
			Det var en del att läsa och installera innan man kunde börja med själva momentet, men
			när man väl konfigurerat sin utvecklingsmiljö och läst kursmaterialet så flöt arbetet på snabbt.
		<p>Jag sitter på Windows 8.1 och använder normalt Google Chrome som webbläsare.
		<p>När det gäller utvecklingsmiljön så använder jag WAMPserver och Sublime Text 3 som editor.
			För MySQL så kör jag MySQL workbench. SFTP-klienten är FileZilla som rekommenderat.</p>

		<hr>
		<h3>Redovisning av knom02</h3>
		<p>Momentet funkade bra. Men jag hade vissa problem med att få till en sticky footer. Efter lite
			googling så löste det sig dock snabbt. 
		<p>Bortsett från att ha pillat lite med HTML och CSS i mina
			unga år så är jag ganska ny i ämnet, dock så är jag betydligt mer erfaren i traditionell programmering, 
			vilket underlättar en del.
		<p> Guiderna var vettiga och lätta att förstå. Jag skulle dock vilja se att man kunde lyfta fram i vilken ordning
			man ska styla sin sida. Dvs börja med sidans struktur och gå mot finare detaljer efter hand etc, eller vad som nu
			anses lämpligt. 
		<p>Strukturen av filer och kataloger känns bra vid sidans nuvarande storlek.</p>

		<?php include("incl/byline.php"); ?>

		<hr>
	</article>
</div>

<?php include("incl/footer.php"); ?>