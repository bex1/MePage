<?php
// Set up path and read directory
$path = dirname(__FILE__) . "/data/";
$files = readDirectory($path);
?>

<h1>Visa alla annonser</h1>

<table>
    <caption><em>Samtliga annonser i Blokket.</em></caption>

    <tr>
        <th>Filnamn:</th>
        <th>Text:</th>
    </tr>

    <?php foreach($files as $val): ?>

        <tr>
            <td class="centerText"><?php echo $val; ?></td>
            <td class="centerText"><?php echo getFileContents($path . $val); ?></td>
        </tr>

    <?php endforeach; ?>
</table>
