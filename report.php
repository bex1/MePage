<?php include("incl/config.php"); 

$title = "Mina redovisningar av kursmomenten";
$pageId = "report";

include("incl/header.php"); ?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<div id="content">
	
	<article class="justify borderRight width80">
		<h1>Redovisning av kursmomenten</h1>
		<h3>Redovisning av kmom01</h3>
		<p>Momentet var enkelt och tydligt och det var inga problem att följa instruktionerna.
			Det var en del att läsa och installera innan man kunde börja med själva momentet, men
			när man väl konfigurerat sin utvecklingsmiljö och läst kursmaterialet så flöt arbetet på snabbt.
		<p>Jag sitter på Windows 8.1 och använder normalt Google Chrome som webbläsare.
		<p>När det gäller utvecklingsmiljön så använder jag WAMPserver och Sublime Text 3 som editor.
			För MySQL så kör jag MySQL workbench. SFTP-klienten är FileZilla som rekommenderat.

		<hr>
		<h3>Redovisning av kmom02</h3>

        <h4>Reflektera över svårigheter/problem/lösningar/resultatet, etc.</h4>
        <p>Momentet funkade bra. Men jag hade vissa problem med att få till en sticky footer. Efter lite
			googling så löste det sig dock snabbt. Lösningen gick ut på att wrappa upp headers och content i en div,
            och sedan lägga footern för sig själv. Därmed så satte man sedan en min-height på wrappern på 100% och kunde
            sedan kompensera för footerns höjd. Detta genom att ha en padding på main div som motsvarar footerns höjd och
            ha en relativt positionerad footer med negativ margin-top motsvarande footerns höjd. Jag är glad att jag lyckades
            lösa detta till slut.
        <h4>Beskriv hur väl du kan HTML/CSS (nybörjare, erfaren).</h4>
		<p>Bortsett från att ha pillat lite med HTML och CSS i mina
			unga år så är jag ganska ny i ämnet, dock så är jag betydligt mer erfaren i traditionell programmering, 
			vilket underlättar en del. Genom att vara likt android xml så känns syntaxen lätt att ta till sig. Jag tycker
            dock att det finns för mycket oenigheter i hur webbläsarna tolkar/stödjer html och css, vilket gör utvecklingen
            mer oförutsägbar och långsam.
        <h4>Vad anser du om guiderna html20 och css20?</h4>
		<p> Guiderna var vettiga och lätta att förstå. Jag skulle dock vilja se att man kunde lyfta fram i vilken ordning
			man ska styla sin sida. Dvs börja med sidans struktur och gå mot finare detaljer efter hand etc, eller vad som nu
			anses lämpligt. Det hade också varit intressant att se lite integrering av css mallar, som bootstrap etc då dessa
            används i ganska stor utsträckning idag, eller varför inte lära sig lite dreamweaver, men det kanske kommer senare.
        <h4>Me-sidan börjar bli en liten webbplats, vad tycker du om dess struktur av filer och kataloger, känns det okey eller ovant?</h4>
		<p>Strukturen av filer och kataloger känns bra vid sidans nuvarande storlek. Dock så borde sidorna också kategoriseras
            om sidan växer, vilket man kanske borde förbereda direkt så man slipper ändra filreferenser i massa filer.
        <h4>Övrigt</h4>
        <p>Insisterandet av användande av firebug förstår jag mig inte på då chrome har dessa funktioner integrerade. Vad
        är firebugs fördelar egentligen? Det finns en del gammalt material i kurslitteraturen om CSS som är skriven innan CSS3 var
        färdigutvecklat och släppt. Vilket får en att undra om man missar några viktiga funktioner hos CSS3 under pluggandet. Jag tycker det
        var väldigt intressant att lära sig mer om CSS, som faktiskt används i en del andra icke webbrelaterade UI-applikationer. Det är
        intressant hur man i likhet med objektorientering löst koddupliceringsproblem med hjälp av arv.</p>

        <hr>
        <h3>Redovisning av kmom03</h3>

        <h4>Reflektera över svårigheter/problem/lösningar/resultatet, etc. </h4>
        <p> Det blev väl en hel del copy-paste av mos kod, så jag stötte knappt då några problem eller svårigheter.
            Det viktiga var ändå att få en vidare bild över phps bibliotek och dess funktionelitet,
            vilket man fick genom de många exemplen. Det var intressant att se hur sessioner upprätthålls och hanteras, även om säkerheten i
            lösningarna var sådär. Det skulle vara intressant att få lite mer säkerhetskunskap om sessioner i php.

        <h4>Beskriv hur väl du kan PHP (nybörjare, erfaren).</h4>
        <p> Inom php så måste jag säga att jag är nybörjare då jag inte känner till biblioteket tillräckligt för att kalla mig något
            annat. Dock så är jag erfaren inom programmering så tänket är inga problem.

        <h4>Känner du igen dig i PHP-koden?</h4>
        <p> Jag känner inte direkt igen mig då jag inte nyttjat phps bibliotek speciellt mycket förut. Dock så är syntaxen inga problem,
            men jag fick läsa på om funktionerna som användes. Dokumentationen är tydlig med bra exempel så det är lätt att ta till sig
            funktionernas funktionalitet. Det är få språk som har sådan tydlig dokumentation, vilket är en stor fördel.

        <h4>Har du programmerat tidigare, i vilka språk?</h4>
        <p> Jag är kunnig inom språk som java, c++, c, c#, python, SQL, ruby on rails, Objective-C, perl osv,
            och jobbar även deltid som konsult som programmerare.

        <h4>Vad tycker du om PHP så här långt in i kursen?</h4>
        <p> Att php är löst typat har sina fördelar och sina nackdelar. En av fördelarna är väl att det är lätt att lära sig
            då man inte behöver någon kunskap om de underliggande datatyperna. Dock eftersom, typerna är mindre tydliga så
            kan det vara svårt att tolka andras kod när typerna är svåra att härleda. För att minska dessa problem så bör man
            se till att döpa variablerna på ett sådant sätt att bakomliggande typen tydligt framgår, och ibland även lägga
            till kommentarer för att extra förtydliga typer. Svagare typsäkerhet leder också till större andel run-time errors
            vilket gör det svårt för IDE:s för php att hitta fel och poängtera dessa.
        <p> Php har andra mer positiva aspekter dock. Det är Open Source och utvecklas av en bred community, (vilket kan vara en
            nackdel ur säkerhetssynpunkt dock). Det är ganska likt C i syntaxen, (förutom t.ex. alla dessa onödiga $ taggar vid variabler).
            Php har också ett väldigt brett bibliotek med stödfunktioner, vilket gör utvecklandet enkelt, ty man behöver sällan uppfinna
            hjulet på nytt så att säga. Php är också väldigt bra på att hantera databaser av en mängd olika typer. Vi har ju inte kommit så
            långt inom php i kursen än, men jag ser fram emot att lära mig mer.
        <p> <a href="http://users.encs.concordia.ca/~paquet/wiki/index.php?title=Programming_languages_performance_ranking">Php är dock tyvärr ett ganska långsamt språk.</a>


        <h4>Fick du hjälp av guiden php20?</h4>
        <p> Ja jag fick lite hjälp angående syntaxen. Men programmeringstekniken var inte något nytt direkt.
            Det mesta var standardstruktuerer inom programmering som hanterade flow-control etc.

        <h4>Övrigt</h4>
        <p> Momentet flöt på utan några större problem. Jag höll det enkelt och försökte inte krångla till lösningarna med egna
            funktioner och egen optimering. Nu kan jag lättare på egen hand utforska funktionaliteten i phps stora bibliotek.
        <p>För inloggning så är username och password: bex

        <hr>
        <h3>Redovisning av kmom04</h3>

        <h4>Reflektera över svårigheter/problem/lösningar/resultatet, etc.</h4>
        <p> Momentet rullade på ganska fort då jag känner mig hyffsat bekväm med CSS. Det var intressant att få mer information
            av hur sessioner kan användas för att dynamiskt ändra sidan. Jag stötte inte på några problem alls denna gång.

        <h4>Börjar du känna att du bemästrar CSS? Beskriv hur väl du kan CSS (nybörjare, erfaren).</h4>
        <p> Jag kan väll inte påstå att jag fullt ut bemästrar CSS, men jag får mindre och mindre problem stylingen. Dvs
            jag lyckas oftast att få stylen att se ut som jag tänkt mig. Jag är ett mellanting mellan nybörjare och erfaren
            när det gäller CSS. Ibland tvingas jag googla etc för att hitta en stylistisk lösning på mitt problem. Men så
            brukar arbetssättet se ut mer eller mindre oavsett erfarenhet antar jag.

        <h4>Vad tycker du om CSS så här långt in i kursen?</h4>
        <p> Jag tycker CSS är mycket vasst när det gäller stor effekt av små ändringar. Det krävs liksom oftast väldigt lite för
            att man ska kunna testa en ny idé i sin stylesheet. Dessutom så uppskatter jag den relativt lösa kopplingen man får
            till webbsidan och att man på så sätt dynamiskt kan ändra sin style av sidan. I många xml baserade style varianter jag
            jobbar med till vardags så är element och style mycket tightare kopplade. Detta medför komplicerade och tidskrävande
            ändringar då man vill testa något nytt.

        <h4>Lyckades du med din style-väljare?</h4>
        <p> Jag la inte så mycket tid på att ändra den processbaserade lösning som mos skapat. Den kändes vettig och jag följde
            med i koden utan några problem. Jag hade något liknande i skallen då jag problemet introducerades.

        <h4>Hur tänkte du när du gjorde din extra stylesheet och vad blev resultatet?</h4>
        <p> Eftersom jag redan byggt upp en egen ganska omfattande stylesheet redan så var jag mest sugen på att leka lite med
            färgsättningen. Min flickvän var självklart i rummet då så det blev såklart en rosa variant..... :P

        <h4>Hur går det med ditt PHP:ande?</h4>
        <p> Det går bara fint, programmering är inte nåt nytt för mig. Jag gillar dock inte syntaxen, men det är väll en vanesak.

		<?php include("incl/byline.php"); ?>

		<hr>
	</article>
</div>

<?php include("incl/footer.php"); ?>