<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <!-- <script src="../scripts/color-modes.js"></script> -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Luis Saavedra" />
        <title>Add · Pictowrap</title>

        <link href="../public/styles/bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link href="../public/styles/signup.css" rel="stylesheet" />
        <link href="../public/styles/global.css" rel="stylesheet" />
    </head> 
    <body data-bs-theme="dark" class="d-flex align-items-center py-4">
        <main class="form-signin w-100 m-auto">
            <form name="useradd" action="adduser" method="post">
                <img
                    class="mb-4"
                    src="public/images/logo-dark.png"
                    alt=""
                    width="72"
                    height="auto"
                />
                <h1 class="h3 mb-3 fw-normal">ADD New User</h1>
                <?php
                    if(isset($_GET["passkey_confirm_failed"])) {
                        echo '<p class="text-danger">Passkeys don\'t match</p>';
                    } else if(isset($_GET["user_used"])) {
                        echo '<p class="text-danger">The username is already taken.</p>';
                    }
                ?>
                <div class="form-default">    
                    <label class="mb-1">Username:</label>
                    <input
                        name="username"
                        class="form-control"
                        id="username"
                        placeholder="Username"
                        required
                    />
                </div>
                <div class="form-default">    
                    <label class="mb-1">Name:</label>
                    <input
                        name="name"
                        class="form-control"
                        id="name"
                        placeholder="Name"
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Password:</label
                    ><input
                        name="password"
                        class="form-control"
                        id="password"
                        type="password"
                        placeholder="Password"
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Role:</label>
                    <input
                        name="role"
                        class="form-control"
                        id="role"
                        placeholder="Role"
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Photo:</label>
                    <input
                        name="photo"
                        class="form-control"
                        id="photo"
                        placeholder="Photo"
                        required
                    />
                </div>
                <button
                    name="useradd"
                    class="btn btn-primary w-100 py-2 mt-3"
                    type="submit"
                >
                    ADD user
                </button>
            </form>
            <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
        </main>
        <script src="public/scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>