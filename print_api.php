<?php
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
?>
<?php
$sql = "SELECT id, name, position, department FROM employees";
$result = $conn->query($sql);

$employeeData = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $employeeData[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<?php
require_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Employee Details');
$pdf->SetSubject('Employee Details PDF');
$pdf->SetKeywords('TCPDF, PDF, employee, details');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// add a page
$pdf->AddPage();

// set font
$pdf->SetFont('helvetica', '', 12);

// create table
$html = '<h1>Employee Details</h1>
<table border="1" cellpadding="3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>';

foreach ($employeeData as $employee) {
    $html .= '<tr>
                <td>' . $employee['id'] . '</td>
                <td>' . $employee['name'] . '</td>
                <td>' . $employee['position'] . '</td>
                <td>' . $employee['department'] . '</td>
              </tr>';
}

$html .= '</tbody></table>';

$pdf->writeHTML($html, true, false, true, false, '');

// output the PDF
$pdf->Output(.$employee['id'] .''.$employee['name'].'.pdf', 'D');
?>
