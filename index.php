<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

$servername = "165.232.184.202:15644";
$username = "avnadmin";
$password = "AVNS_L8JRTMLvztKOKDjzZTT";
$dbname = "if0_37120445_fcos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Candidates";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    $data = ["message" => "No records found"];
}

echo json_encode($data);

$conn->close();
?>
