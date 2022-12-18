<?php 
include 'sudoku.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST["Yes"])) {
//         echo $_POST["time"];
//     } elseif (isset($_POST["No"])) {

//     } else {
//         echo "bruh";
//     }
// }

?>
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
        <?php 
        include ('headerTemplate.php');
        ?>
        <div class="body">
            <div class="grid-div">
                <div id="logtime" style="display: none;">
                    <div id="container">
                        You Won!<br>Would you like to record this attempt?<br>
                        <form style="display: inline;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <input type="text" name="time" id="timephp">
                            <input name="Yes" value="Yes" type="button">
                        </form>
                        <form style="display: inline;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <input name="No" value="No" type="submit">
                        </form>
                    </div>
                </div>
                <table id="grid" class="blurred">
                    <tr>
                        <td><input id="cell-0" class="cell" type="text" value="5" ></td>
                        <td><input id="cell-1" class="cell" type="text" value="3" ></td>
                        <td><input id="cell-2" class="cell" type="text"></td>
                        
                        <td><input id="cell-3" class="cell" type="text"></td>
                        <td><input id="cell-4" class="cell" type="text" value="7" ></td>
                        <td><input id="cell-5" class="cell" type="text"></td>
                        
                        <td><input id="cell-6" class="cell" type="text"></td>
                        <td><input id="cell-7" class="cell" type="text"></td>
                        <td><input id="cell-8" class="cell" type="text"></td>
                    </tr>
            
                    <tr>
                        <td><input id="cell-9" class="cell" type="text" value="6" ></td>
                        <td><input id="cell-10" class="cell" type="text"></td>
                        <td><input id="cell-11" class="cell" type="text"></td>
                        
                        <td><input id="cell-12" class="cell" type="text" value="1" ></td>
                        <td><input id="cell-13" class="cell" type="text" value="9" ></td>
                        <td><input id="cell-14" class="cell" type="text" value="5" ></td>
                        
                        <td><input id="cell-15" class="cell" type="text"></td>
                        <td><input id="cell-16" class="cell" type="text"></td>
                        <td><input id="cell-17" class="cell" type="text"></td>
                    </tr>
            
                    <tr>          
                        <td><input id="cell-18" class="cell" type="text"></td>
                        <td><input id="cell-19" class="cell" type="text" value="9" ></td>
                        <td><input id="cell-20" class="cell" type="text" value="8" ></td>
                        
                        <td><input id="cell-21" class="cell" type="text"></td>
                        <td><input id="cell-22" class="cell" type="text"></td>
                        <td><input id="cell-23" class="cell" type="text"></td>
                        
                        <td><input id="cell-24" class="cell" type="text"></td>
                        <td><input id="cell-25" class="cell" type="text" value="6" ></td>
                        <td><input id="cell-26" class="cell" type="text"></td>
                    </tr>
            
                    <tr>          
                        <td><input id="cell-27" class="cell" type="text" value="8" ></td>
                        <td><input id="cell-28" class="cell" type="text"></td>
                        <td><input id="cell-29" class="cell" type="text"></td>
                        
                        <td><input id="cell-30" class="cell" type="text"></td>
                        <td><input id="cell-31" class="cell" type="text" value="6" ></td>
                        <td><input id="cell-32" class="cell" type="text"></td>
                        
                        <td><input id="cell-33" class="cell" type="text"></td>
                        <td><input id="cell-34" class="cell" type="text"></td>
                        <td><input id="cell-35" class="cell" type="text" value="3" ></td>
                    </tr>
            
                    <tr>          
                        <td><input id="cell-36" class="cell" type="text" value="4" ></td>
                        <td><input id="cell-37" class="cell" type="text"></td>
                        <td><input id="cell-38" class="cell" type="text"></td>
                        
                        <td><input id="cell-39" class="cell" type="text" value="8" ></td>
                        <td><input id="cell-40" class="cell" type="text"></td>
                        <td><input id="cell-41" class="cell" type="text" value="3" ></td>
                        
                        <td><input id="cell-42" class="cell" type="text"></td>
                        <td><input id="cell-43" class="cell" type="text"></td>
                        <td><input id="cell-44" class="cell" type="text" value="1" ></td>
                    </tr>
            
                    <tr>          
                        <td><input id="cell-45" class="cell" type="text" value="7" ></td>
                        <td><input id="cell-46" class="cell" type="text"></td>
                        <td><input id="cell-47" class="cell" type="text"></td>
                        
                        <td><input id="cell-48" class="cell" type="text"></td>
                        <td><input id="cell-49" class="cell" type="text" value="2" ></td>
                        <td><input id="cell-50" class="cell" type="text"></td>
                        
                        <td><input id="cell-51" class="cell" type="text"></td>
                        <td><input id="cell-52" class="cell" type="text"></td>
                        <td><input id="cell-53" class="cell" type="text" value="6" ></td>
                    </tr>
            
                    <tr>          
                        <td><input id="cell-54" class="cell" type="text"></td>
                        <td><input id="cell-55" class="cell" type="text" value="6" ></td>
                        <td><input id="cell-56" class="cell" type="text"></td>
                        
                        <td><input id="cell-57" class="cell" type="text"></td>
                        <td><input id="cell-58" class="cell" type="text"></td>
                        <td><input id="cell-59" class="cell" type="text"></td>
                        
                        <td><input id="cell-60" class="cell" type="text" value="2" ></td>
                        <td><input id="cell-61" class="cell" type="text" value="8" ></td>
                        <td><input id="cell-62" class="cell" type="text"></td>
                    </tr>
            
                    <tr>          
                        <td><input id="cell-63" class="cell" type="text"></td>
                        <td><input id="cell-64" class="cell" type="text"></td>
                        <td><input id="cell-65" class="cell" type="text"></td>
                        
                        <td><input id="cell-66" class="cell" type="text" value="4" ></td>
                        <td><input id="cell-67" class="cell" type="text" value="1" ></td>
                        <td><input id="cell-68" class="cell" type="text" value="9" ></td>
                        
                        <td><input id="cell-69" class="cell" type="text"></td>
                        <td><input id="cell-70" class="cell" type="text"></td>
                        <td><input id="cell-71" class="cell" type="text" value="5" ></td>
                    </tr>
            
                    <tr>
                        <td><input id="cell-72" class="cell" type="text"></td>
                        <td><input id="cell-73" class="cell" type="text"></td>
                        <td><input id="cell-74" class="cell" type="text"></td>
                        
                        <td><input id="cell-75" class="cell" type="text"></td>
                        <td><input id="cell-76" class="cell" type="text" value="8" ></td>
                        <td><input id="cell-77" class="cell" type="text"></td>
                        
                        <td><input id="cell-78" class="cell" type="text"></td>
                        <td><input id="cell-79" class="cell" type="text" value="7" ></td>
                        <td><input id="cell-80" class="cell" type="text" value="9" ></td>
                    </tr>
                </table>
            </div>
            <div class="numpad">
                <div id="timer">
                </div>
                <div id="diffSelect">
                    <form id="difficulties" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input type="text" name="difficult" id="difficult" style="display: none;">
                        <input type="button" class="ez Easy" name="diff" value="Easy">
                        <input type="button" class="md Medium" name="diff" value="Medium">
                        <input type="button" class="hd Hard" name="diff" value="Hard">
                        <input type="button" class="xt Expert" name="diff" value="Expert">
                    </form>
                </div>
                <div class="numpadCont">
                    <div class="aCont"><a class="num" href="#">1</a></div>
                    <div class="aCont"><a class="num" href="#">2</a></div>
                    <div class="aCont"><a class="num" href="#">3</a></div>
                    <div class="aCont"><a class="num" href="#">4</a></div>
                    <div class="aCont"><a class="num" href="#">5</a></div>
                    <div class="aCont"><a class="num" href="#">6</a></div>
                    <div class="aCont"><a class="num" href="#">7</a></div>
                    <div class="aCont"><a class="num" href="#">8</a></div>
                    <div class="aCont"><a class="num" href="#">9</a></div>
                </div>
            </div>
        </div>
    </body>
    <script>
        var sBoard, sPuzzle;
        sPuzzleArr = Array();
        sBoardArr = Array();
    </script>
    <script src="Resources/Scripts/sudokuHandler.js"></script>
    <script src="Resources/Scripts/animator.js"></script>
    <script src="Resources/Scripts/animator2.js"></script>
    <?php
        if (isset($_SESSION["time"])) {
            if (isset($_SESSION["uID"])) {
                recordTime($_SESSION['uID'], $_SESSION['difficulty'], $_SESSION['time']);
                unset($_SESSION['time']);
            } else {
                $scriptInject = "";
                $scriptInject .= "<script>\n";
                $scriptInject .= "clearInterval(timerInterval);\n";
                $scriptInject .= "timerArea.innerText = '" . str_pad(floor((int)$_SESSION["time"]/(1000*60)), 2, '0', STR_PAD_LEFT) . ":";
                $scriptInject .= str_pad(floor((int)$_SESSION["time"]/1000) % 60, 2, '0', STR_PAD_LEFT) . ":";
                $scriptInject .= str_pad(floor((int)$_SESSION["time"] % 1000 / 10), 2, '0', STR_PAD_LEFT) . "';";
                $scriptInject .= "document.getElementById('logtime').style.display = null;";
                $scriptInject .= "document.getElementById('logtime').style.background = 'rgba(0, 0, 0, 0.2)';";
                $scriptInject .= "tolog();";
                $scriptInject .= "if (overlay.style.display !== 'none') {overlay.style.display = 'none';} else {overlay.style.display = 'flex';}";
                $scriptInject .= "</script>";
                echo $scriptInject;
            }
        }

        if (isset($_SESSION['difficulty'])) {
            echo "<script>";
            if (isset($_SESSION['difficulty'])) {
                $base = "document.getElementsByClassName('" . $_SESSION['difficulty'] . "')[0]";
                if ($_SESSION['difficulty'] == "Easy") {
                    echo $base.".classList.add('ezperm')";
                } elseif ($_SESSION['difficulty'] == "Medium") {
                    echo $base.".classList.add('mdperm')";
                } elseif ($_SESSION['difficulty'] == "Hard") {
                    echo $base.".classList.add('hdperm')";
                } elseif ($_SESSION['difficulty'] == "Expert") {
                    echo $base.".classList.add('xtperm')";
                }
            }
            echo "</script>";
        }
    ?>
</html>
