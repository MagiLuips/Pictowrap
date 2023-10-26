<?php
    session_start();

    if(!isset($_SESSION["username"]) || $_SESSION["level"] != 1 || !isset($_GET["id"])) {
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
            <form name="signup" action="../php/modify-image.php" method="post" enctype="multipart/form-data">
                <h1 class="rubik-title h3 mb-3 fw-normal">Modify image</h1>
                <?php
                    $id = $_GET["id"];

                    include "../php/connection.php";
                    $connection = connect();
                    $sql = "SELECT * FROM `images` WHERE `id` LIKE '$id';";
                    $result = mysqli_query($connection, $sql);
                    disconnect($connection);

                    $row = mysqli_fetch_array($result);

                    if(mysqli_num_rows($result) >= 1) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $author = $row["author"];
                        $date = $row["date"];
                        $path = $row["path"];
                    }
                ?>
                <p class="mt-3">
                    Modify an existing image. Changed your mind? <a href="index.php">Go back</a>
                </p>
                <div class="form-default">
                    <label class="mb-1">Name</label>
                    <input
                        value="<?php echo $name ?>"
                        name="name"
                        class="form-control"
                        id="inputName"
                        placeholder=""
                        required
                    ></input>
                </div>
                <div class="form-default">
                    <label class="mb-1">Author</label
                    ><input
                        value="<?php echo $author ?>"
                        name="author"
                        class="form-control"
                        id="inputAuthor"
                        required
                    />
                </div>
                <div class="form-default">
                    <label class="mb-1">Date</label>
                    <input
                        value="<?php echo $date ?>"
                        name="date"
                        type="date"
                        class="form-control"
                        id="inputDate"
                        required
                    />
                </div>
                <div class="mt-2"><img src="../<?php echo $path ?>" height=150 width=auto/></div>
                <div class="form-default">
                    <label class="mb-1">Image</label>
                    <input class="form-control" type="file" name="image" accept=".png"/>
                </div>
                <input name="id" value="<?php echo $id ?>" hidden/>
                <input name="path" value="<?php echo $path ?>" hidden/>
                <button
                    name="add-image"
                    class="btn btn-primary w-100 py-2 mt-3"
                    type="submit"
                >
                    Modify
                </button>
            </form>
            <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
        </main>
        <script src="../scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>
