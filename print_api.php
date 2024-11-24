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

    // Use a font that supports UTF-8 characters
    $pdf->AddFont('Arial', '', 'Arial.php');  // You may need to download the Arial font in FPDF format
    $pdf->SetFont('Arial', '', 12);

    foreach ($candidates as $candidate) {
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Candidate Fact Sheet', 0, 1, 'C');
        $pdf->Ln(5); // Add space

        // Use correct currency symbol for Salary
        addStyledSection($pdf, 'CANDIDATE PERSONAL DETAILS', [
            ['Name', $candidate['candidateName']],
            ['Date of Birth', $candidate['dob']],
            ['Gender', $candidate['gender']],
            ['Contact Phone No.', $candidate['contactPhoneNo']],
            ['Email Address', $candidate['contactEmailId']],
        ]);

        addStyledSection($pdf, 'JOB INFORMATION', [
            ['Current Company', $candidate['currentCompanyName']],
            ['Experience', $candidate['experience']],
            ['Expecting Job', $candidate['expectingJob']],
            ['Current Salary', '₹' . number_format($candidate['currentSalary'], 2)],
            ['Expecting Salary', '₹' . number_format($candidate['expectingSalary'], 2)],
        ]);

        addStyledSection($pdf, 'EDUCATION', [
            ['Qualification', $candidate['qualification']],
            ['University', $candidate['university'] ?? 'N/A'],
            ['Percentage', $candidate['percentage'] ?? 'N/A'],
        ]);

        $pdf->Ln(10); // Add spacing after sections
    }

    $pdf->Output('D', 'candidates.pdf');
}

function addStyledSection($pdf, $sectionTitle, $fields) {
    // Section title
    $pdf->SetFillColor(200, 220, 255); // Light Blue
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, $sectionTitle, 0, 1, 'L', true);
    $pdf->Ln(3); // Small space

    // Field Rows
    $pdf->SetFont('Arial', '', 12);
    foreach ($fields as $field) {
        $pdf->SetFillColor(240, 240, 240); // Light Grey
        $pdf->Cell(50, 8, $field[0] . ':', 1, 0, 'L', true);
        $pdf->Cell(140, 8, $field[1] ?? 'N/A', 1, 1, 'L'); // Wrap value into cell
    }
    $pdf->Ln(5); // Space after section
}
?>
