<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <!-- <script src="../scripts/color-modes.js"></script> -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Luis Saavedra" />
        <title>Sign up · Pictowrap</title>

        <link href="public/styles/bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link href="public/styles/signup.css" rel="stylesheet" />
        <link href="public/styles/global.css" rel="stylesheet" />
    </head>
    <body data-bs-theme="dark" class="d-flex align-items-center py-4">
        <main class="form-signin w-100 m-auto">
            <form name="signup" action="#" method="post">
                <img
                    class="mb-4"
                    src="public/images/logo-dark.png"
                    alt=""
                    width="72"
                    height="auto"
                />
                <h1 class="h3 mb-3 fw-normal">Sign up</h1>
                <?php
                    if(isset($_GET["passkey_confirm_failed"])) {
                        echo '<p class="text-danger">Passkeys don\'t match</p>';
                    } else if(isset($_GET["user_used"])) {
                        echo '<p class="text-danger">The username is already taken.</p>';
                    }
                ?>
                <div class="form-default">
                    <label class="mb-1">Username</label>
                    <input
                        name="username"
                        class="form-control"
                        id="inputUsername"
                        placeholder="e. 'Luis'"
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Passkey</label
                    ><input
                        name="passkey"
                        type="password"
                        class="form-control"
                        id="inputPasskey"
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Confirm passkey</label>
                    <input
                        name="confirm-passkey"
                        type="password"
                        class="form-control"
                        id="inputConfirmPasskey"
                        required
                    />
                </div>
                <button
                    name="signup"
                    class="btn btn-primary w-100 py-2 mt-3"
                    type="submit"
                >
                    Sign up
                </button>
            </form>
            <p class="mt-3">
                Already have an account? <a href="signin">Sign in</a>
            </p>
            <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
        </main>
        <script src="public/scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>
