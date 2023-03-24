<?php
session_start();
include "modules/header.php";
include "modules/mainnav.php";


?>

<h1>Trenutno ulogovani korisnik: <?= $_SESSION['username'] ?></h1>

<?php

include "modules/footer.php";
