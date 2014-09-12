<?php include("incl/config.php");

$title = "Tester";
$pageId = "test";

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"]))
{
    $p = $_GET["p"];
}

// Is the page known?
$path = "incl/test";
$file = null;
if($p == "kmom02-pagestyle")
{
    $title   = "Tester kmom02: Visa olika styles med \$pageStyle";
    $file        = "kmom02_pagestyle.php";
}
else if ($p == "kmom03-get")
{
    $title   = "Tester kmom03: Visa \$_GET";
    $file        = "kmom03_get.php";
}
else if ($p == "kmom03-getform")
{
    $title   = "Tester kmom03: Form med get";
    $file        = "kmom03_getform.php";
}
else if ($p == "kmom03-postform")
{
    $title   = "Tester kmom03: Form med post";
    $file        = "kmom03_postform.php";
}
else if ($p == "kmom03-validate")
{
    $title   = "Tester kmom03: Validera inkommande";
    $file        = "kmom03_validate.php";
}
else if ($p == "kmom03-server")
{
    $title   = "Tester kmom03: Visa \$_SERVER";
    $file        = "kmom03_server.php";
}
else if ($p == "kmom03-sessiondestroy")
{
    $title   = "Tester kmom03: Förstör sessionen";
    $file        = "kmom03_sessiondestroy.php";
    destroySession();
}
else if ($p == "kmom03-session")
{
    $title   = "Tester kmom03: Visa \$_SESSION";
    $file        = "kmom03_session.php";
}
else if ($p == "kmom03-sessionchange")
{
    $title   = "Tester kmom03: Ändra värden i sessionen";
    $file        = "kmom03_sessionchange.php";
}
else if ($p == "kmom03-sessioninfo")
{
    $title   = "Tester kmom03: Information om sessionen";
    $file        = "kmom03_sessioninfo.php";
}
else
{
    $title   = "Tester";
    $file        = "default.php";
}


?>



<?php include("incl/header.php"); ?>

    <!-- Sidans/Dokumentets huvudsakliga innehåll -->

    <div id="content">

        <aside class="left" style="width:22%;">
            <?php include("$path/aside.php"); ?>
        </aside>

        <article class="right justify borderLeft" style="width: 72%">
            <?php include("$path/$file"); ?>
            <?php include("incl/byline.php"); ?>
            <hr>
        </article>
    </div>

<?php include("incl/footer.php"); ?>