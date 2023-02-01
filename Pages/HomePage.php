<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="GoodTurnServices online forms">
    <meta name="keywords" content="GoodTurnServices">
    <meta name="author" content="Prashan Wijesinghe">
    <link rel="icon" type="image/x-icon" href="../Images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css">   
    <title>Home</title>
    <link href="../css/bootstrap_norm.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
    <?php
    session_start();
    if($_SESSION["loggedin"] == false){
        $_SESSION['Desuri'] = "location: ../Pages/HomePage.php";
        header("location: ../Backend/login.php");
        exit();
    }   
    ?>
<html>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">GTS Online Forms</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Backend/Logout.php">Logout</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    More
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Formselection.php">Fill out a form</a></li>
                    <li><a class="dropdown-item" href="#">Forms submitted to you</a></li>
                    <li><a class="dropdown-item" href="#">Your submitted forms</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../index.php">Splash page</a></li>
                    </ul>
                </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>
            <?php if($_SESSION['datasbm'] == 0)
            { 
                echo "<div class='alert alert-success' role='alert'> Data successfully submitted</div>";
                $_SESSION['datasbm'] = "";
            } elseif($_SESSION['datasbm'] == 1)
            {
                echo "<div class='alert alert-danger' role='alert'> Data successfully submitted</div>";
                $_SESSION['datasbm'] = "";
            }else;  ?>
        <div class="container text-center">
            <div class="row">
                <div class="col-6"></div>
                <div class="row-6">
                    <div>
                        <h1>Welcome Back <?php echo $_SESSION["username"] ?>! </h1>
                    </div>
                </div>
                <div class="row-6"></div>
            </div>            
        </div>
        
        <div class="container-fluid">
            <div class="row" style="height: 100px;"></div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="card mx-auto" style="width: 18rem; height: 34rem">
                    <img src="../Images/HomePage/Form.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Fill out a form</h5>
                      <p class="card-text">Fill out forms or paperwork thats avalible to you.</p>
                      <a href="FormSelection.php" class="btn btn-primary">Take me there</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card mx-auto" style="width: 18rem; height: 34rem">
                    <img src="../Images/HomePage/Dropbox.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Forms submitted to you</h5>
                      <p class="card-text">Forms that others have submitted to be filled in or completed by you.</p>
                      <a href="formsforyou.php" class="btn btn-primary">Take me there</a>
                    </div>
                  </div>
                  <div class="alert alert-success mx-auto" style="width: 18rem" role="alert">
                    You have 0 Forms to fill out
                    </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card mx-auto" style="width: 18rem; height: 34rem">
                    <img src="../Images/HomePage/Archive.png" class="card-img-top" >
                    <div class="card-body">
                      <h5 class="card-title">Your submitted forms</h5>
                      <p class="card-text">Edit, delete or view any of the forms you have submitted.</p>
                      <a href="#" class="btn btn-primary">Take me there</a>
                    </div>
                  </div>
            </div>
          </div>
        </div>
    </body>
</html>