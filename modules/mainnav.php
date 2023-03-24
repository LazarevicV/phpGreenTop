<?php

// echo $title;

?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="profil.php?username=<?=$_SESSION['username']?>">
            <?php
                if ($_SESSION['username']) {
                    echo $_SESSION['username'];
                }
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nova_stranica.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginPage.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logoutPage.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>