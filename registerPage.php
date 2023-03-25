<?php
    include "functions/functions.php";
    session_start();
    $GLOBALS['title'] = "Home page";
    include "modules/header.php";
    include "modules/mainnav.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['confirm_password'];
        $phone = $_REQUEST['phone'];
        $pol = $_REQUEST['pol'];

        $checkData = validateData($username, $password, $confirm_password, $email, $phone, $pol);

        if ($checkData) {
            echo $username . ' ' . $email . ' ' . $password . ' ' . $confirm_password . ' ' . $phone . ' ' . $pol;

            $sql = "INSERT INTO users (username, password, email, phone, pol) VALUES ('$username', '$password', '$email', '$phone', '$pol')";
            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
        }
        else {
            echo '<div class="invalid-feedback">Niste lepo uneli podatke</div>';
        }

    }

?>

    <style>
        .greska {
            color: red;
            margin-left: 10vh;
        }
    </style>

<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form class="mx-1 mx-md-4" action="registerPage.php" method="POST">
                                    <?php
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                            if (!isset($username) or !isset($password) or !isset($confirm_password) or !isset($email) or !isset($phone) or !isset($pol)) {
                                                echo '<span class="greska">Morate popuniti sve podatke!</span>';
                                            }
                                    }
                                    ?>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="username" class="form-control" name="username" />
                                            <label class="form-label" for="username">Your username</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="email" name="email" class="form-control" />
                                            <label class="form-label" for="email">Your email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="password" name="password" class="form-control" />
                                            <label class="form-label" for="password">Password</label>
                                            <?php
                                                if ($_REQUEST['password'] != $_REQUEST['confirm_password']) {
                                                    echo "<div class=\"invalid-feedback\">
                                                          Please provide a valid city.
                                                        </div>";
                                                }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" />
                                            <label class="form-label" for="confirm_password">Repeat your password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="phone" name="phone" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                                            <label class="form-label" for="phone">Your phone number</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-venus-mars fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="radio" name="pol" value="muski" id="muski" class="m-4">Muski
                                            <input type="radio" name="pol" value="zenski" id="zenski" class="m-4">Zenski
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" value="Register" class="btn btn-primary btn-lg"></input>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "modules/footer.php"; ?>