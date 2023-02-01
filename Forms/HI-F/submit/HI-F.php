
<!DOCTYPE html>
<html>

<head>
    <title>Fatal error</title>
    <h1>If you are seeing this then something has gone wrong please try again later</h1>
</head>

<?php
session_start();
    if($_POST['formSubmit'] == "Submit"){
    $date = $_POST['date']; 
    $time = $_POST['time']; 
    $Address = $_POST['Address']; 
    $Inspector = $_POST['Inspector']; 
    $smokealarmc = $_POST['smokealarmc']; 
    $smokealarm = $_POST['smokealarm']; 
    $fireextinguisherc = $_POST['fireextinguisherc']; 
    $fireextinguisher = $_POST['fireextinguisher']; 
    $ppekitsc = $_POST['ppekitsc']; 
    $ppekits = $_POST['ppekits']; 
    $letterboxc = $_POST['letterboxc']; 
    $letterbox = $_POST['letterbox']; 
    $gardenbedsc = $_POST['gardenbedsc']; 
    $gardenbeds = $_POST['gardenbeds']; 
    $binsc = $_POST['binsc']; 
    $bins = $_POST['bins']; 
    $livingroomc = $_POST['livingroomc']; 
    $livingroom = $_POST['livingroom']; 
    $kitchenareac = $_POST['kitchenareac']; 
    $kitchenarea = $_POST['kitchenarea']; 
    $fridgec = $_POST['fridgec']; 
    $fridge = $_POST['fridge']; 
    $laundryc = $_POST['laundryc']; 
    $laundry = $_POST['laundry']; 
    $bedroom1c = $_POST['bedroom1c']; 
    $bedroom1 = $_POST['bedroom1']; 
    $bedroom2c = $_POST['bedroom2c']; 
    $bedroom2 = $_POST['bedroom2']; 
    $bedroom3c = $_POST['bedroom3c']; 
    $bedroom3 = $_POST['bedroom3']; 
    $toiletsc = $_POST['toiletsc']; 
    $toilets = $_POST['toilets']; 
    $lawnsc = $_POST['lawnsc']; 
    $lawns = $_POST['lawns']; 
    $gasbottlec = $_POST['gasbottlec']; 
    $gasbottle = $_POST['gasbottle']; 
    $storagec = $_POST['storagec']; 
    $storage = $_POST['storage']; 
    $couchsofac = $_POST['couchsofac']; 
    $couchsofa = $_POST['couchsofa']; 
    $bedc = $_POST['bedc']; 
    $bed = $_POST['bed']; 
    $id = $_SESSION['id'];
    $visitorsigned = $_POST['visitorsigned'];
    $additionalcomments = $_POST['additionalcomments'];
}
require_once "../../../Backend/config.php";
$sql = "INSERT INTO hi_f_tb (
date,
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
additionalcomments)

VALUES 

(
'$date',
'$time',
'$Address',
'$Inspector',
'$smokealarmc',
'$smokealarm',
'$fireextinguisherc',
'$fireextinguisher',
'$ppekitsc',
'$ppekits',
'$letterboxc',
'$letterbox',
'$gardenbedsc',
'$gardenbeds',
'$binsc',
'$bins',
'$livingroomc',
'$livingroom',
'$kitchenareac',
'$kitchenarea',
'$fridgec',
'$fridge',
'$laundryc',
'$laundry',
'$bedroom1c',
'$bedroom1',
'$bedroom2c',
'$bedroom2',
'$bedroom3c',
'$bedroom3',
'$toiletsc',
'$toilets',
'$lawnsc',
'$lawns',
'$gasbottlec',
'$gasbottle',
'$storagec',
'$storage',
'$couchsofac',
'$couchsofa',
'$bedc',
'$bed',
'$id',
'$visitorsigned',
'$additionalcomments'
)";

if($Address == "1"){
    $adr = "39ede";
}elseif($Address == "2"){
    $adr = "39baj";
}elseif($Address == "3"){
    $adr = "39bde";
}

if($conn->query($sql) === TRUE){
    echo "Data submitted successfully";
    $lastid = $conn->insert_id;
    $conn->close();
    // Set up the cURL request
    $ch = curl_init("localhost:3000/saveformhif?formid=" . $lastid . "&adr=" . $adr);
    curl_setopt($ch, CURLOPT_POST, 1);
    // Execute the cURL request
    $result = curl_exec($ch);
    // Close the cURL request
    curl_close($ch);

    $_SESSION['datasbm'] = 0; // success code see homepage.php for more details 



    header("Location: ../../../Pages/HomePage.php");
    exit();
} else{
    echo "Error submitting data: " . $sql . "<br>";
    $_SESSION['datasbm'] = 1; //error code
}

$conn->close();

?>
</html>