<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization, X-Requested-With");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

$servername = "165.232.184.202:15644";
$username = "avnadmin";
$password = "AVNS_L8JRTMLvztKOKDjzZTT";
$dbname = "if0_37120445_fcos";

$ip = gethostbyname($servername);
echo "IP Address of $servername is $ip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Total count
$sql = "SELECT COUNT(*) as count FROM Candidates";
$result = $conn->query($sql);
$totalcount = array();
if ($result) {
    $totalcount = $result->fetch_assoc();
} else {
    $data = ["message" => "Query error: " . $conn->error];
}

// Male count
$sql = "SELECT COUNT(*) as count FROM Candidates WHERE gender='male'";
$result = $conn->query($sql);
$male = array();
if ($result) {
    $male = $result->fetch_assoc();
} else {
    $data = ["message" => "Query error: " . $conn->error];
}

// Female count
$sql = "SELECT COUNT(*) as count FROM Candidates WHERE gender='female'";
$result = $conn->query($sql);
$female = array();
if ($result) {
    $female = $result->fetch_assoc();
} else {
    $data = ["message" => "Query error: " . $conn->error];
}

if (!isset($data["message"])) {
    $data = [
        "total" => $totalcount,
        "male" => $male,
        "female" => $female
    ];
}

echo json_encode($data);

$conn->close();
?>
