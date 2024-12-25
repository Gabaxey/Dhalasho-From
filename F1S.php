<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhalasho Form</title>
    <link rel="stylesheet" href="F1.S.css">
</head>
<body>
    <div class="container">
        <h2>Fadlan Gali Xogtaada</h2>
        <form method="POST" action="process.php">
            <label>Magaca Qofka:</label>
            <input type="text" name="magaca_qofka" required>
            <label>Taariikhda Dhalashada:</label>
            <input type="date" name="taariikhda_dhalashada" required>
            <label>Goobta Dhashay:</label>
            <input type="text" name="goobta_dhashay">
            <label>Jinsiga:</label>
            <select name="jinsiga">
                <?php
                // Ku xiro database
                $conn = new mysqli("localhost", "root", "", "xogta_dhalasho");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Ka hel jinsiga options
                $result = $conn->query("SELECT DISTINCT jinsiga FROM users WHERE jinsiga IS NOT NULL");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['jinsiga'] . "'>" . $row['jinsiga'] . "</option>";
                    }
                } else {
                    echo "<option value='Lab'>Lab</option>";
                    echo "<option value='Dhadig'>Dhadig</option>";
                }
                ?>
            </select>
            <label>Xaaladda Guur:</label>
            <select name="xaaladda_guur">
                <?php
                // Ka hel xaaladda guur options
                $result = $conn->query("SELECT DISTINCT xaaladda_guur FROM users WHERE xaaladda_guur IS NOT NULL");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['xaaladda_guur'] . "'>" . $row['xaaladda_guur'] . "</option>";
                    }
                } else {
                    echo "<option value='Guursaday'>Guursaday</option>";
                    echo "<option value='Aan Guursan'>Aan Guursan</option>";
                    echo "<option value='H.Radinaya'>H.Radinaya</option>";
                    echo "<option value='La furay'>La furay</option>";
                }
                ?>
            </select>
            <label>Meesha Daggan:</label>
            <input type="text" name="meesha_daggan">
            <label>Magaca Hooyada:</label>
            <input type="text" name="magaca_hooyada">
            <label>Taariikhda La Bixiyay:</label>
            <input type="date" name="taariikhda_labixiyay">
            <label>Shaqada Qofka:</label>
            <input type="text" name="shaqada_qofka">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
