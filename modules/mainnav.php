<?php

echo $title;

?>
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php

                        if ($title == "Home page") {
                        echo "<a class=\"nav-link active\" href=\"index.php\">Home</a>";
                        } else {
                            echo "<a class=\"nav-link\" href=\"index.php\">Home</a>";
                        }
                    ?>
                </li>
                <li class="nav-item">
                    <?php

                        if ($title == "Nova stranica") {
                            echo "<a class=\"nav-link active\" href=\"nova_stranica.php\">Nova stranica</a>";
                        } else {
                            echo "<a class=\"nav-link\" href=\"nova_stranica.php\">Nova stranica</a>";
                        }
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>