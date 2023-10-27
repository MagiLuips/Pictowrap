<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <!-- <script src="public/scripts/color-modes.js"></script> -->

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta
            name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
        />
        <meta name="generator" content="Hugo 0.115.4" />
        <title>Administration · Pictowrap</title>

        <link
            rel="canonical"
            href="https://getbootstrap.com/docs/5.3/examples/sidebars/"
        />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
        />

        <link href="public/styles/bootstrap/bootstrap.min.css" rel="stylesheet" />

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                width: 100%;
                height: 3rem;
                background-color: rgba(0, 0, 0, 0.1);
                border: solid rgba(0, 0, 0, 0.15);
                border-width: 1px 0;
                box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                    inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -0.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }

            .btn-bd-primary {
                --bd-violet-bg: #712cf9;
                --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-violet-bg);
                --bs-btn-border-color: var(--bd-violet-bg);
                --bs-btn-hover-color: var(--bs-white);
                --bs-btn-hover-bg: #6528e0;
                --bs-btn-hover-border-color: #6528e0;
                --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #5a23c8;
                --bs-btn-active-border-color: #5a23c8;
            }
            .bd-mode-toggle {
                z-index: 1500;
            }
        </style>

        <!-- Custom styles for this template -->
        <link href="public/styles/sidebars.css" rel="stylesheet" />
        <link href="public/styles/global.css" rel="stylesheet" />
        <link href="public/styles/admin.css" rel="stylesheet" />
    </head>
    <body data-bs-theme="dark">
        <main class="d-flex flex-nowrap">
            <div class="flex-shrink-0 p-3" style="width: 280px">
                <a
                    href="/"
                    class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom"
                >
                    <!--
                    <svg class="bi pe-none me-2" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    -->
                    <img
                        src="public/images/logo-dark.png"
                        width="30"
                        height="auto"
                    />
                    <span class="rubik-title fs-5 fw-semibold"
                        >&nbsp;&nbsp;Administration</span
                    >
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button
                            class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#home-collapse"
                            aria-expanded="true"
                        >
                            Home
                        </button>
                        <div class="collapse show" id="home-collapse">
                            <ul
                                class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Overview</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Updates</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Reports</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button
                            class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#dashboard-collapse"
                            aria-expanded="false"
                        >
                            Dashboard
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul
                                class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Overview</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Weekly</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Monthly</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Annually</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button
                            class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#orders-collapse"
                            aria-expanded="false"
                        >
                            Orders
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul
                                class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >New</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Processed</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Shipped</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Returned</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button
                            class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#account-collapse"
                            aria-expanded="false"
                        >
                            Account
                        </button>
                        <div class="collapse show" id="account-collapse">
                            <ul
                                class="btn-toggle-nav list-unstyled fw-normal pb-1 small"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >New...</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Profile</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Settings</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="signout"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded"
                                        >Sign out</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="b-example-divider b-example-vr"></div>
            <div style="display: flex; flex-direction: column; overflow-y: auto; width: 100%;">
            <div style="margin: 1em ">
                <h1 class="rubik-title h3 mb-3 fw-normal">Image repository</h1>
                <p>Modify the images stored in the database.</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Date</th>
                            <th scope="col">Path</th>
                            <th scope="col" colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "public/php/connection.php";
                            $connection = connect();
                            $sql = "SELECT * FROM `images`;";
                            $result = mysqli_query($connection, $sql);
                            disconnect($connection);

                            $counter = 1;

                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr><th scope="row">'.$counter.'</th>';
                                echo '<td>'.$row["name"].'</td>';
                                echo '<td>'.$row["author"].'</td>';
                                echo '<td>'.$row["date"].'</td>';
                                echo '<td>'.$row["path"].'</td>';
                                echo '<td><a class="blue-button" href="../'.$row["path"].'">View</a></td>';
                                echo '<td><a class="blue-button" href="/Pictowrap/adminactualizar/actualizar/'.$row["id"].'">Update</a></td>';
                                echo "<td><a onClick='confirmRemoval2(".$row["id"].")' class='blue-button'>Delete</a></td></tr>";

                                $counter++;
                            }
                        ?>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="3"><a class="blue-button" href="/Pictowrap/adminagregar/add">Add new</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--User-->
            <div style="margin: 1em">
                <h1 class="rubik-title h3 mb-3 fw-normal">User repository</h1>
                <p>Modify the users stored in the database.</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Photo</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $connection = connect();
                            $sql = "SELECT * FROM `users`;";
                            $result = mysqli_query($connection, $sql);
                            disconnect($connection); 

                            $counter = 1;

                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr><th scope="row">'.$row["id"].'</th>';
                                echo '<td>'.$row["username"].'</td>';
                                echo '<td>'.$row["name"].'</td>';
                                echo '<td>'.$row["role"].'</td>';
                                echo '<td>'.$row["photo"].'</td>';
                                echo '<td><a class="blue-button" href="/Pictowrap/userupdate/actualizar/'.$row["id"].'">Update</a></td>';
                                echo "<td><a onClick='confirmRemoval(".$row["id"].")' class='blue-button'>Delete</a></td></tr>";

                                $counter++;
                            }
                        ?>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="3"><a class="blue-button" href="/Pictowrap/useradd/add">Add new</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </main>
        
        <script src="public/scripts/bootstrap/bootstrap.min.js"></script>

        <script src="public/scripts/sidebars.js">


        </script>

        <script>
            function confirmRemoval2(id) {
                if (window.confirm("Do you really wish to delete the image?")) {
                window.location.href = "/Pictowrap/admin/delete/" + id;
                }
            }
            function confirmRemoval(id) {
                if (window.confirm("Do you really wish to delete the image?")) {
                window.location.href = "/Pictowrap/admin/deleteuser/" + id;
                }
            }
        </script>
    </body>
</html>
