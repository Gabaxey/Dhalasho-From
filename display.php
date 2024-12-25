<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xogta_dhalasho";

// Xiriir Database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Hel xogta users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #dddddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            padding: 8px 16px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-edit {
            background-color: #2196F3;
            color: white;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Users Table</h2>
    <table>
        <tr>
            <th>Magaca</th>
            <th>Taariikhda Dhalashada</th>
            <th>Goobta</th>
            <th>Jinsiga</th>
            <th>Xaaladda Guur</th>
            <th>Tallaabo</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['magaca_qofka'] . "</td>
                        <td>" . $row['taariikhda_dhalashada'] . "</td>
                        <td>" . $row['goobta_dhashay'] . "</td>
                        <td>" . $row['jinsiga'] . "</td>
                        <td>" . $row['xaaladda_guur'] . "</td>
                        <td>
                            <a href='edit.php?id=" . $row['id'] . "' class='btn btn-edit'>Edit</a>
                            <a href='delete.php?id=" . $row['id'] . "' class='btn btn-delete' onclick='return confirm(\"Ma hubtaa inaad tirtirayso xogtan?\")'>Delete</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Xog lama helin</td></tr>";
        }
        ?>
    </table>
    <a href="F1S.php" class="btn btn-edit">Ku dar Qof Cusub</a>
</body>
</html>
<?php
$conn->close();
?>
