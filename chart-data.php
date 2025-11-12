<?php
include 'config.php';

$data = [];
$sql = "SELECT kategori, jumlah FROM tentangkami";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Kirim data dalam format JSON ke JavaScript
header('Content-Type: application/json');
echo json_encode($data);
?>