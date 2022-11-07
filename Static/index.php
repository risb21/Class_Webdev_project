<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Idk what to do here</title>
    <link rel="stylesheet" href="Resources/Static/Index_style.css" />
  </head>
  <body>
    <div class="header">
      <div id="left">Sudoku??</div>
      <div id="right">
        <a href="#">Leaderboard</a><a id="login" href="#">Log In</a><a id="signup" href="#">Sign up</a>
        <div class="loginsignup" style="display: none;">
          <div class="popup">
            <div class="form-div" style="margin: 0 0 0 0%;">
              <form class="loginForm" action="/verify.html" method="post" style="visibility: visible; height: 100%; padding: 1.5em 0 0 1.5em; opacity: 100%;">
                Log In<br><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username-log" name="username"><br>
                <label for="username">Password:</label><br>
                <input type="password" id="password-log" name="password"><a class="eye">idk</a><br>
                <a id="toSign">Don't have an account? Sign up.</a><br>
                <input type="submit" value="Log In">
              </form>
              <form class="signupForm" action="" method="post" style="visibility: hidden; height: 0%; padding: 1.5em 0 0 1.5em; opacity: 0%;">
                Sign Up <br>
                <label for="username">Username:</label><br>
                <input type="text" id="username-sign" name="username"><br>
                <label for="username">Password:</label><br>
                <input type="password" id="password-sign" name="password"><br>
                <label for="username">Retype Password: </label><br>
                <input type="password" id="repassword-sign" name="password"><br>
                <a id="toLog">Have an account? Log in.</a><br>
                <input type="submit" value="Sign Up">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="body">
      <div class="grid-div">
        <table id="grid">
          <tr>
            <td><input id="cell-0" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="5" ></td>
            <td><input id="cell-1" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="3" ></td>
            <td><input id="cell-2" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-3" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-4" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="7" ></td>
            <td><input id="cell-5" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-6" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-7" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-8" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
          </tr>
  
          <tr>
            <td><input id="cell-9" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="6" ></td>
            <td><input id="cell-10" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-11" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-12" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="1" ></td>
            <td><input id="cell-13" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="9" ></td>
            <td><input id="cell-14" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="5" ></td>
            
            <td><input id="cell-15" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-16" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-17" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
          </tr>
  
          <tr>          
            <td><input id="cell-18" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-19" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="9" ></td>
            <td><input id="cell-20" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="8" ></td>
            
            <td><input id="cell-21" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-22" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-23" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-24" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-25" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="6" ></td>
            <td><input id="cell-26" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
          </tr>
  
          <tr>          
            <td><input id="cell-27" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="8" ></td>
            <td><input id="cell-28" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-29" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-30" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-31" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="6" ></td>
            <td><input id="cell-32" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-33" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-34" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-35" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="3" ></td>
          </tr>
  
          <tr>          
            <td><input id="cell-36" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="4" ></td>
            <td><input id="cell-37" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-38" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-39" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="8" ></td>
            <td><input id="cell-40" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-41" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="3" ></td>
            
            <td><input id="cell-42" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-43" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-44" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="1" ></td>
          </tr>
  
          <tr>          
            <td><input id="cell-45" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="7" ></td>
            <td><input id="cell-46" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-47" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-48" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-49" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="2" ></td>
            <td><input id="cell-50" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-51" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-52" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-53" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="6" ></td>
          </tr>
  
          <tr>          
            <td><input id="cell-54" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-55" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="6" ></td>
            <td><input id="cell-56" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-57" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-58" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-59" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-60" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="2" ></td>
            <td><input id="cell-61" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="8" ></td>
            <td><input id="cell-62" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
          </tr>
  
          <tr>          
            <td><input id="cell-63" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-64" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-65" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-66" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="4" ></td>
            <td><input id="cell-67" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="1" ></td>
            <td><input id="cell-68" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="9" ></td>
            
            <td><input id="cell-69" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-70" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-71" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="5" ></td>
          </tr>
  
          <tr>
            <td><input id="cell-72" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-73" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-74" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-75" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-76" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="8" ></td>
            <td><input id="cell-77" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            
            <td><input id="cell-78" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text"></td>
            <td><input id="cell-79" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="7" ></td>
            <td><input id="cell-80" onfocusin="highlight(this)" onfocusout="unfocus(this)" class="cell" type="text" value="9" ></td>
          </tr>
        </table>
      </div>
    </div>
  </body>
  <script src="Resources/Scripts/animator.js"></script>
</html>
