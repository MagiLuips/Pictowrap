<?php
    session_start();

    if(!isset($_SESSION["username"]) || $_SESSION["level"] != 1) {
        echo "<script>window.location = '../';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <!-- <script src="../scripts/color-modes.js"></script> -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Luis Saavedra" />
        <title>Add image · Pictowrap</title>

        <link href="../styles/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="../styles/add-image.css" rel="stylesheet" />
        <link href="../styles/global.css" rel="stylesheet" />
    </head>
    <body data-bs-theme="dark" class="d-flex align-items-center py-4">
        <main class="form-signin w-100 m-auto">
            <form name="signup" action="../php/add-image.php" method="post" enctype="multipart/form-data">
                <h1 class="rubik-title h3 mb-3 fw-normal">Add image</h1>
                <p class="mt-3">
                    Add a new image. Changed your mind? <a href="index.php">Go back</a>
                </p>
                <div class="form-default">
                    <label class="mb-1">Name</label>
                    <input
                        name="name"
                        class="form-control"
                        id="inputName"
                        placeholder=""
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Author</label
                    ><input
                        name="author"
                        class="form-control"
                        id="inputAuthor"
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Date</label>
                    <input
                        name="date"
                        type="date"
                        class="form-control"
                        id="inputDate"
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Image</label>
                    <input class="form-control" type="file" name="image" accept=".png" required/>
                </div>
                <button
                    name="add-image"
                    class="btn btn-primary w-100 py-2 mt-3"
                    type="submit"
                >
                    Add
                </button>
            </form>
            <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
        </main>
        <script src="../scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>
