    <?php require_once "includes/header.php"; ?>

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="pt-4 pb-1 px-5 position-absolute top-50 start-50 translate-middle rounded shadow login-form">

                    <h2 class="text-center mb-4">Login </h2>

                    <form action="login.php" method="post">
                        <div class="form-group mb-3">
                            <label for="name" class="textSize">Email Address</label>
                            <input type="email" class="form-control is-valid" name="email" placeholder="email" id="name" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pass">Passwrod</label>
                            <input type="password" placeholder="passwrod" class="form-control is-invalid" name="password" id="pass" autocomplete="off">
                        </div>
                        <div class="fotm-group d-flex align-items-center">
                            <span class="textSize">Remember me &nbsp;</span>
                            <input type="checkbox" name="remember">
                            <a href="#" class="textSize anchorColor ms-auto">Forget Password?</a>
                        </div>
                        <div class="d-flex flex-row justify-content-end">
                            <button type="submit" name="submit" class="btn btn-primary btn-sm mt-4 mb-4 textSize btn-login">Login</button>
                        </div>
                    </form>

                    <div class="text-center">
                        <p class="textSize">Don't have an account?&nbsp;<a href="signup.php" class="anchorColor">Create One</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "includes/footer.php"; ?>