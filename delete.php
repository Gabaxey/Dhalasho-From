<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xogta_dhalasho";

// Ku xiro database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Xogta si guul ah ayaa loo tiray!'); window.location.href='display.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "ID ma helin.";
}

$conn->close();
?>
