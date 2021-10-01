<?php require_once "includes/header.php"; ?>

<section class="signup">
    <div class="container">
        <div class="row">
            <div class="pt-4 pb-1 px-5 position-absolute top-50 start-50 translate-middle rounded shadow signup-form">

                <h2 class="text-center mb-4">Sign Up</h2>

                <form action="signup.php" method="post">
                    <div class="form-group mb-3">
                        <label for="name" class="textSize">Email Address</label>
                        <input type="email" class="form-control is-valid" name="email" placeholder="email" id="name" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="pass">Passwrod</label>
                        <input type="password" placeholder="passwrod" class="form-control is-invalid" name="password" id="pass" autocomplete="off">
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm mt-4 mb-4 textSize btn-submit">Signup</button>
                    </div>
                </form>

                <div class="text-center">
                    <p class="textSize">Already account?&nbsp;<a href="login.php" class="anchorColor">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "includes/footer.php"; ?>