
<?php
    if (isset($this -> data['user'])) $user = $this -> data['user'];
?>
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
    <body class="bg-dark" data-bs-theme="dark">
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
                        <?php
                            if (isset($user)) {
                                echo '<a class="btn btn-success" href="signout"> Sign out </a>';
                            } else {
                                echo '<a class="btn btn-success" href="signin"> Sign in </a>';
                            }
                        ?>
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
                        <img
                            src="public/images/castle.png"
                            class="bd-placeholder-img"
                            width="100%"
                            height="auto"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false" /><rect
                            height="100%"
                            width="100%"
                            fill="var(--bs-secondary-color)" />
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>A community of pixels</h1>
                                <p class="opacity-75">
                                    Upload your pixelart and share it with other
                                    people!
                                </p>
                                <p>
                                    <a
                                        class="btn btn-lg btn-primary"
                                        href="signup"
                                        >Sign up today</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            src="public/images/monk.png"
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
                            <div class="carousel-caption">
                                <h1>A growing gallery</h1>
                                <p>
                                    Soar through our extensive gallery and find
                                    inspiration!
                                </p>
                                <p>
                                    <a
                                        class="btn btn-lg btn-primary"
                                        href="gallery"
                                        >Browse gallery</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            src="public/images/dragon.png"
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
                            <div class="carousel-caption text-end">
                                <h1>Discuss in low-res</h1>
                                <p>Talk to other artists on our forum!</p>
                                <p>
                                    <a
                                        class="btn btn-lg btn-primary"
                                        href="forum"
                                        >Go to forum</a
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
            <div class="container marketing">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <svg
                            class="bd-placeholder-img rounded-circle"
                            width="140"
                            height="140"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect
                                width="100%"
                                height="100%"
                                fill="var(--bs-secondary-color)" />
                        </svg>
                        <h2 class="fw-normal">Heading</h2>
                        <p>
                            Some representative placeholder content for the
                            three columns of text below the carousel. This is
                            the first column.
                        </p>
                        <p>
                            <a class="btn btn-secondary" href="#"
                                >View details &raquo;</a
                            >
                        </p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg
                            class="bd-placeholder-img rounded-circle"
                            width="140"
                            height="140"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect
                                width="100%"
                                height="100%"
                                fill="var(--bs-secondary-color)" />
                        </svg>
                        <h2 class="fw-normal">Heading</h2>
                        <p>
                            Another exciting bit of representative placeholder
                            content. This time, we've moved on to the second
                            column.
                        </p>
                        <p>
                            <a class="btn btn-secondary" href="#"
                                >View details &raquo;</a
                            >
                        </p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg
                            class="bd-placeholder-img rounded-circle"
                            width="140"
                            height="140"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect
                                width="100%"
                                height="100%"
                                fill="var(--bs-secondary-color)" />
                        </svg>
                        <h2 class="fw-normal">Heading</h2>
                        <p>
                            And lastly this, the third column of representative
                            placeholder content.
                        </p>
                        <p>
                            <a class="btn btn-secondary" href="#"
                                >View details &raquo;</a
                            >
                        </p>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->

                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider" />

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">
                            First featurette heading.
                            <span class="text-body-secondary"
                                >It’ll blow your mind.</span
                            >
                        </h2>
                        <p class="lead">
                            Some great placeholder content for the first
                            featurette here. Imagine some exciting prose here.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <svg
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500"
                            height="500"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder: 500x500"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect
                                width="100%"
                                height="100%"
                                fill="var(--bs-secondary-bg)" />
                            <text
                                x="50%"
                                y="50%"
                                fill="var(--bs-secondary-color)"
                                dy=".3em">
                                500x500
                            </text>
                        </svg>
                    </div>
                </div>

                <hr class="featurette-divider" />

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">
                            Oh yeah, it’s that good.
                            <span class="text-body-secondary"
                                >See for yourself.</span
                            >
                        </h2>
                        <p class="lead">
                            Another featurette? Of course. More placeholder
                            content here to give you an idea of how this layout
                            would work with some actual real-world content in
                            place.
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <svg
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500"
                            height="500"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder: 500x500"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect
                                width="100%"
                                height="100%"
                                fill="var(--bs-secondary-bg)" />
                            <text
                                x="50%"
                                y="50%"
                                fill="var(--bs-secondary-color)"
                                dy=".3em">
                                500x500
                            </text>
                        </svg>
                    </div>
                </div>

                <hr class="featurette-divider" />

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">
                            And lastly, this one.
                            <span class="text-body-secondary">Checkmate.</span>
                        </h2>
                        <p class="lead">
                            And yes, this is the last block of representative
                            placeholder content. Again, not really intended to
                            be actually read, simply here to give you a better
                            view of what this would look like with some actual
                            content. Your content.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <svg
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500"
                            height="500"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder: 500x500"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect
                                width="100%"
                                height="100%"
                                fill="var(--bs-secondary-bg)" />
                            <text
                                x="50%"
                                y="50%"
                                fill="var(--bs-secondary-color)"
                                dy=".3em">
                                500x500
                            </text>
                        </svg>
                    </div>
                </div>

                <hr class="featurette-divider" />

                <!-- /END THE FEATURETTES -->
            </div>
            <footer class="container">
                <p>
                    &copy; 2023 Pictowrap &middot;
                    <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
                </p>
            </footer>
        </main>
        <script src="public/scripts/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>
