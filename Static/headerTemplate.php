<?php 
session_start();
include ('validation.php');
include ('connection.php');
$loggedinstr = "<form method='POST' action='" . $_SERVER['PHP_SELF'] .
               "'  id='logout'>". " <input type='submit'  id='LO' value='Log Out' name='logout'></form>";
$defaultstr = "<a id='login' href='#'>Log In</a><a id='signup' href='#'>Sign up</a>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['logout'])) {
        if (isset($_SESSION['uID'])) {
            unset($_SESSION['uID']);
            unset($_SESSION['username']);
        }
    } else if (isset($_POST["submit-l"])) {
        $_SESSION['liue'] = $_POST["uname_email"];
        $_SESSION['lipw'] = $_POST['password'];
        if (isset($_SESSION['liue']) && isset($_SESSION)) {
            $validity = validLogIn($_SESSION['liue'], $_SESSION['lipw']);
            if ($validity[0]) {
                $result = Login($validity, $_SESSION['lipw']);
                print_r($result);
                if ($result != null) {
                    $_SESSION["uID"] = $result["uID"];
                    $_SESSION["username"] = $result["username"];
                    $_SESSION["submit-status"] = "Login Successful!";
                } else {
                    $_SESSION["submit-status"] = "Incorrect Credentials!";
                }
                unset($result);
            } else {
                $_SESSION["submit-status"] = $validity[1];
            }
            unset($validity);
        }
    } else if (isset($_POST["submit-s"])) {
        $_SESSION['suname'] = $_POST["username"];
        $_SESSION['semail'] = $_POST['email'];
        $_SESSION['spw'] = $_POST['password'];
        $_SESSION['srepw'] = $_POST['re_password'];
        if (isset($_SESSION['suname']) && isset($_SESSION['semail']) &&
        isset($_SESSION['spw']) && isset($_SESSION['srepw'])) {
            $result = validSignUp($_SESSION['suname'], $_SESSION['semail'],
            $_SESSION['spw'], $_SESSION['srepw']);
            if ($result[0]) {
                commitSignup($_SESSION['suname'], $result[2], $_SESSION['spw']);
                $_SESSION["submit-status"] = "Signup Sucessful!";
            } else {
                $_SESSION["submit-status"] = $result[1];
            } 
        }
    }
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_SESSION['suname'])) {
        unset($_SESSION['suname']);
    }
    if (isset($_SESSION['semail'])) {
        unset($_SESSION['semail']);
    }
    if (isset($_SESSION['spw'])) {
        unset($_SESSION['spw']);
    }
    if (isset($_SESSION['srepw'])) {
        unset($_SESSION['srepw']);
    }
    if (isset($_SESSION['liue'])) {
        unset($_SESSION['liue']);
    }
    if (isset($_SESSION['lipw'])) {
        unset($_SESSION['lipw']);
    }
    if (isset($_SESSION['submit-status'])) {
        echo $_SESSION['submit-status'];
        unset($_SESSION['submit-status']);
    }
}

?>
<div class="header">
    <div id="left">Sudoku</div>
    <div id="right">
        <a href="#">Leaderboard</a><?php if (!isset($_SESSION['uID'])) { 
            echo $defaultstr;
        } else {
            echo $loggedinstr.$_SESSION['username']; 
        }?><div class="loginsignup" style="display: none;">
            <div class="popup">
                <div class="form-div" style="margin: 0 0 0 0%;">
                    <form class="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
                     method="POST" style="visibility: visible; height: 100%; padding: 1.5em 0 0 1.5em; opacity: 100%;">
                        Log In<br><br>
                        <label for="username">Username or Email:</label><br>
                        <input type="text" id="username-log" name="uname_email"><br>
                        <label for="username">Password:</label><br>
                        <input type="password" id="password-log" name="password"><a class="eye">idk</a><br>
                        <a id="toSign">Don't have an account? Sign up.</a><br>
                        <input type="submit" name="submit-l" value="Log In">
                    </form>
                    <form class="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
                     method="POST" style="visibility: hidden; height: 0%; padding: 1.5em 0 0 1.5em; opacity: 0%;">
                        Sign Up <br>
                        <label for="username">Username:</label><br>
                        <input type="text" id="username-sign" name="username"><br>
                        <label for="email">Email :</label><br>
                        <input type="text" id="username-email" name="email"><br>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password-sign" name="password"><br>
                        <label for="re_password">Retype Password: </label><br>
                        <input type="password" id="repassword-sign" name="re_password"><br>
                        <a id="toLog">Have an account? Log in.</a><br>
                        <input type="submit" name="submit-s" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_SESSION['submit_status'])) {
        unset($_SESSION['submit-status']);
    }
?>