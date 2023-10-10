<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Pictowrap</title>

        <link
            href="public/styles/bootstrap/bootstrap.min.css"
            rel="stylesheet" />
        <link href="public/styles/global.css" rel="stylesheet" />
        <link href="public/styles/main.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <img
                        src="public/images/logo-dark.png"
                        height="30"
                        width="auto" />
                    <a class="navbar-brand" href="main"
                        >&nbsp;&nbsp;Pictowrap</a
                    >
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
                                <a
                                    class="nav-link active"
                                    aria-current="page"
                                    href="main"
                                    >Home</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="gallery"
                                    >Gallery</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="forum"
                                    >Forum</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="library"
                                    >Library</a
                                >
                            </li>
                        </ul>
                        <a class="btn btn-success" href="sign-in"> Sign in </a>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div
                id="myCarousel"
                class="carousel slide mb-6"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button
                        type="button"
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <svg src="images/logo-dark.png" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> -->
                        <img
                            src="public/images/castle.png"
                            class="bd-placeholder-img"
                            width="100%"
                            height="auto"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false" /><rect
                            width="100%"
                            height="100%"
                            fill="var(--bs-secondary-color)" />
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>A community of pixels</h1>
                                <p class="opacity-75">
                                    Upload your pixelart and share it with other
                                    people!
                                </p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="#"
                                        >Sign up today</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide="prev">
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide="next">
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>
                    &copy; 2017–2023 Company, Inc. &middot;
                    <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
                </p>
            </footer>
        </main>
        <script src="public/scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>
