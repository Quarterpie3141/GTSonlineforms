<!DOCTYPE html>
<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="GoodTurnServices online Incident Report form">
    <meta name="keywords" content="GoodTurnServices">
    <meta name="author" content="Prashan Wijesinghe">
    <meta name="viewport" content="width=device-width, initial-scale=0.2">
    <link rel="stylesheet" href="../../css/Form.css">  
    <link rel="icon" type="image/x-icon" href="../../Images/favicon.png"> 
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <title>IR-F</title>
    
    
</head> 
<html lang="en" >
<body>
    <?php
    session_start();
    if($_SESSION["loggedin"] == false){
        $_SESSION['Desuri'] = "location: ../../Forms/IR-f/IR-F.php";
        header("location: ../../Backend/login.php");
        exit();
    }
    require_once "../../Backend/config.php";
    $zero = "0";
    $sql = "SELECT username FROM usr_lgns WHERE priv = $zero";
    $result = $conn -> query($sql);
    $usr_lgns = $result -> fetch_all(MYSQLI_NUM); 
    ?>
    <div id="Form_to_save">
        <form style="margin: 190px;" action="submit/IR-F.php" method="POST">
            <div class="row">
                <div class="col-12">
                    <div class="headertext">Incident report</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="normalbold">In the event of an incident, this report will need to be completed as soon as possible and submitted to the immediate supervisor of the worker completing this report.</p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-6">
                    <div class="normalboldmd">Name of worker completing report:</div>
                </div>
                <div class="col-6">
                    <div class="mb-3 textinput" style="top: 0%; position: relative;">
                        <input type="text" name="nameofworker" class="form-control form-control-lg" placeholder="John Doe">
                    </div>                  
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-6">
                    <div class="normalboldmd">Name of the participant:</div>
                </div>
                <div class="col-6">
                    <div class="mb-3 textinput" style="top: 0%; position: relative;">
                        <input type="text" name="nameofparticipant" class="form-control form-control-lg" placeholder="John Doe">
                    </div> 
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="normalboldmd">Phone:</div>
                </div>
                <div class="col-3">
                    <div class="mb-3 textinput" style="top: 0%; position: relative;">
                        <input type="text" name="phonenumber" class="form-control form-control-lg" placeholder="0123456789">
                    </div>
                </div>
                <div class="col-3">
                    <div class="normalboldmd">&#160 &#160 Position:</div>
                </div>
                <div class="col-3">
                    <div class="mb-3 textinput" style="top: 0%; position: relative;">
                        <input type="text" name="positionofworker" class="form-control form-control-lg" placeholder="Support worker">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <div class="underlinelg">Details of incident</div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="normalboldmd">Date of incident:</div>
                    <div class="normalsm">(or if not known, first identified)</div>
                </div>
                <div class="col-3">
                    <div class="textinput">
                        <input id="startDate" name="date" class="form-control" type="date" />
                        <span id="startDateSelected"></span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="normalboldmd">&#160 &#160Time of incident:</div>
                    <div class="normalsm">&#160 &#160(or if not known, first identified)</div>
                </div>
                <div class="col-3">
                    <div class="textinput">
                        <input id="startDate" name="time" class="form-control" type="time" />
                        <span id="startDateSelected"></span>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <div class="normalboldmd">Location of incident:</div>
                    <div class="mb-3 box">
                        <textarea class="form-control" name="locationofincident" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <div class="normalboldmd">Type of incident:</div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="normalboldmd">Abuse/Assault</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="abuseassult" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Breach of privacy</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="breachofprivacy" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Behaviour (of concern)</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="behaviour" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="normalboldmd">Death</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="death" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Injury</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="injury" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Medication</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="medication" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="normalboldmd">Poor quality of care</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="poorqualityofcare" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Property damage</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="propertydamage" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Restrictive practice (unauthorised)</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="restrictivepractice" type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="normalboldmd">Other:</div>
                    <div class="normalsm">(include details)</div>
                </div>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-text">
                        <input class="form-check-input mt-0" name="other"  type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                        </div>
                            <input type="text" name="otherdetails" placeholder="Please provide details here" class="form-control" style="border: 3px solid rgb(0, 0, 0);">   
                    </div>                  
                </div>
            </div>
            <br>
            <div class="row">
                <div style="height: 60px; background-color: rgb(179, 178, 178);">

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="underlinelg">
                        Who was involved?
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1 tableborder maintablecell">

                </div>
                <div class="col-2 tableborder maintablecell">
                    <div class="normalboldsm">Firstname</div>
                </div>
                <div class="col-2 tableborder maintablecell">
                    <div class="normalboldsm">Lastname</div>
                </div>
                <div class="col-2 tableborder maintablecell">
                    <div class="normalboldsm">Phone</div>
                </div>
                <div class="col-3 tableborder maintablecell">
                    <div class="normalboldsm">Email</div>
                </div>
                <div class="col-1 tableborder maintablecell">
                    <div class="normalboldsm">Client/<br>Worker/<br>Witness</div>
                </div>
                <div class="col-1 tableborder maintablecell">
                    <div class="normalboldsm">Injured</div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">1</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1firstname" class="form-control form-control-lg" placeholder="John">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1lastname" class="form-control form-control-lg" placeholder="Doe">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1phonenumber" class="form-control form-control-lg" placeholder="0123456789">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1email" class="form-control form-control-lg" placeholder="example@example.com">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1witness" class="form-control form-control-lg" placeholder="Y/N">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1injured" class="form-control form-control-lg" placeholder="Y/N">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">2</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2firstname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2lastname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2phonenumber" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2email" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2witness" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2injured" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">3</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3firstname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3lastname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3phonenumber" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3email" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3witness" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3injured" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">4</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4firstname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4lastname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4phonenumber" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4email" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4witness" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4injured" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">5</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5firstname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5lastname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5phonenumber" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5email" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5witness" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5injured" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">6</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6firstname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6lastname" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6phonenumber" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6email" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6witness" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6injured" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="height: 550px;"></div>
            </div>
            <div class="row">
            <div style="height: 60px; background-color: rgb(179, 178, 178);"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="normalboldmd">What happened?</div>
                    <div class="normalsm">(Describe briefly: What happened? How the incident was identified? Possible cause? Impact to the people involved? Who (if any) was harmed? What was the extent of the harm?)</div>
                    <div class="textareaborder">
                        <textarea class="form-control" name="whathappened" rows="6" placeholder="Type here"></textarea>                  
                    </div>
                    <br>
                    <div style="height: 60px; background-color: rgb(179, 178, 178);"></div>
                    <br>
                    <div class="underlinelg">Immediate actions taken</div>
                    <div class="normalsm">(Include details of actions taken to ensure the health, safety and wellbeing of the induviduals affected by the incident; e.g. first aid; reported to police; ambulance called; emotional support; meeting participant's needs; etc.)</div>
                    <br>
                    <div class="textareaborder">
                        <textarea class="form-control" name="immediateactionstaken" rows="6" placeholder="Type here, seperate with semicolons"></textarea>
                    </div>
                    <br>
                    <div style="height: 60px; background-color: rgb(179, 178, 178);"></div>
                    <br>
                    <div class="underlinelg">Confirmation of completing employee</div>
                    <br><br>
                    <div class="form-check">
                            <input class="form-check-input" name="userconsent" style="width: 2em; height: 2em; border: solid 2px;" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label normalsm" for="flexCheckDefault">
                            &#160I hereby confirm that the information provided in this report is accurate to the best of my knowledge
                        </label>
                    </div>                  
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="textinput">
                        <select name="assignedto" style="font-size: 40px;" class="form-select form-select-lg">
                            <option selected>Assign to (please select)</option>
                            <?php
                            $lp = "0";
                            while($lp < count($usr_lgns)){
                                $nm = $usr_lgns[$lp];
                                $nmc = $nm[0];
                                echo "<option value='$nmc'> $nmc </option>";
                                $lp++;
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-success" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 3rem;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Sumbit form
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title normal" id="staticBackdropLabel" style="font-weight: 600;">Submit form?</h1>
                        <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 3rem;"></button>
                        </div>
                        <div class="modal-body normal">
                        By submitting this form you hereby confirm that the information that you provided in this form is accurate to the best of your knowledge. <br><br> This action cannot be undone.
                        </div>
                        <div class="modal-footer">
                        <button type="button" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 3rem;" class="btn btn-danger" data-bs-dismiss="modal">Not Yet
                        </button>
                        <input type="submit" name="formSubmit"  style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 3rem;" value="Submit" class="btn btn-success"></input>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>





</html>