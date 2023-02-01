<!DOCTYPE html>
<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="GoodTurnServices online Incident Report form">
    <meta name="keywords" content="GoodTurnServices">
    <meta name="author" content="Prashan Wijesinghe">
    <meta name="viewport" content="width=device-width, initial-scale=0.2">
    <link rel="stylesheet" href="../../css/Form.css">   
    <link href="../../Forms/HI-F/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.bundle.min.js"></script>
    
    
</head> 
<html lang="en" >
<body>
    <?php
    require_once "../config.php";
    $sql = "SELECT date,
    time,
    address,
    inspector,
    smokealarmc,
    smokealarm,
    fireextinguisherc,
    fireextinguisher,
    ppekitsc,
    ppekits,
    letterboxc,
    letterbox,
    gardenbedsc,
    gardenbeds,
    binsc,
    bins,
    livingroomc,
    livingroom,
    kitchenareac,
    kitchenarea,
    fridgec,
    fridge,
    laundryc,
    laundry,
    bedroom1c,
    bedroom1,
    bedroom2c,
    bedroom2,
    bedroom3c,
    bedroom3,
    toiletsc,
    toilets,
    lawnc,
    lawn,
    gasbottlec,
    gasbottle,
    storagec,
    storage,
    couchsofac,
    couchsofa,
    bedc,
    bed,
    id,
    visitorsigned,
    additionalcomments FROM hi_f_tb WHERE formid = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $param_formid);       
    $param_formid = $_GET["formid"];
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $date, $time, $Address, $Inspector, $smokealarmc, $smokealarm, $fireextinguisherc, $fireextinguisher, $ppekitsc, $ppekits, $letterboxc, $letterbox, $gardenbedsc, $gardenbeds, $binsc, $bins, $livingroomc, $livingroom, $kitchenareac, $kitchenarea, $fridgec, $fridge, $laundryc, $laundry, $bedroom1c, $bedroom1, $bedroom2c, $bedroom2, $bedroom3c, $bedroom3, $toiletsc, $toilets, $lawnsc, $lawns, $gasbottlec, $gasbottle, $storagec, $storage, $couchsofac, $couchsofa, $bedc, $bed, $id, $visitorsigned, $additionalcomments);
    mysqli_stmt_fetch($stmt);
    ?>

    <form style="margin: 190px;" action="../../Backend/Submitforms/HI-F.php" method="POST">
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
                    <input name="date" class="form-control" value="<?php echo $date;?>" type="date" />
                    <span id="startDateSelected"></span>
                </div>
            </div>
            <div class="col-3">
                <div class="normalboldmd">&#160 Time:</div>
            </div>
            <div class="col-3">
                <div class="textinput mb-3">
                    <input name="time" class="form-control" value="<?php echo $time;?>" type="time" />
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
                    <select class="form-select form-select-lg" id="Address"  value="<?php echo $Address?>">
                        <option <?php if ($Address == "1") {echo "selected";} ?>>39E Delambre Drive, Nickol</option>
                        <option <?php if ($Address == "2") {echo "selected";} ?>>39 Bajamalu Drive, Baynton</option>
                        <option <?php if ($Address == "3") {echo "selected";} ?>>39B Delambre Drive, Nickol</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="normalboldmd">&#160 Inspector:</div>
            </div>
            <div class="col-3">
                <div class="textinput mb-3">
                    <input name="Inspector" value="<?php echo $Inspector;?>" class="form-control" type="text" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 normalboldsm">Visitor signed?</div>
            <div class="col-3 normalboldsm textinput">
                <select class="form-select form-select-lg" name="visitorsigned"  value="<?php echo $visitorsigned?>">
                    <option <?php if ($visitorsigned == "1") {echo "selected";} ?>>Yes</option>
                    <option <?php if ($visitorsigned == "2") {echo "selected";} ?>>No</option>
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
                <td><input style="margin: auto; display: flex;" name="smokealarmc" <?php if ($smokealarmc == true) {echo "checked";} ?> class="form-check-input" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="smokealarm" rows="2"><?php echo $smokealarm; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Fire Extinguisher</td>
                <td class="listtxt">Smoke alarms are secure and intact to property, green light active</td>
                <td><input style="margin: auto; display: flex;" name="fireextinguisherc" <?php if ($fireextinguisherc == true) {echo "checked";} ?> class="form-check-input" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="fireextinguisher" rows="2"><?php echo $fireextinguisher; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">PPE Kits</td>
                <td class="listtxt">Store at safe place, Expiry Date</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" <?php if ($ppekitsc == true) {echo "checked";} ?>  name="ppekitsc" type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="ppekits" rows="2"><?php echo $ppekits; ?></textarea></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="4" class="listtxt">Front Garden</td>
            </tr>
            <tr>
                <td class="listtxt">Letterbox </td>
                <td class="listtxt">Check for letter at front of complex </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="letterboxc" <?php if ($letterboxc == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="letterbox" rows="2"><?php echo $letterbox; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Garden Beds</td>
                <td class="listtxt">All Plants are healthy and well maintained </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="gardenbedsc" <?php if ($gardenbedsc == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="gardenbeds" rows="2"><?php echo $gardenbeds; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Bins</td>
                <td class="listtxt">Bins are clean, empty regularly </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="binsc" <?php if ($binsc == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="bins" rows="2"><?php echo $bins; ?></textarea></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="4" class="listtxt">Cleanliness</td>
            </tr>
            <tr>
                <td class="listtxt">Living Room</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="livingroomc" <?php if ($livingroomc == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="livingroom" rows="2"><?php echo $livingroom; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Kitchen Area</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="kitchenareac" <?php if ($kitchenareac == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="kitchenarea" rows="2"><?php echo $kitchenarea; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Fridge</td>
                <td class="listtxt">Neat and Tidy, Clean regularly </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="fridgec" <?php if ($fridgec == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="fridge" rows="2"></textarea><?php echo $fridge; ?></td>
            </tr>
            <tr>
                <td class="listtxt">Laundry</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="laundryc" <?php if ($laundryc == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="laundry" rows="2"><?php echo $laundry; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Bedroom 1</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="bedroom1c" <?php if ($bedroom1c == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="bedroom1" rows="2"><?php echo $bedroom1; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Bedroom 2</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests  </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="bedroom2c" <?php if ($bedroom2c == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="bedroom2" rows="2"><?php echo $bedroom2; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Bedroom 3</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests  </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="bedroom3c" <?php if ($bedroom3c == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="bedroom3" rows="2"><?php echo $bedroom3; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Toilets</td>
                <td class="listtxt">Neat and Tidy, free of dirt, no pests  </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="toiletsc" <?php if ($toiletsc == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="toilets" rows="2"><?php echo $toilets; ?></textarea></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="4" class="listtxt">Rear Garden</td>
            </tr>
            <tr>
                <td class="listtxt">Lawns</td>
                <td class="listtxt">The Lawns have been mowed and are neat and tidy</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="lawnsc" <?php if ($lawnsc == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="lawns" rows="2"><?php echo $lawns; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Gas Bottle</td>
                <td class="listtxt">2 gas bottle secured, checked if empty or full </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="gasbottlec" <?php if ($gasbottlec == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="gasbottle" rows="2"><?php echo $gasbottle; ?></textarea></td>
            </tr>
            <tr>
                <td class="listtxt">Storage</td>
                <td class="listtxt">Storage room is neat and tidy </td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" name="storagec" <?php if ($storagec == true) {echo "checked";} ?> type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" name="storage" rows="2"><?php echo $storage; ?></textarea></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="4" class="listtxt">39B Delambre</td>
            </tr>
            <tr id="DR1">
                <td class="listtxt">Couch/Sofa</td>
                <td class="listtxt">Protection sheets are in use</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" id="PSAIU1" name="couchsofac" <?php if ($couchsofac == true) {echo "checked";} ?> disabled type="checkbox"></td>
                <td><textarea style="font-size: 20px;" class="form-control" id="PSAIUC" disabled name="couchsofa" rows="2"><?php echo $couchsofa; ?></textarea></td>
            </tr>
            <tr id="DR2">
                <td class="listtxt">Bed</td>
                <td class="listtxt">Protection sheets are in use</td>
                <td><input style="margin: auto; display: flex;" class="form-check-input" id="PSAIUC2" name="bedc" <?php if ($bedc == true) {echo "checked";} ?> type="checkbox" disabled></td>
                <td><textarea style="font-size: 20px;" class="form-control" disabled id="PSAIU2" name="bed" rows="2"><?php echo $bed; ?></textarea></td>
            </tr>
        </table>
        <div class="">
            <div class="normalboldmd">Additional comments</div>
            <textarea style="font-size: 30px;" class="form-control" name="additionalcomments"  rows="3"><?php echo $additionalcomments ?></textarea>
        </div>
        <br>
    </form>
    <script>
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
    </script>

</body>
</html>