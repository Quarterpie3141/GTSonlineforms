<?php
session_start();
$_SESSION['Desuri'] = "Location: ../Pages/homepage.php";
$_SESSION['datasbm'] = "";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="Images/favicon.png">
    <meta name="author" content="Quarterpie">
    <title>GTS online forms</title>
<link href="css/bootstrap_norm.min.css" rel="stylesheet">
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
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
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
    </style>
    <link href="css/Index.css" rel="stylesheet">
  </head>
  <body>
    
<header class="site-header sticky-top py-1">
  <nav class="container-fluid d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 d-none d-md-inline-block" href="#">GTS Online Forms</a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="Backend/Logout.php">Logout</a>
  </nav>
</header>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Good Turn Services online forms</h1>
      <p class="lead fw-normal">Fill out, submit and create forms here.</p>
      <a class="btn btn-outline-secondary" href="Backend/Login.php">Login</a>
    </div>
    <p>Not what you're looking for?</p>
    <p style="font-size: small;">See our sister sites below</p>
  </div>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">GTS Hub</h2>
        <p class="lead">Information and resources for GTS Admin staff</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <a href="https://goodturnservices.sharepoint.com/"><img style="margin: auto; margin-top: 50px; width: 80%; height: 300px; border-radius: 8px 8px 0 0;" src="Images/Login/GTShub.png"></a>
      </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Good Turn Services</h2>
        <p class="lead">Our public website for visitors</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <a href="https://goodturnservices.com.au"><img style="margin: auto; margin-top: 50px; width: 80%; height: 300px; border-radius: 8px 8px 0 0;" src="Images/Login/GTSws.png"></a>
      </div>
    </div>
  </div>
</main>

<footer class="container-fluid py-5">
  <img style="width: 200px; height: auto;" src="Images/Login/GT TOP sign.png">
</footer>


    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>