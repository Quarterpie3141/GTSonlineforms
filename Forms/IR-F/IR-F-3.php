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
    <title>IR-F-3</title>
</head> 
<?php
    session_start();
    if($_SESSION["loggedin"] == false){
        $_SESSION['Desuri'] = "location: ../../Forms/IR-f/IR-F-3.php";
        header("location: ../../Backend/login.php");
        exit();
    }
    require_once "../../Backend/config.php";
    $sql = "SELECT Nameofworker,
    Nameofparticipant,
    Phonenumber,
    Date, 
    Time, 
    Locationofincident, 
    Abuseassult,
    Breachofprivacy, 
    Behaviour, 
    Death, 
    Injury, 
    Medication, 
    Poorqualityofcare, 
    Propertydamage, 
    Restrictivepractice, 
    Other, 
    Otherdetails,
    1firstname, 1lastname, 1phonenumber, 1email, 1witness, 1injured,
    2firstname, 2lastname, 2phonenumber, 2email, 2witness, 2injured,
    3firstname, 3lastname, 3phonenumber, 3email, 3witness, 3injured,
    4firstname, 4lastname, 4phonenumber, 4email, 4witness, 4injured,
    5firstname, 5lastname, 5phonenumber, 5email, 5witness, 5injured,
    6firstname, 6lastname, 6phonenumber, 6email, 6witness, 6injured,
    Whathappened, 
    Immediateactionstaken, 
    Userconsent,
    Nameofmanager,
    F2phone,
    F2position,
    Reportable,
    Reportedtopolice,
    Notified,
    Reportedtoother,
    othername,
     FROM ir_f_db WHERE formid = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $param_formid);       
    $param_formid = $_GET["formid"];
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $varNameofworker, $varNameofparticipant, $varPhonenumber, $varDate, $varTime, $varLocationofincident, $varAbuseassult, $varBreachofprivacy, $varBehaviour, $varDeath, $varInjury, $varMedication, $varPoorqualityofcare, $varPropertydamage, $varRestrictivepractice, $varOther, $varOtherdetails, $var1firstname, $var1lastname, $var1phonenumber, $var1email, $var1witness, $var1injured, $var2firstname, $var2lastname, $var2phonenumber, $var2email, $var2witness, $var2injured, $var3firstname, $var3lastname, $var3phonenumber, $var3email, $var3witness, $var3injured, $var4firstname, $var4lastname, $var4phonenumber, $var4email, $var4witness, $var4injured, $var5firstname, $var5lastname, $var5phonenumber, $var5email, $var5witness, $var5injured, $var6firstname, $var6lastname, $var6phonenumber, $var6email, $var6witness, $var6injured, $varWhathappened, $varImmediateactionstaken, $varUserconsent, $varnameofmanager, $varf2phone, $varf2position, $varreportable, $varreportedtopolice, $varnotified, $varreportedtoother, $varothername);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    
?>
<html lang="en" >


    <body>
        <div style="margin: 190px;">
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
                        <input type="text" name="nameofworker" class="form-control form-control-lg" id="exampleFormControlInput1" value="<?php echo $varNameofworker;?>">
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
                        <input type="text" name="nameofparticipant" class="form-control form-control-lg" id="exampleFormControlInput1" value="<?php echo $varNameofparticipant;?>">
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
                        <input type="text" name="phonenumber" class="form-control form-control-lg" value="<?php echo $varPhonenumber;?>">
                    </div>
                </div>
                <div class="col-3">
                    <div class="normalboldmd">&#160 &#160 Position:</div>
                </div>
                <div class="col-3">
                    <div class="mb-3 textinput" style="top: 0%; position: relative;">
                        <input type="text" name="positionofworker" class="form-control form-control-lg" value="<?php echo "employee";?>">
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
                        <input id="startDate" name="date" class="form-control" type="date" value="<?php echo $varDate;?>"/>
                        <span id="startDateSelected"></span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="normalboldmd">&#160 &#160Time of incident:</div>
                    <div class="normalsm">&#160 &#160(or if not known, first identified)</div>
                </div>
                <div class="col-3">
                    <div class="textinput">
                        <input id="startDate" name="time" class="form-control" type="time" value="<?php echo $varTime;?>" />
                        <span id="startDateSelected"></span>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <div class="normalboldmd">Location of incident:</div>
                    <div class="mb-3 box">
                        <textarea class="form-control" name="locationofincident" id="exampleFormControlTextarea1" rows="3"><?php echo $varLocationofincident; ?></textarea>
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
                    <input class="form-check-input" name="abuseassult" <?php if ($varAbuseassult == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Breach of privacy</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="breachofprivacy" <?php if ($varBreachofprivacy == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Behaviour (of concern)</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="behaviour" <?php if ($varBehaviour == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="normalboldmd">Death</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="death" <?php if ($varDeath == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Injury</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="injury" <?php if ($varInjury == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Medication</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="medication" <?php if ($varMedication == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-3">
                    <div class="normalboldmd">Poor quality of care</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="poorqualityofcare" <?php if ($varPoorqualityofcare == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Property damage</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="propertydamage" <?php if ($varPropertydamage == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">Restrictive practice (unauthorised)</div>
                </div>
                <div class="col-1">
                    <input class="form-check-input" name="restrictivepractice" <?php if ($varRestrictivepractice == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
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
                        <input class="form-check-input mt-0" name="other" <?php if ($varOther == true) {echo "checked";} ?> type="checkbox" style="border: 5px solid rgb(0, 0, 0);">
                        </div>
                            <input type="text" name="otherdetails" value="<?php echo $varOtherdetails;?>" placeholder="Please provide details here" class="form-control" style="border: 3px solid rgb(0, 0, 0);">   
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
                        <input type="text" name="1firstname" value="<?php echo $var1firstname;?>" class="form-control form-control-lg" placeholder="John">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1lastname" value="<?php echo $var1lastname;?>" class="form-control form-control-lg" placeholder="Doe">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1phonenumber" value="<?php echo $var1phonenumber;?>" class="form-control form-control-lg" placeholder="0123456789">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1email" value="<?php echo $var1email;?>" class="form-control form-control-lg" placeholder="example@example.com">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1witness" value="<?php echo $var1witness;?>" class="form-control form-control-lg" placeholder="Y/N">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="1injured" value="<?php echo $var1injured;?>" class="form-control form-control-lg" placeholder="Y/N">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">2</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2firstname" value="<?php echo $var2firstname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2lastname" value="<?php echo $var2lastname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2phonenumber" value="<?php echo $var2phonenumber;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2email" value="<?php echo $var2email;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2witness" value="<?php echo $var2witness;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="2injured" value="<?php echo $var2injured;?>" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">3</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3firstname" value="<?php echo $var3firstname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3lastname" value="<?php echo $var3lastname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3phonenumber" value="<?php echo $var3phonenumber;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3email" value="<?php echo $var3email;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3witness" value="<?php echo $var3witness;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="3injured" value="<?php echo $var3injured;?>" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">4</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4firstname" value="<?php echo $var4firstname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4lastname" value="<?php echo $var4lastname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4phonenumber" value="<?php echo $var4phonenumber;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4email" value="<?php echo $var4email;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4witness" value="<?php echo $var4witness; ?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="4injured" value="<?php echo $var4injured;?>" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">5</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5firstname" value="<?php echo $var5firstname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5lastname" value="<?php echo $var5lastname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5phonenumber" value="<?php echo $var5phonenumber;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5email" value="<?php echo $var5email;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5witness" value="<?php echo $var5witness;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="5injured" value="<?php echo $var5injured;?>" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 tableborder">
                    <div class="normalboldsm">6</div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6firstname" value="<?php echo $var6firstname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6lastname" value="<?php echo $var6lastname;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-2 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6phonenumber" value="<?php echo $var6phonenumber;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-3 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6email" value="<?php echo $var6email;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6witness" value="<?php echo $var6witness;?>" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-1 tableborder">
                    <div class="mb-3" style="top: 0%; position: relative;">
                        <input type="text" name="6injured" value="<?php echo $var6injured;?>" class="form-control form-control-lg">
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
                        <textarea class="form-control" name="whathappened" rows="6" placeholder="Type here"><?php echo $varWhathappened;?></textarea>                  
                    </div>
                    <br>
                    <div style="height: 60px; background-color: rgb(179, 178, 178);"></div>
                    <br>
                    <div class="underlinelg">Immediate actions taken</div>
                    <div class="normalsm">(Include details of actions taken to ensure the health, safety and wellbeing of the induviduals affected by the incident; e.g. first aid; reported to police; ambulance called; emotional support; meeting participants needs; etc.)</div>
                    <br>
                    <div class="textareaborder">
                        <textarea class="form-control" name="immediateactionstaken" rows="6" placeholder="Type here, seperate with semicolons"><?php echo $varImmediateactionstaken?></textarea>
                    </div>
                    <br>
                    <div style="height: 60px; background-color: rgb(179, 178, 178);"></div>
                    <br>
                    <div class="underlinelg">Confirmation of completing employee</div>
                    <br><br>
                    <div class="form-check">
                            <input class="form-check-input" name="userconsent" <?php if ($varUserconsent == true) {echo "checked";} ?> style="width: 2em; height: 2em; border: solid 2px;" type="checkbox">
                        <label class="form-check-label normalsm" for="flexCheckDefault">
                            &#160I hereby confirm that the information provided in this report is accurate to the best of my knowledge
                        </label>
                    </div>                  
                </div>
            </div>
    </div>
    <div style="margin: 190px;">
        <div class="row">
            <div class="col-12">
                <div class="headertext" style="font-size: 50px;">&#160</div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-4">
                <div class="underlinelg">Response to incident</div>
            </div>
            <div class="col-7" style="display: flex;">
                <div class="normalsm" style="align-self: center">(manager use only)</div>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-4">
                <div class="normalboldmd">Name of reviewing manager:</div>
            </div>
            <div class="col-8">
                <div class=" textinput" style="top: 0%; position: relative;">
                    <input type="text" name="nameofmanager" class="form-control form-control-lg" value="<?php echo $varnameofmanager;?>">
                </div> 
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-3">
                <div class="normalboldmd">Phone:</div>
            </div>
            <div class="col-3">
                <div class="textinput" style="top: 0%; position: relative;">
                    <input type="text" name="f2phone" class="form-control form-control-lg" value="<?php echo $varf2phone ?>">
                </div> 
            </div>
            <div class="col-3">
                <div class="normalboldmd">
                    &#160 Position:
                </div>
            </div>
            <div class="col-3">
                <div class="textinput">
                    <input type="text" name="f2position" class="form-control form-control-lg" value="<?php echo $varf2position ?>">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="normalboldmd"> Is the incident a reportable incident?</div>
            </div>
            <div class="col-6">
                <div class="textinput">
                    <select name="reportable" style="font-size: 40px;" class="form-select form-select-lg">
                        <option selected><?php if ($varreportable == "1") {
                            echo "Yes";
                        } else {
                            echo "No";} ?></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="normalsm">
                    If yes,the incident will need to be reported to the NDIS commissioner within 24 hours. Please refer to the <i>Report incident to the NDIS process</i> (located in the Centro app) for further information. 
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                <div class="normalboldmd">
                    Reported to police?
                </div>
            </div>
            <div class="col-3">
                <div class="textinput">
                    <select name="reportedtopolice" style="font-size: 40px;" class="form-select form-select-lg">
                    <option selected><?php if ($varreportedtopolice == "1") {
                            echo "Yes";
                        } else {
                            echo "No";} ?></option>
                    </select>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="normalboldmd">
                    Notified parents, family or guardian?
                </div>
            </div>
            <div class="col-3">
                <div class="textinput">
                    <select name="notified" style="font-size: 40px;" class="form-select form-select-lg">
                    <option selected><?php if ($varnotified == "1") {
                            echo "Yes";
                        } else {
                            echo "No";} ?></option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-4">
                <div class="normalboldmd">
                    Reported to other body?
                </div>
            </div>
            <div class="col-2">
                <div class="textinput">
                    <select name="reportedtoother" style="font-size: 40px;" class="form-select form-select-lg">
                    <option selected><?php if ($varreportedtoother == "1") {
                            echo "Yes";
                        } else {
                            echo "No";} ?></option>
                    </select>
                </div>
            </div>
            <div class="col-6 textinput">
                <input type="text" name="othername" class="form-control form-control-lg" value="<?php echo $varothername ?>">
            </div>
        </div>
        <br><br>
    </div>



        <form style="margin: 190px;" action="submit/IR-F-3.php" method="POST">
            <div class="row">
                <div class="col-12">
                    <div class="headertext" style="font-size: 50px;">&#160</div>
                </div>
            </div>
            <br><br>
            <div class="row mb-3">
                <div class="col-4">
                    <div class="underlinelg">
                        Incident investigation
                    </div>
                </div>
                <div class="col-8" style="display: flex;">
                    <div class="normalsm" style="align-self: center;">
                        (office use only)
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="normalsm">
                    An internal investigation will be carried out by an investigator unrelated to those involved. They will be either a senior staff member, key management personnel or be external to the orginisation. 
                    <br><br>Refer to the <i>Manage incident internally process</i> (located in the Centro app) for further information on what needs to be included in an Investigation repot.
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <div class="normalboldmd">
                        Name:
                    </div>
                </div>
                <div class="col-3 textinput">
                    <input type="text" name="#" class="form-control form-control-lg" placeholder="">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">
                        &#160 Date:
                    </div>
                </div>
                <div class="col-3 textinput">
                    <input name="#" class="form-control" type="date" />
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <div class="col-3">
                    <div class="normalboldmd">
                        Position:
                    </div>
                </div>
                <div class="col-3 textinput">
                    <input type="text" name="#" class="form-control form-control-lg" placeholder="">
                </div>
                <div class="col-3">
                    <div class="normalboldmd">
                        &#160 Phone:
                    </div>
                </div>
                <div class="col-3 textinput">
                    <input name="#" class="form-control" type="text"/>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <div class="col-4">
                    <div class="normalboldmd">
                        Summary of findings:
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-3" style="display: flex;">
                    <div class="normalsm" style="align-self: center; font-size: 35px;">
                        Days taken to investigate incident:
                    </div>
                </div>
                <div class="col-1 textinput">
                    <input name="#" class="form-control" type="number"/>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="textareaborder">
                        <textarea class="form-control" name="#" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <br><br>
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
                            Are you sure that all the required fields are filled out and accurate? <br><br> This action cannot be undone.
                        </div>
                        <div class="modal-footer">
                        <button type="button" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 3rem;" class="btn btn-danger" data-bs-dismiss="modal">No
                        </button>
                        <input type="submit" name="formSubmit"  style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 3rem;" value="Submit" class="btn btn-success"></input>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
