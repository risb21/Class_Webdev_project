<?php 
    include ('vars.php');
    $servername = "localhost";
    $username = "root";
    $dbname = "ok";
    if (!$conn = mysqli_connect($servername, $username, $password, $dbname)) {
        die("Failed Database Connection.");
    }
    function commitSignup($uname, $email, $pw) {
        global $conn;
        global $salt;
        $encrypted_pw = sha1($pw.$salt);
        $res = mysqli_query($conn, "INSERT INTO acc VALUES(NULL, '" . $uname . "', '" . $email . "', '" . $encrypted_pw . "');");
    }
?>