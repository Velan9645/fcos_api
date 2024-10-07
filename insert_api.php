<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "165.232.184.202:15644";
$username = "avnadmin";
$password = "AVNS_L8JRTMLvztKOKDjzZTT";
$dbname = "if0_37120445_fcos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    http_response_code(500);
    die(json_encode(["message" => "Connection failed"]));
}

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    http_response_code(400);
    die(json_encode(["message" => "Invalid input data", "received_data" => file_get_contents("php://input")]));
}

// List of required fields
$required_fields = [
    'category', 'candidateName', 'dob', 'age', 'gender', 'contactPhoneNo', 'contactEmailId',
    'address', 'city', 'district', 'state', 'aadharNumber', 'qualification', 'currentCompanyName',
    'experience', 'expectingJob', 'currentSalary', 'expectingSalary', 'accommodation', 'food',
    'placed', 'biodataReceivedDate', 'status', 'proposedCompanyNameJoinedOrPlaced', 'dateOfJoined',
    'lastUpdateDate', 'remarks', 'epfNumber', 'esiNumber'
];

// Check for missing fields
foreach ($required_fields as $field) {
    if (!isset($data[$field])) {
        http_response_code(400);
        die(json_encode(["message" => "Missing field: " . $field]));
    }
}

// Assign variables
$category = $data['category'];
$candidateName = $data['candidateName'];
$dob = $data['dob'];
$age = $data['age'];
$gender = $data['gender'];
$contactPhoneNo = $data['contactPhoneNo'];
$contactEmailId = $data['contactEmailId'];
$address = $data['address'];
$city = $data['city'];
$district = $data['district'];
$state = $data['state'];
$aadharNumber = $data['aadharNumber'];
$qualification = $data['qualification'];
$currentCompanyName = $data['currentCompanyName'];
$experience = $data['experience'];
$expectingJob = $data['expectingJob'];
$currentSalary = $data['currentSalary'];
$expectingSalary = $data['expectingSalary'];
$accommodation = $data['accommodation'];
$food = $data['food'];
$placed = $data['placed'];
$biodataReceivedDate = $data['biodataReceivedDate'];
$status = $data['status'];
$proposedCompanyNameJoinedOrPlaced = $data['proposedCompanyNameJoinedOrPlaced'];
$dateOfJoined = $data['dateOfJoined'];
$lastUpdateDate = $data['lastUpdateDate'];
$remarks = $data['remarks'];
$epfNumber = $data['epfNumber'];
$esiNumber = $data['esiNumber'];

$stmt = $conn->prepare("INSERT INTO Candidates (category, candidateName, dob, age, gender, contactPhoneNo, contactEmailId, address, city, district, state, aadharNumber, qualification, currentCompanyName, experience, expectingJob, currentSalary, expectingSalary, accommodation, food, placed, biodataReceivedDate, status, proposedCompanyNameJoinedOrPlaced, dateOfJoined, lastUpdateDate, remarks, epfNumber, esiNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    http_response_code(500);
    die(json_encode(["message" => "Failed to prepare statement"]));
}

$stmt->bind_param("sssisssssssssssssssssssssssss",
    $category,
    $candidateName,
    $dob,
    $age,
    $gender,
    $contactPhoneNo,
    $contactEmailId,
    $address,
    $city,
    $district,
    $state,
    $aadharNumber,
    $qualification,
    $currentCompanyName,
    $experience,
    $expectingJob,
    $currentSalary,
    $expectingSalary,
    $accommodation,
    $food,
    $placed,
    $biodataReceivedDate,
    $status,
    $proposedCompanyNameJoinedOrPlaced,
    $dateOfJoined,
    $lastUpdateDate,
    $remarks,
    $epfNumber,
    $esiNumber
);

if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(["message" => "Data inserted successfully"]);
} else {
    http_response_code(500);
    echo json_encode(["message" => "Error inserting data: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
