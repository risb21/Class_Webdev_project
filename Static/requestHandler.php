<?php 
include 'sudoku.php';
$diff=0;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["diff"])) {
        $diff = (int) $_GET["diff"];
    } else {
        $diff = 50;
    }
}
echo json_encode(makeUniquePuzzle($diff/100));

?>