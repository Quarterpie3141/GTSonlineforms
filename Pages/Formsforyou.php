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
        $_SESSION['Desuri'] = "location: ../Pages/Formsforyou.php";
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
        <div class="container text-center">
            <h1>Your forms</h1>
        </div>
        <div style="height: 100px;">
        </div>

        <?php
        if($_SESSION['priv'] == "2"){
        require_once("../Backend/config.php");
        $sql = "SELECT formid FROM ir_f_db WHERE complete = '0'";
        $result = $conn -> query($sql);
        $usr_frms = $result -> fetch_all(MYSQLI_NUM);
        $lp = "0";
        while($lp < count($usr_frms)) {
            $arry = $usr_frms[$lp];
            $frmid = $arry[0];
            $sql = "SELECT stage FROM ir_f_db WHERE formid = '$frmid'";
            $stageresult = $conn -> query($sql);
            $stagerslt = $stageresult -> fetch_all(MYSQLI_NUM);
            $stagearray = $stagerslt[0];
            $stage = $stagearray[0];

            echo "
                        <div class='container'>
                            <a href='../Forms/IR-F/IR-F-$stage.php?formid=$frmid' class='list-group-item list-group-item-action d-flex gap-3 py-3' aria-current='true'>
                                <img src='../Images/HomePage/alert.png' alt='twbs' class='rounded-circle flex-shrink-0' width='32' height='32'>
                                    <div class='d-flex gap-2 w-100 justify-content-between'>
                                            <div>
                                                <h6 class='mb-0'>Incident Report Form #$frmid ($stage)</h6>
                                                <p class='mb-0 opacity-75'>An incident report form has been submitted to be filled out by you</p>
                                            </div>
                                        <small class='opacity-50 text-nowrap'>IR-F</small>
                                    </div>
                            </a>
                        </div>
            ";
            $conn -> close();  
            $lp++;
        }
        $conn -> close();  
        }

        require_once("../Backend/config.php");
        $param_usrname = $_SESSION["username"];
        $sql = "SELECT formid FROM ir_f_db WHERE assignedto = $param_usrname";
        $result = $conn -> query($sql);
        $usr_frms = $result -> fetch_all(MYSQLI_NUM);
        $lp = "0";
        while($lp < count($usr_frms)) {
            $arry = $usr_frms[$lp];
            $frmid = $arry[0];
            $sql = "SELECT stage FROM ir_f_db WHERE formid = '$frmid'";
            $stageresult = $conn -> query($sql);
            $stagerslt = $stageresult -> fetch_all(MYSQLI_NUM);
            $stagearray = $stagerslt[0];
            $stage = $stagearray[0];

            echo "
                        <div class='container'>
                            <a href='../Forms/IR-F/IR-F-$stage.php?formid=$frmid' class='list-group-item list-group-item-action d-flex gap-3 py-3' aria-current='true'>
                                <img src='../Images/HomePage/alert.png' alt='twbs' class='rounded-circle flex-shrink-0' width='32' height='32'>
                                    <div class='d-flex gap-2 w-100 justify-content-between'>
                                            <div>
                                                <h6 class='mb-0'>Incident Report Form #$frmid ($stage)</h6>
                                                <p class='mb-0 opacity-75'>An incident report form has been submitted to be filled out by you</p>
                                            </div>
                                        <small class='opacity-50 text-nowrap'>IR-F</small>
                                    </div>
                            </a>
                        </div>
            ";
            $lp++;
        }
        $conn -> close();  
        
        ?>

        <div class="container">
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="../Images/HomePage/alert.png" alt="twbs" class="rounded-circle flex-shrink-0" width="32" height="32">
                <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">List group item heading</h6>
                    <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                </div>
                <small class="opacity-50 text-nowrap">now</small>
                </div>
            </a>
        </div>
