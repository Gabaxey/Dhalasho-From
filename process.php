<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xogta_dhalasho";

// Xiriir Database
$conn = new mysqli($servername, $username, $password, $dbname);

// Haddii xiriirka uu guuldareysto
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Hel xogta ka timid form-ka
$magaca_qofka = $_POST['magaca_qofka'];
$taariikhda_dhalashada = $_POST['taariikhda_dhalashada'];
$goobta_dhashay = $_POST['goobta_dhashay'];
$jinsiga = $_POST['jinsiga'];
$xaaladda_guur = $_POST['xaaladda_guur'];
$meesha_daggan = $_POST['meesha_daggan'];
$magaca_hooyada = $_POST['magaca_hooyada'];
$taariikhda_labixiyay = $_POST['taariikhda_labixiyay'];
$shaqada_qofka = $_POST['shaqada_qofka'];

// Ku dar xogta database
$sql = "INSERT INTO users (magaca_qofka, taariikhda_dhalashada, goobta_dhashay, jinsiga, xaaladda_guur, meesha_daggan, magaca_hooyada, taariikhda_labixiyay, shaqada_qofka)
VALUES ('$magaca_qofka', '$taariikhda_dhalashada', '$goobta_dhashay', '$jinsiga', '$xaaladda_guur', '$meesha_daggan', '$magaca_hooyada', '$taariikhda_labixiyay', '$shaqada_qofka')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Xogta waa lagu daray!'); window.location.href='display.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
