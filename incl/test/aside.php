<nav class="vmenu">
    <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
        <li><h2>Tester</h2>
        <li id="default"><a href="test.php">Startsida för tester</a>
        <li id="get"><a href="?p=kmom03-get">Visa <code>$_GET</code></a>
        <li id="getform"><a href="?p=kmom03-getform">Form med get</a>
        <li id="postform"><a href="?p=kmom03-postform">Form med post</a>
        <li id="validate"><a href="?p=kmom03-validate">Validera inkommande</a>
        <li id="server"><a href="?p=kmom03-server">Visa <code>$_SERVER</code></a>
        <li id="sessiondestroy"><a href="?p=kmom03-sessiondestroy">Förstör sessionen</a>
        <li id="session"><a href="?p=kmom03-session">Visa <code>$_SESSION</code></a>
        <li id="sessionchange"><a href="?p=kmom03-sessionchange">Ändra sessionen</a>
    </ul>

</nav>