<?php
    function validSignUp($uname, $email, $pw, $repw) {
        if (strpos($uname, ";") === true) {
            return [false, "Invalid Username."];
        } else if (strpos($uname, " ")) {
            return [false, "Username cannot have spaces."];
        }
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return[false, "Invalid Email."];
        }
        if (strpos($pw, ";") === true) {
            return [false, "Invalid Password."];
        }
        if ($pw != $repw) {
            return [false, "Entered Passwords don't match."];
        }
        return[true, $email];
    }
?>