<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="GoodTurnServices online forms">
    <meta name="keywords" content="GoodTurnServices">
    <link rel="icon" type="image/x-icon" href="../Images/favicon.png">
    <meta name="author" content="Prashan Wijesinghe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css">   
    <link href="../css/bootstrap_norm.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Form Selection</title>
</head>
    <?php
    session_start();
    if($_SESSION["loggedin"] == false){
        $_SESSION['Desuri'] = "location: ../Pages/FormSelection.php";
        header("location: ../Backend/login.php");
        exit();
    }
    ?>
<html>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="http://forms.goodturnservices.com.au/gtsonlineforms/Pages/homepage.php">GTS Online Forms</a>
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
                    <li><a class="dropdown-item" href="http://forms.goodturnservices.com.au/gtsonlineforms/Pages/Formselection.php">Fill out a form</a></li>
                    <li><a class="dropdown-item" href="http://forms.goodturnservices.com.au/gtsonlineforms/Pages/Formsforyou.php">Forms submitted to you</a></li>
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
        <main>
            <section class="py-5 text-center container">
              <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                  <h1 class="fw-light">Form Selection</h1>
                  <p class="lead text-muted">Choose which form you would like to fill out here, if you can't find a form, please raise a ticket at our helpdesk</p>
                  <div class="row justify-content-md-center">
                    <div class="col-3"></div>
                      <div class="col-6">
                          <nav aria-label="Page navigation example" class="mx-auto">
                              <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="FormSelection.php">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="FormSelection.php">1</a></li>
                                <li class="page-item active"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link" href="FormSelection3.php">3</a></li>
                                <li class="page-item"><a class="page-link" href="FormSelection3.php">Next</a></li>
                              </ul>
                          </nav>
                      </div>
                    <div class="col-3"></div>
                  </div>
                </div>
              </div>
            </section>
          
            <div class="album py-5 bg-light">
              <div class="container">
          
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="card shadow-sm">
                      <img class="bd-placeholder-img card-img-top" src="../Images/Formthumbnails/IR-F.png"> 
                      <div class="card-body">
                        <p class="card-text text-body-emphasis"><b>Incident Report Form</b></p>
                        <p class="card-text">Not sure what to put here</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="../Images/Formthumbnails/IR-F.png"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="../Forms/IR-F/IR-F.php"><button type="button" class="btn btn-sm btn-outline-secondary"> Fill </button></a>
                          </div>
                          <small class="text-muted">IR-F</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img class="bd-placeholder-img card-img-top" src="../Images/Formthumbnails/HI-F.png">
                      <div class="card-body">
                        <p class="card-text"><b>House Inspection Form</b></p>
                        <p class="card-text">Not sure what to put here either</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="../Images/Formthumbnails/HI-F.png"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            <a href="../Forms/HI-F/HI-F.php"><button type="button" class="btn btn-sm btn-outline-secondary">Fill</button></a>
                          </div>
                          <small class="text-muted">HI-F</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">Nothing here yet, you can change that by raising a ticket at our helpdesk</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">n/a</small>
                        </div>
                      </div>
                    </div>
                  </div>
          
                  <div class="col">
                    <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">Nothing here yet, you can change that by raising a ticket at our helpdesk</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">n/a</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">Nothing here yet, you can change that by raising a ticket at our helpdesk</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">n/a</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">Nothing here yet, you can change that by raising a ticket at our helpdesk</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">n/a</small>
                        </div>
                      </div>
                    </div>
                  </div>
          
                  <div class="col">
                    <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">Nothing here yet, you can change that by raising a ticket at our helpdesk</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">n/a</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">Nothing here yet, you can change that by raising a ticket at our helpdesk</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">n/a</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                      <div class="card-body">
                        <p class="card-text">Nothing here yet, you can change that by raising a ticket at our helpdesk</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">n/a</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </main>
    </body>   
</html>