<?php
session_start();
$GLOBALS['title'] = "Profil stranica";
include "modules/header.php";
include "modules/mainnav.php";

$ucitani_username = $_GET['username'];

?>

<h1>Ovo je profil stranica korisnika: <?= $ucitani_username ?></h1>

<?php

include "modules/footer.php";
