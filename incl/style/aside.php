<nav class="vmenu">
    <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
        <li><h2>Välj sidans style</h2>
        <li id="choose-stylesheet-"><a href="?p=choose-stylesheet">Välj stylesheet</a>
        <li id="edit-stylesheet-"><a href="?p=edit-stylesheet">Editera stylesheet</a>
    </ul>
</nav>