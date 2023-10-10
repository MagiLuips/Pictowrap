<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Library • Pictowrap</title>

        <link
            href="public/styles/bootstrap/bootstrap.min.css"
            rel="stylesheet" />
        <link href="public/styles/global.css" rel="stylesheet" />
        <link href="public/styles/library.css" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
            .material-symbols-outlined {
                font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0,
                    "opsz" 24;
            }
        </style>
    </head>
    <body data-bs-theme="dark">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                    <span class="navbar-brand">
                        <img
                            src="public/images/logo-dark.png"
                            height="30"
                            width="auto" />
                        Pictowrap
                    </span>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="main">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="gallery">
                                    Gallery
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="forum">
                                    Forum
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    aria-current="page"
                                    href="library">
                                    Library
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="bg-body-tertiary p-5 rounded mb-3">
                    <h1 class="font-amatic">Library</h1>
                    <p class="lead">Save and organize your favorite uploads.</p>
                    <!--
                    <a
                    class="btn btn-lg btn-primary"
                    href="../components/navbar/"
                    role="button"
                    >View navbar docs &raquo;</a
                    >
                    -->
                    <form
                        name="search"
                        action="library"
                        method="post"
                        class="d-flex mb-4"
                        role="search">
                        <input
                            class="form-control me-2"
                            name="name"
                            type="search"
                            placeholder="Search"
                            aria-label="Search" />
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                    </form>
                </div>
                <div class="mb-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >All images</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                >Games</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                ><span class="material-symbols-outlined"
                                    >add</span
                                ></a
                            >
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card">
                            <img
                                src="public/images/beer.png"
                                class="card-img-top"
                                alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Beer</h5>
                                <p class="card-text">
                                    Author: <b>Lszart</b>
                                </p>
                                <a href="#" class="btn btn-primary"
                                    >Add to category</a
                                >
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img
                                src="public/images/palace.png"
                                class="card-img-top"
                                alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Palace</h5>
                                <p class="card-text">Author: <b>Vagrant</b></p>
                                <p><span class="badge text-bg-secondary">Games</span></p>
                                <a href="#" class="btn btn-primary"
                                    >Add to category</a
                                >
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mt-3 container">
            <p style="color: white">
                &copy; 2023 Pictowrap &middot;
                <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </p>
        </footer>
    </body>
</html>
