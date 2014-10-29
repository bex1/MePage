

<!doctype html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

    <!-- links to external stylesheets -->
    <?php if(isset($_SESSION['stylesheet'])): ?>
        <link rel="stylesheet" href="style/<?php echo $_SESSION['stylesheet']; ?>">
    <?php else: ?>
        <link rel="stylesheet" href="style/style.css" title="General stylesheet">
        <link rel="alternate stylesheet" href="style/debug.css" title="Debug stylesheet">
    <?php endif; ?>

	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/shortcut.ico">

    <?php
    error_reporting(-1);
    ?>

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
        <!-- login & logout menu -->
        <?php echo userLoginMenu(); ?>

        <!-- Relateted links -->
        <nav class="related">
            <a href="../knom01/me.php">kmom01</a>
            <a href="../knom02/me.php">kmom02</a>
            <a href="../knom03/me.php">kmom03</a>
            <a href="../knom04/me.php">kmom04</a>
            knom05
        </nav>
	</header>

	<div id="main">
		<div id="headerContainer">
			<!-- Header -->
            <header id="logo">
                <div id="logoCenter">
                    <a href="me.php"><img src="img/logo.png" alt="htmlphp logo"></a>
                </div>
            </header>
			<header id="menu">
				<!-- Main navigation menu -->
				<nav id="cssmenu">
                    <ul>
                        <li id="me-"><a href='me.php'><span>Om mig</span></a></li>
                        <li id="report-"><a href='report.php'><span>Redovisning</span></a></li>
                        <li id="source-"><a href='viewsource.php'><span>Källkod</span></a></li>
                        <li id="test-"><a href="test.php">Tester</a></li>
                        <li id="blokket-"><a href="blokket.php">Blokket</a></li>
                        <li id="style-" class='last'><a href="style.php">Style</a></li>
                    </ul>
				</nav>
			</header>
		</div>

