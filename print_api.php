<?php
require('fpdf186/fpdf.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
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

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['ids']) && is_array($data['ids'])) {
    $ids = implode(",", array_map('intval', $data['ids']));

    $sql = "SELECT * FROM Candidates WHERE sNo IN ($ids)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $candidates = [];

        while($row = $result->fetch_assoc()) {
            $candidates[] = $row;
        }

        generatePDF($candidates);
    } else {
        echo json_encode(["success" => false, "message" => "No candidates found"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid input"]);
}

$conn->close();

function generatePDF($candidates) {
    $pdf = new FPDF();
    $pdf->SetAutoPageBreak(true, 10);
    
    foreach ($candidates as $candidate) {
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Form Details', 0, 1, 'C');
        
        addSection($pdf, 'Personal Information', [
            'Category' => $candidate['category'],
            'Candidate Name' => $candidate['candidateName'],
            'Date of Birth' => $candidate['dob'],
            'Age' => $candidate['age'],
            'Gender' => $candidate['gender'],
            'Aadhar Number' => $candidate['aadharNumber'],
            'Marital Status' => $candidate['maritalStatus'],
            'Account Number' => $candidate['accountNumber'],
            'IFSC Code' => $candidate['ifscCode'],
            'Branch' => $candidate['branch'],
            'Shirt Size' => $candidate['shirtSize'],
            'Pant Size' => $candidate['pantSize'],
            'Shoe Size' => $candidate['shoeSize']
        ]);

        addSection($pdf, 'Communication', [
            'Phone Number' => $candidate['contactPhoneNo'],
            'Alternate Phone Number' => $candidate['alternateContactPhoneNo'],
            'Email' => $candidate['contactEmailId'],
            'Pin Code' => $candidate['pincode'],
            'Address' => $candidate['address'],
            'City' => $candidate['city'],
            'District' => $candidate['district'],
            'State' => $candidate['state']
        ]);

        addSection($pdf, 'Professional Information', [
            'Qualification' => $candidate['qualification'],
            'Current Company Name' => $candidate['currentCompanyName'],
            'Experience' => $candidate['experience'],
            'Expecting Job' => $candidate['expectingJob'],
            'Current Salary' => $candidate['currentSalary'],
            'Expecting Salary' => $candidate['expectingSalary'],
            'Accommodation' => $candidate['accommodation'],
            'Food' => $candidate['food']
        ]);

        addSection($pdf, 'Others', [
            'Biodata Received Date' => $candidate['biodataReceivedDate'],
            'Status' => $candidate['status'],
            'Proposed Company Name - Joined/Placed' => $candidate['proposedCompanyNameJoinedOrPlaced'],
            'Date of Joined' => $candidate['dateOfJoined'],
            'Last Update Date' => $candidate['lastUpdateDate'],
            'Remarks' => $candidate['remarks'],
            'EPF Number' => $candidate['epfNumber'],
            'ESI Number' => $candidate['esiNumber']
        ]);
    }

    $pdf->Output('D', 'candidates.pdf');
}

function addSection($pdf, $sectionTitle, $data) {
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, $sectionTitle, 0, 1);
    $pdf->SetFont('Arial', '', 12);

    foreach ($data as $label => $value) {
        $pdf->Cell(0, 10, "$label: " . ($value !== null ? $value : ''), 0, 1);
    }
    $pdf->Ln(5); // Add a little space between sections
}
?>
