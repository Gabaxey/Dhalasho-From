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

// Hel xogta qofka la edit-garaynayo
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Qofka laguma helin.";
        exit;
    }
}

// Save xogta cusub
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $magaca_qofka = $_POST['magaca_qofka'];
    $taariikhda_dhalashada = $_POST['taariikhda_dhalashada'];
    $goobta_dhashay = $_POST['goobta_dhashay'];
    $jinsiga = $_POST['jinsiga'];
    $xaaladda_guur = $_POST['xaaladda_guur'];

    $sql = "UPDATE users SET 
                magaca_qofka='$magaca_qofka', 
                taariikhda_dhalashada='$taariikhda_dhalashada', 
                goobta_dhashay='$goobta_dhashay', 
                jinsiga='$jinsiga', 
                xaaladda_guur='$xaaladda_guur' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Xogta si guul ah ayaa loo saxay!'); window.location.href='display.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Qof</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        label, input, select, button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Qof</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Magaca Qofka:</label>
            <input type="text" name="magaca_qofka" value="<?php echo $row['magaca_qofka']; ?>" required>
            <label>Taariikhda Dhalashada:</label>
            <input type="date" name="taariikhda_dhalashada" value="<?php echo $row['taariikhda_dhalashada']; ?>" required>
            <label>Goobta Dhashay:</label>
            <input type="text" name="goobta_dhashay" value="<?php echo $row['goobta_dhashay']; ?>">
            <label>Jinsiga:</label>
            <select name="jinsiga">
                <option value="Lab" <?php echo $row['jinsiga'] == 'Lab' ? 'selected' : ''; ?>>Lab</option>
                <option value="Dhadig" <?php echo $row['jinsiga'] == 'Dhadig' ? 'selected' : ''; ?>>Dhadig</option>
            </select>
            <label>Xaaladda Guur:</label>
            <select name="xaaladda_guur">
                <option value="Guursaday" <?php echo $row['xaaladda_guur'] == 'Guursaday' ? 'selected' : ''; ?>>Guursaday</option>
                <option value="Aan Guursan" <?php echo $row['xaaladda_guur'] == 'Aan Guursan' ? 'selected' : ''; ?>>Aan Guursan</option>
                <option value="H.Radinaya" <?php echo $row['xaaladda_guur'] == 'H.Radinaya' ? 'selected' : ''; ?>>H.Radinaya</option>
                <option value="La furay" <?php echo $row['xaaladda_guur'] == 'La furay' ? 'selected' : ''; ?>>La furay</option>
            </select>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
