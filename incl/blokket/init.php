<?php
//
// Set up the path and read the directory, store all files in array $files
//
$path = dirname(__FILE__) . "/data/";
$files = readDirectory($path);

?>

<h1>Initiera och kontrollera annonsdatabasen</h1>

<?php if(is_writable($path)): ?>
    <p class="success">Katalogen är skrivbar.</p>
<?php else: ?>
    <p class="alert">Katalogen är ej skrivbar. Skapa katalogen och gör den skrivbar.</p>
    <?php return; ?>
<?php endif; ?>

<p>Katalogen innehåller <?php echo sizeof($files); ?> annonser.</p>

<ul>
    <?php foreach($files as $val): ?>
    <li><?php echo $val; ?>
        <?php endforeach; ?>
</ul>
