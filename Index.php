<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="GoodTurnServices online forms">
    <meta name="keywords" content="GoodTurnServices">
    <meta name="author" content="Prashan Wijesinghe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head> 
  <?php
  session_start();
  $_SESSION['Desuri'] = "";
  ?>
<html lang="en">
    <body>
      <nav class="navbar bg-body-tertiary fixed-top" style="flex-wrap: nowrap;">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://goodturnservices.com.au/">
            <div class="#">
                <img src="Images/Login/GT TOP sign.png" style="width: 25%; min-width: 100px; max-width: 1600px; height: auto;">
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">GTS Online Forms</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    More
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">GTS website</a></li>
                    <li><a class="dropdown-item" href="#">GTS SharePoint</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <br><br><br><br>
                <form action="Backend/Logout.php" method="POST">
                  <button class="btn btn-danger" type="submit">Logout</button> 
                </form>
            </div>
          </div>
        </div>
      </nav>
      <div class="container text-center">
        <div class="row"style="height: 120px;">
        </div>
        <div class="row justify-content-center">
          <div class="col-2"></div>
          <div class="col-8 maintxt">Good Turn Services online forms</div>
          <div class="col-2"></div>
        </div>
        <div class="row" style="height: 200px;"></div>
        <div class="row">
          <form action="Backend/Login.php" method="post">
            <div class="col-12">

              <button type="submit" value="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sign in
              </button>
                
            </div>
          </form>
        </div> 
      </div>
    </div>
          






        <script src="js/bootstrap.bundle.min.js"></script> 
    </body>


</html>