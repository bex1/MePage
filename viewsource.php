<?php 
include("incl/config.php");

$title = "Min Me-sida om mig själv";
$pageId = "source";

// Include code from source.php to display sourcecode-viewer
$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
include("src/source.php");
$pageStyle=$sourceStyle;
?>


<?php include("incl/header.php"); ?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<div id="content">
	<?php include("incl/logoRight.php"); ?>
	<?php echo "$sourceBody"; ?>
	<hr>
</div>

<?php include("incl/footer.php"); ?>