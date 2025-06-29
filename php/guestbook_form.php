<?php
include('db.php');

$name = $_POST['name'];
$message = $_POST['message'];

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$stmt = $conn->prepare("INSERT INTO guestbook (name, message) VALUES (?, ?)");

if ($stmt === false) {
    die('Fehler beim Erstellen des Prepared Statements: ' . $conn->error);
}

$stmt->bind_param("ss", $name, $message);

// Statement ausführen
if ($stmt->execute()) {
    echo "Neuer Gästebucheintrag erfolgreich gesendet, vielen Dank!";
} else {
    echo "Fehler: " . $stmt->error;
}

// Prepared Statement schließen
$stmt->close();

// Verbindung schließen
$conn->close();
?>