<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <!-- <script src="../scripts/color-modes.js"></script> -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Luis Saavedra" />
        <title>Sign in · Pictowrap</title>

        <link href="public/styles/bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link href="public/styles/signin.css" rel="stylesheet" />
        <link href="public/styles/global.css" rel="stylesheet" />
    </head>
    <body data-bs-theme="dark" class="d-flex align-items-center py-4">
        <main class="form-signin w-100 m-auto">
            <form name="signin" action="#" method="post">
                <img
                    class="mb-4"
                    src="public/images/logo-dark.png"
                    alt=""
                    width="72"
                    height="auto"
                />
                <h1 class="h3 mb-3 fw-normal">Sign in</h1>
                <?php
                    if(isset($_GET["signup_success"])) {
                        echo '<p class="text-success">Sign up successful!</p>';
                    } else if(isset($_GET["signup_failed"])) {
                        echo '<p class="text-danger">Sign up failed. Please try again later</p>';
                    }
                ?>
                <div class="form-floating">
                    <input
                        name="username"
                        class="form-control"
                        id="floatingUsername"
                        placeholder="Luis"
                        required
                    /><label for="floatingUsername">Username</label>
                </div>
                <div class="form-floating">
                    <input
                        name="passkey"
                        type="password"
                        class="form-control"
                        id="floatingPasskey"
                        placeholder="Password"
                        required
                    /><label for="floatingPasskey">Passkey</label>
                </div>
                <div class="form-check text-start my-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value="remember-me"
                        id="flexCheckDefault"
                    />
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <button
                    name="signin"
                    class="btn btn-primary w-100 py-2"
                    type="submit"
                >
                    Sign in
                </button>
            </form>
            <p class="mt-3">
                Don't have an account yet? <a href="signup">Sign up</a>
            </p>
            <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
        </main>
        <script src="public/scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>
