
<!DOCTYPE html>
<html>

<head>
<title>Fatal error</title>
<h1>If you are seeing this then something has gone wrong please try again later</h1>
</head>

<?php
session_start();
    if($_POST['formSubmit'] == "Submit"){
    $varNameofworker = $_POST['nameofworker']; //varchar(255)
    $varNameofparticipant = $_POST['nameofparticipant']; //varchar(255)
    $varPhonenumber = $_POST['phonenumber']; //varchar(255)
    $varPositionofworker = $_POST['positionofworker']; //varchar(255)
    $varDate = $_POST['date']; //varchar(255)
    $varTime = $_POST['time']; //varchar(255)
    $varLocationofincident = $_POST['locationofincident']; //varchar(255)
    $varAbuseassult = $_POST['abuseassult']; //bool
    $varBreachofprivacy = $_POST['breachofprivacy']; //bool
    $varBehaviour = $_POST['behaviour']; //bool
    $varDeath = $_POST['death']; //bool
    $varInjury = $_POST['injury']; //bool
    $varMedication = $_POST['medication']; //bool
    $varPoorqualityofcare = $_POST['poorqualityofcare']; //bool
    $varPropertydamage = $_POST['propertydamage']; //bool
    $varRestrictivepractice = $_POST['restrictivepractice']; //bool
    $varOther = $_POST['other']; //bool
    $varOtherdetails = $_POST['otherdetails']; //varchar(255)
    $var1firstname = $_POST['1firstname']; //varchar(255)
    $var1lastname = $_POST['1lastname']; //varchar(255)
    $var1phonenumber = $_POST['1phonenumber']; //varchar(255)
    $var1email = $_POST['1email']; //varchar(255)
    $var1witness = $_POST['1witness']; //bool
    $var1injured = $_POST['1injured']; //bool
    $var2firstname = $_POST['2firstname']; //varchar(255)
    $var2lastname = $_POST['2lastname']; //varchar(255)
    $var2phonenumber = $_POST['2phonenumber']; //varchar(255)
    $var2email = $_POST['2email']; //varchar(255)
    $var2witness = $_POST['2witness']; //bool
    $var2injured = $_POST['2injured']; //bool
    $var3firstname = $_POST['3firstname']; //varchar(255)
    $var3lastname = $_POST['3lastname']; //varchar(255)
    $var3phonenumber = $_POST['3phonenumber']; //varchar(255)
    $var3email = $_POST['3email']; //varchar(255)
    $var3witness = $_POST['3witness']; //bool
    $var3injured = $_POST['3injured']; //bool
    $var4firstname = $_POST['4firstname']; //varchar(255)
    $var4lastname = $_POST['4lastname']; //varchar(255)
    $var4phonenumber = $_POST['4phonenumber']; //varchar(255)
    $var4email = $_POST['4email']; //varchar(255)
    $var4witness = $_POST['4witness']; //bool
    $var4injured = $_POST['4injured']; //bool
    $var5firstname = $_POST['5firstname']; //varchar(255)
    $var5lastname = $_POST['5lastname']; //varchar(255)
    $var5phonenumber = $_POST['5phonenumber']; //varchar(255)
    $var5email = $_POST['5email']; //varchar(255)
    $var5witness = $_POST['5witness']; //bool
    $var5injured = $_POST['5injured']; //bool
    $var6firstname = $_POST['6firstname']; //varchar(255)
    $var6lastname = $_POST['6lastname']; //varchar(255)
    $var6phonenumber = $_POST['6phonenumber']; //varchar(255)
    $var6email = $_POST['6email']; //varchar(255)
    $var6witness = $_POST['6witness']; //bool
    $var6injured = $_POST['6injured']; //bool
    $varWhathappened = $_POST['whathappened']; //mediumtext(1677215)
    $varImmediateactionstaken = $_POST['immediateactionstaken'];//mediumtext(1677215)
    $varUserconsent = $_POST['userconsent']; //bool
    $id = $_SESSION['id'];
    $assignedto = "manager";
   
}

require_once "../../../Backend/config.php";
$sql = "INSERT INTO ir_f_db (Nameofworker,
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
id,
assignedto,
stage,
complete,
positionofworker
) 
            
VALUES 

('$varNameofworker',
'$varNameofparticipant',
'$varPhonenumber',
'$varDate', 
'$varTime', 
'$varLocationofincident', 
'$varAbuseassult',
'$varBreachofprivacy', 
'$varBehaviour', 
'$varDeath', 
'$varInjury', 
'$varMedication', 
'$varPoorqualityofcare', 
'$varPropertydamage', 
'$varRestrictivepractice', 
'$varOther', 
'$varOtherdetails',
'$var1firstname', '$var1lastname', '$var1phonenumber', '$var1email', '$var1witness', '$var1injured',
'$var2firstname', '$var2lastname', '$var2phonenumber', '$var2email', '$var2witness', '$var2injured',
'$var3firstname', '$var3lastname', '$var3phonenumber', '$var3email', '$var3witness', '$var3injured',
'$var4firstname', '$var4lastname', '$var4phonenumber', '$var4email', '$var4witness', '$var4injured',
'$var5firstname', '$var5lastname', '$var5phonenumber', '$var5email', '$var5witness', '$var5injured',
'$var6firstname', '$var6lastname', '$var6phonenumber', '$var6email', '$var6witness', '$var6injured',
'$varWhathappened', 
'$varImmediateactionstaken', 
'$varUserconsent',
'$id',
'$assignedto',
'2',
'0',
'$varPositionofworker'
)";
// to do add position of worker to the sql database
if($conn->query($sql) === TRUE){
    echo "Data submitted successfully";
    $lastid = $conn->insert_id;
    $conn->close();
    // Set up the cURL request
    $ch = curl_init("localhost:3000/saveformirf?formid=" . $lastid);
    curl_setopt($ch, CURLOPT_POST, 1);
    // Execute the cURL request
    $result = curl_exec($ch);
    // Close the cURL request
    curl_close($ch);
    

    $_SESSION['datasbm'] = 0; // success code see homepage.php for more details 

    header("Location: ../../../Pages/HomePage.php");
    exit();
} else{
    $_SESSION['datasbm'] = 1; //error code 
    $conn->close();
    echo "Error submitting data: " . $sql . "<br>";
    header("Location: ../../../Pages/HomePage.php");
    exit();
}






?>