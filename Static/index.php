<?php 
include 'sudoku.php';
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
                <table id="grid" style="filter: blur(8px);">
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
    <script src="Resources/Scripts/animator.js"></script>
    <script src="Resources/Scripts/sudokuHandler.js"></script>
</html>
