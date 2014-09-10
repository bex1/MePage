<?php include("incl/config.php"); 

$title = "Min Me-sida om mig själv";
$pageId = "me";
// Define style thats specific for this page
$pageStyle = '
figure { 
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 border-radius: 10px;
 border-color:#5C0A0A;
 -moz-box-shadow: 10px 10px 5px #8A0F0F;
 -webkit-box-shadow: 10px 10px 5px #8A0F0F;
 box-shadow: 10px 10px 5px #8A0F0F;
}
';
?>



<?php include("incl/header.php"); ?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->
	<div id="content">

		<?php include("incl/logoRight.php"); ?>

		<article class="border" style="width:80%">
			<h1 class="centerText">Om mig själv</h1>

			<figure id="centerImg">
				<img src="img/about.jpg" alt="Segling i medelhavet" width="700px">
				<figcaption>
					<p>Segling är livet.</p>
				</figcaption>
			</figure>

			<p>Jag heter Daniel Bäckström och går under smeknamnet BEX.
			<p>Jag studerar vid Chalmers till civilingenjör inom IT och läser lite extrakurser vid sidan av,
					detta för att få en bredare kompetens. 
			<p>Jag bor tillsammans med min flickvän och min hund i en 3:a i Göteborg.
			<p>Vanligen så utvecklar jag appar för android och IOS, men även spel i Unity 3D och UDK med tillhörande
					3D-modellering i 3DS-Max och Maya. 
			<p>Jag är kunnig inom språk som java, c++, c, c#, python, SQL, 
					ruby on rails, Objective-C, perl osv, och jobbar även deltid som konsult.</p>

			<p>/Bex</p>

			<?php include("incl/byline.php"); ?>

			<hr>
		</article>
	</div>

<?php include("incl/footer.php"); ?>