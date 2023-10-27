<?php
    $images = $this->[''];
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
        <link 
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>
    <body data-bs-theme="dark">
    <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <img
                        src="public/images/logo-dark.png"
                        height="30"
                        width="auto" />
                    <a class="navbar-brand" href="main"
                        >&nbsp;&nbsp;Pictowrap
                    </a>
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
                        <a class="material-symbols-outlined color-white p-2">account_circle</a>
                        <a class="btn btn-success" href="signin"> Sign in </a>
                    </div>
                </div>
            </nav>

            <div class="container">

            <div class="bg-body-tertiary p-5 rounded mb-3">
                    <h1 class="font-amatic">Gallery!</h1>
                    <p class="lead">Searche your favorite images.</p>
                    <form
                        name="search"
                        action="galery"
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

            <tbody>
              <?php foreach ($result as $row) {
                    echo '<img 
                    src="public/images/gallery/1.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" >';
              }?>

                <div class="mt-4 pb-2">
                    <img 
                        src="public/images/gallery/1.png"
                        height="200"
                        width="auto"
                        class="border"
                        alt="" >
                </div>

                <div class="mt-4 pb-2">
                <img 
                    src="public/images/gallery/1.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/2.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/3.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />    
                <img 
                    src="public/images/gallery/4.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                </div>

                <div class="p-lg-4 pb-2">
                <img 
                    src="public/images/gallery/5.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/6.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/7.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />    
                <img 
                    src="public/images/gallery/8.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/9.gif"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/10.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                </div>

                <div class="pb_2">
                <img 
                    src="public/images/gallery/11.gif"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/12.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/13.gif"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/14.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                </div>

                <div class="p-lg-4 pb-2">
                <img 
                    src="public/images/gallery/15.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/16.gif"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/17.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/18.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/19.png"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />    
                <img 
                    src="public/images/gallery/20.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                </div>

                <div class="pb_2">
                <img 
                    src="public/images/gallery/21.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/22.gif"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/23.gif"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                <img 
                    src="public/images/gallery/24.jpg"
                    height="200"
                    width="auto"
                    class="border"
                    alt="" />
                </div>
                  
            </div>
        </header>
    </body>
</html>
