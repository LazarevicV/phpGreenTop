
<?php

    include "modules/header.php";
    include "modules/mainnav.php";

?>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if ($username == 'vlazarevic' and $password == '1234') {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: profil.php?username={$_SESSION['username']}");
    }
}

?>

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="images/logo.png"
                                         style="width: 185px;" alt="logo">
<!--                                    <h1>--><?php //= $username . ' ' . $password ?><!--</h1>-->
                                    <h4 class="mt-1 mb-5 pb-1">We are team GreenTop!</h4>
                                </div>

                                <form action="loginPage.php" method="POST">
                                    <p>Please login to your account</p>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="username" class="form-control"
                                               placeholder="dacha02" name="username"/>
                                        <label class="form-label" for="username">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control" name="password" />
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <input type="submit" value="Login" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                                        <a class="text-muted" href="#!">Forgot password?</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <button type="button" class="btn btn-outline-danger">Create new</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a company</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "modules/footer.php" ?>
