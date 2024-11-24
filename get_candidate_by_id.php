<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

$servername = "165.232.184.202:15644";
$username = "avnadmin";
$password = "AVNS_L8JRTMLvztKOKDjzZTT";
$dbname = "if0_37120445_fcos";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve candidate data (e.g., by sNo passed as a query parameter)
$sNo = isset($_GET['sNo']) ? intval($_GET['sNo']) : 0;

if ($sNo > 0) {
    $sql = "SELECT * FROM Candidates WHERE sNo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $sNo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $candidate = $result->fetch_assoc();
        // Send the result as JSON
        echo json_encode([
            "success" => true,
            "data" => $candidate
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "No candidate found with sNo: $sNo"
        ]);
    }

    $stmt->close();
} else {
    echo json_encode([
        "success" => false,
        "message" => "Invalid candidate ID"
    ]);
}

// Close the connection
$conn->close();
?>
