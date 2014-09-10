

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="style/style.css" title="General stylesheet">
	<link rel="alternate stylesheet" href="style/debug.css" title="Debug stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/shortcut.ico">

	<!-- Each page can set $pageStyle to create additional style -->
	<?php if(isset($pageStyle)) : ?>
	<style type="text/css">
	<?php echo $pageStyle; ?>
	</style>
<?php endif; ?>

	<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
<div id="wrap">
	<header id="above">
		<!-- Relateted links -->
		<nav class="related">
			<a href="../knom01/me.php">kmom01</a>
			kmom02
		</nav>
	</header>

	<div id="main">
		<div id="headerContainer">
			<!-- Header -->
			<header id="top">

				<!-- Main navigation menu -->
				<nav class="navmenu">
					<a id="me-"     href="me.php">Om mig</a>
					<a id="report-" href="report.php">Redovisning</a>
					<a id="source-" href="viewsource.php">Källkod</a>
				</nav>
			</header>
		</div>

