<?php 
session_start();
include ('validation.php');
include ('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit-l"])) {

    } else if (isset($_POST["submit-s"])) {
        if (isset($_POST['username']) && isset($_POST['email']) &&
            isset($_POST['password']) && isset($_POST['re_password'])) {
            $sUName = $_POST["username"]; $sEmail = $_POST['email'];
            $sPw = $_POST['password']; $sRePw = $_POST['re_password'];
            $result = validSignUp($sUName, $sEmail, $sPw, $sRePw);
            if ($result[0]) {
                commitSignup($sUName, $result[1], $sPw);
                echo "Signup was successful!";
            } else {
                echo $result[1];
            }
        }
    }
}

?>
<div class="header">
    <div id="left">Sudoku??</div>
    <div id="right">
    <a href="#">Leaderboard</a><a id="login" href="#">Log In</a><a id="signup" href="#">Sign up</a>
        <div class="loginsignup" style="display: none;">
            <div class="popup">
                <div class="form-div" style="margin: 0 0 0 0%;">
                    <form class="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
                     method="POST" style="visibility: visible; height: 100%; padding: 1.5em 0 0 1.5em; opacity: 100%;">
                        Log In<br><br>
                        <label for="username">Username:</label><br>
                        <input type="text" id="username-log" name="username"><br>
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