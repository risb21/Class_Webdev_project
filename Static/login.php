<?php 
include 'vars.php';
$servername = "localhost";
$username = "root";
$dbname = "ok";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connection Failed");
}

// $name = $_POST["name"];
// $email = $_POST["email"];
// $pw = $_POST["password"];
// $encrypted_pw = sha1($pw.$salt);

$sql = $conn -> query("SELECT * FROM acc;");
// for ($i = 0; $i < sizeof($sql); $i++) {
//     print_r($sql[i]);
// }
echo 'Hello <br>';

if ($sql -> num_rows > 0) {
    while ($row = $sql -> fetch_assoc()) {
        print_r($row);
        echo '<br>';
    }
}

?>