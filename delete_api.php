<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['ids']) && is_array($input['ids'])) {
        $ids = $input['ids'];
        $ids_placeholder = implode(',', array_fill(0, count($ids), '?'));

        $servername = "165.232.184.202:15644";
        $username = "avnadmin";
        $password = "AVNS_L8JRTMLvztKOKDjzZTT";
        $dbname = "if0_37120445_fcos";


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            http_response_code(500);
            die(json_encode(["message" => "Connection failed: " . $conn->connect_error]));
        }

        // Prepare the statement
        $stmt = $conn->prepare("DELETE FROM Candidates WHERE sNo IN ($ids_placeholder)");

        if ($stmt === false) {
            http_response_code(500);
            die(json_encode(["message" => "Statement preparation failed: " . $conn->error]));
        }

        // Create the types string
        $types = str_repeat('i', count($ids));
        $stmt->bind_param($types, ...$ids);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete candidates: ' . $stmt->error]);
        }

        $stmt->close();
        $conn->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid input.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
