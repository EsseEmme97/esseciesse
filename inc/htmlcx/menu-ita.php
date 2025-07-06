<?php

function setActiveLink($pages)
{
    $current_page = basename($_SERVER["SCRIPT_NAME"]);
    if (in_array($current_page, $pages)) {
        echo "attivo";
    }
}

?>

<nav class="navbar navbar-expand-lg static main-bg">
    <p>Navbar</p>
</nav>
