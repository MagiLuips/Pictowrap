<?php
    // if (isset($this -> data['user'])) $user = $this -> data['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictowrap</title>
    <link
            href="public/styles/bootstrap/bootstrap.min.css"
            rel="stylesheet" />
        <link href="public/styles/global.css" rel="stylesheet" />
        <link href="public/styles/main.css" rel="stylesheet" />
        <link href="public/Styles/forum.css" rel="stylesheet"/>
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
        </style>
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
                            //if (isset($user)) {
                            //    echo '<a class="btn btn-success" href="signout"> Sign out </a>';
                            //} else {
                                echo '<a class="btn btn-success" href="signin"> Sign in </a>';
                            //}
                        ?>
                    </div>
                </div>
            </nav>
        </header>
<div class=" bg-body shadow-sm">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            Friends
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Explore</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Suggestions</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-green rounded shadow-sm">
    <img class="me-3" src="public/images/question.gif" alt="" width="32" height="32">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Popular Questions</h1>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    
    <h6 class="border-bottom pb-2 mb-0">Is this banana art?</h6>
    <div class="d-flex text-muted pt-3">
    <img class="me-3" src="public/images/users/user1.gif" alt="" width="48" height="48">

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@PunnyPrincess</strong>
        I accidentally dropped a banana on the kitchen floor, and now it looks like a masterpiece. Do I have a hidden talent for fruit-based artistry? 
      </p>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">All updates</a>
    </small>
  </div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Help! My toaster is radical!</h6>
    <div class="d-flex text-muted pt-3">
    <img class="me-3" src="public/images/users/user2.gif" alt="" width="48" height="48">

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@HahaHedgehog</strong>
        I was making toast, and my toaster suddenly started shouting 'Cowabunga, dude!' and showing off its skateboarding skills. What should I do?
      </p>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">All updates</a>
    </small>
  </div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Is my pet rock depressed?</h6>
    <div class="d-flex text-muted pt-3">
    <img class="me-3" src="public/images/users/user3.gif" alt="" width="48" height="48">

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@PatrickTheStar</strong>
        My pet rock hasn't moved or shown any enthusiasm lately. I'm worried it might be going through a mid-rock crisis. Any advice on cheering up a sedimentary friend?
      </p>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">All updates</a>
    </small>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
    <div class="d-flex text-muted pt-3">
    <img class="me-3" src="public/images/users/user5.png" alt="" width="48" height="48">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Sonic Rules</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@SonicRules34</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
    <img class="me-3" src="public/images/users/user6.gif" alt="" width="48" height="48">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Snicker licious</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@Snickerlicious</span>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
    <img class="me-3" src="public/images/users/user4.gif" alt="" width="48" height="48">

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <strong class="text-gray-dark">Amusing Alpaca</strong>
          <a href="#">Follow</a>
        </div>
        <span class="d-block">@AmusingAlpaca</span>
      </div>
    </div>
    <small class="d-block text-end mt-3">
      <a href="#">All suggestions</a>
    </small>
  </div>
</main>
</body>
</html>