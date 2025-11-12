<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nama = $_POST["nama"] ?? '';
  $email = $_POST["email"] ?? '';

  // Validasi sederhana
  if (!empty($nama) && !empty($email)) {
    $stmt = $conn->prepare("INSERT INTO hubungikami (nama, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama, $email);

    if ($stmt->execute()) {
      echo "success";
    } else {
      echo "error";
    }

    $stmt->close();
  } else {
    echo "invalid";
  }

  $conn->close();
}
?>
