<?php
require 'vendor/autoload.php'; // Make sure you have installed PhpSpreadsheet via Composer

use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file']['tmp_name'];

    try {
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();

        // Prepare JSON response
        $response = [
            'headers' => $data[0], // First row as headers
            'rows' => array_slice($data, 1) // Remaining rows as data
        ];

        header('Content-Type: application/json');
        echo json_encode($response);

    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to process the file.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'No file uploaded.']);
}
?>
