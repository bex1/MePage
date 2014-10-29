<?php
include("incl/config.php");
$pageId = "blokket";

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"]))
{
    $p = $_GET["p"];
}


// Is the page known?
$path = "incl/blokket";
$file = null;
switch($p)
{
    case "init":
    {
        $title   = "Initiera annonserna";
        $file        = "init.php";
    }
        break;

    case "update":
    {
        $title   = "Visa och uppdatera annonser";
        $file        = "update.php";
    }
        break;

    case "create":
    {
        $title   = "Skapa ny annons";
        $file        = "create.php";
    }
        break;

    case "delete":
    {
        $title   = "Radera annons";
        $file        = "delete.php";
    }
        break;

    case "read":
    {
        $title   = "Visa annons";
        $file        = "read.php";
    }
        break;

    case "read-all":
    {
        $title   = "Visa alla annonser";
        $file        = "read_all.php";
    }
        break;

    default:
        {
        $title   = "Blokket, annonsplatsen";
        $file        = "default.php";
        }
}


?>


<?php include("incl/header.php"); ?>
<div id="content">
    <aside class="left" style="width:22%;">
        <?php include("$path/aside.php"); ?>
    </aside>
    <article class="right justify borderLeft" style="width:72%;">
        <?php include("$path/$file"); ?>
        <?php include("incl/byline.php"); ?>
        <hr>
    </article>
</div>
<?php include("incl/footer.php"); ?>
