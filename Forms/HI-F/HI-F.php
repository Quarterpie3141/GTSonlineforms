<!DOCTYPE html>
<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="GoodTurnServices online Incident Report form">
    <meta name="keywords" content="GoodTurnServices">
    <meta name="author" content="Prashan Wijesinghe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Form.css">   
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.bundle.min.js"></script>
    
    
</head> 
<html lang="en" >
<body>
    <?php
    session_start();
    if($_SESSION["loggedin"] == false){
        $_SESSION['Desuri'] = "location: ../Forms/IR-F.php";
        header("location: ../Backend/login.php");
        exit();
    }
    ?>
    <form style="margin: 190px;" action="/sumbit/HI-F.php" method="POST">
        <div class="row">
            <div class="col-12">
                <div class="headertext"><b>House Inspection</b></div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-3">
                <div class="normalboldmd">Date:</div>
            </div>
            <div class="col-3">
                <div class="textinput">
                    <input name="date" class="form-control" type="date" />
                    <span id="startDateSelected"></span>
                </div>
            </div>
            <div class="col-3">
                <div class="normalboldmd">&#160 Time:</div>
            </div>
            <div class="col-3">
                <div class="textinput mb-3">
                    <input name="time" class="form-control" type="time" />
                        <span id="startDateSelected"></span>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-3">
                <div class="normalboldmd">Address</div>
            </div>
            <div class="col-3">
                <div class="textinput mb-3">
                    <select class="form-select form-select-lg" id="Address" name="Address">
                        <option selected value="2">---</option>
                        <option value="1">39E Delambre Drive, Nickol</option>
                        <option value="2">39 Bajamalu Drive, Baynton</option>
                        <option value="3">39B Delambre Drive, Nickol</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="normalboldmd">&#160 Inspector:</div>
            </div>
            <div class="col-3">
                <div class="textinput mb-3">
                    <input name="Inspector" class="form-control" type="text" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 normalboldsm">Visitor signed?</div>
            <div class="col-3 normalboldsm textinput">
                <select class="form-select form-select-lg" name="visitorsigned">
                    <option selected>---</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
        </div>
        <br><br><br><br><br><br>
        <table class="table table-bordered border-primary-subtle">
            <tr class="table-secondary">
                <td style="width: 65%;" colspan="2" class="listtxt">Saftey Devices</td>
                <td style="width: 7%;" class="listtxt">Inspector agrees</td>
                <td class="listtxt">Inspector comments</td>
            </tr>
            <tr>
                <td class="listtxt">Smoke Alarm</td>
                <td class="listtxt">Clean and in good condition, Expiry Date</td>
                <td><input style="margin: auto; display: flex;" name="smokealarmc" class="form-check-input" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="smokealarm" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Fire Extinguisher</td>
                <td class="listtxt">Smoke alarms are secure and intact to property, green light active</td>
                <td><input style="margin: auto; display: flex;" name="fireextinguisherc" class="form-check-input" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="fireextinguisher" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">PPE Kits</td>
                <td class="listtxt">Store at safe place, Expiry Date</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="ppekitsc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="ppekits" rows="2"></textarea></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="4" class="listtxt">Front Garden</td>
            </tr>
            <tr>
                <td class="listtxt">Letterbox </td>
                <td class="listtxt">Check for letter at front of complex </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="letterboxc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="letterbox" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Garden Beds</td>
                <td class="listtxt">All Plants are healthy and well maintained </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="gardenbedsc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="gardenbeds" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Bins</td>
                <td class="listtxt">Bins are clean, empty regularly </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="binsc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="bins" rows="2"></textarea></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="4" class="listtxt">Cleanliness</td>
            </tr>
            <tr>
                <td class="listtxt">Living Room</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="livingroomc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="livingroom" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Kitchen Area</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="kitchenareac" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="kitchenarea" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Fridge</td>
                <td class="listtxt">Neat and Tidy, Clean regularly </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="fridgec" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="fridge" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Laundry</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="laundryc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="laundry" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Bedroom 1</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="bedroom1c" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="bedroom1" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Bedroom 2</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests  </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="bedroom2c" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="bedroom2" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Bedroom 3</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests  </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="bedroom3c" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="bedroom3" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Toilets</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests  </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="toiletsc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="toilets" rows="2"></textarea></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="4" class="listtxt">Rear Garden</td>
            </tr>
            <tr>
                <td class="listtxt">Lawns</td>
                <td class="listtxt">The Lawns have been mowed and are neat and tidy</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="lawnsc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="lawns" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Gas Bottle</td>
                <td class="listtxt">2 gas bottle secured, checked if empty or full </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="gasbottlec" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="gasbottle" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Storage</td>
                <td class="listtxt">Storage room is neat and tidy </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="storagec" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="storage" rows="2"></textarea></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="4" class="listtxt">39B Delambre</td>
            </tr>
            <tr id="DR1">
                <td class="listtxt">Couch/Sofa</td>
                <td class="listtxt">Protection sheets are in use</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" id="PSAIU1" name="couchsofac" disabled type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" id="PSAIUC" disabled name="couchsofa"  rows="2"></textarea></td>
            </tr>
            <tr id="DR2">
                <td class="listtxt">Bed</td>
                <td class="listtxt">Protection sheets are in use</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" id="PSAIUC2" name="bedc" type="checkbox" disabled></td>
                <td><textarea style="font-size: 20px;" class="form-control" disabled id="PSAIU2" name="bed" rows="2"></textarea></td>
            </tr>
        </table>
        <div class="">
            <div class="normalboldmd">Additional comments</div>
            <textarea style="font-size: 30px;" class="form-control" name="additionalcomments"  rows="3"></textarea>
        </div>
        
        <br>
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
                    <button type="button" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 3rem;" class="btn btn-danger" data-bs-dismiss="modal">Nah
                    </button>
                    <input type="submit" name="formSubmit"  style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 3rem;" value="Submit" class="btn btn-success"></input>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </form>
    <script>
    function scroll(){
        if(document.getElementById("Address").value == "3"){
        document.getElementById("PSAIU2").removeAttribute("disabled");
        document.getElementById("PSAIUC2").removeAttribute("disabled");
        document.getElementById("PSAIU1").removeAttribute("disabled");
        document.getElementById("PSAIUC").removeAttribute("disabled");
        document.getElementById("DR1").removeAttribute("class");
        document.getElementById("DR2").removeAttribute("class");
    }else{
        document.getElementById("PSAIU2").setAttribute("disabled", "");
        document.getElementById("PSAIUC2").setAttribute("disabled", "");
        document.getElementById("PSAIU1").setAttribute("disabled", "");
        document.getElementById("PSAIUC").setAttribute("disabled", "");
        document.getElementById("DR1").setAttribute("class", "table-secondary");
        document.getElementById("DR2").setAttribute("class", "table-secondary");
    }
    }

    window.onscroll = scroll;
    </script>

</body>
</html>