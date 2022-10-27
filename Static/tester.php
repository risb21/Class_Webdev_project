<?php

    function printer(&$board) {
        echo "________________________<br>";
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if (!$j) {
                    echo "|";
                }
                echo '&nbsp&nbsp&nbsp'.$board[$i][$j];
                if (!($j % 3 - 2)) {
                    echo "|";
                }
                if (!($i%3 - 2) && $j == 8) {
                    echo "<br>------------------------------------";
                }
                if ($j == 8) {
                    echo '<br>';
                }
            }
        }
    }   // Printer function to print out the board and make it look presentable

    function getRow($board, $row) {
        return $board[$row];
    }   // Self explanatory

    function getCol($board, $col) {
        $colArr = [];
        for ($i = 0; $i < 9; $i++) {
            $colArr[$i] = $board[$i][$col];
        }
        return $colArr;
    }   // Using column index iterates through each row, gets element, appends and returns

    function getBox($board, $row, $col) {
        $rowMult = floor($row/3);   // Multipliers to grab the right box that the element is in
        $colMult = floor($col/3);
        $box = array();
        for ($i = 3 * $rowMult; $i < 3 * ($rowMult + 1); $i++) {
            for ($j = 3 * $colMult; $j < 3 * ($colMult + 1); $j++) {
                $box[3 * ($i - (3 * $rowMult)) + ($j - (3 * $colMult))]= $board[$i][$j];
            }   // This will take values of a 3x3 box and represent it in a 1D array; 
        }       // End use case of this array will not care about the 2D structure of the box
        return $box;
    }

    // Recursive Backtracking function to fill the board
    
    function Solver(&$board, $rowInd, $colInd) {
        if ($rowInd > 8) {
            return true;    // Checks if board is full
        }

        $validNums = [1,2,3,4,5,6,7,8,9];
        $row = getRow($board, $rowInd);
        $col = getCol($board, $colInd);     // Gets values in row, column and box to follow sudoku rules
        $box = getBox($board, $rowInd, $colInd);

        foreach ($row as $val) {
            if ($val) {
                $validNums = array_diff($validNums, [$val]);
            }   // array_diff will remove specified value from the array like a set operation
        }
        foreach ($col as $val) {
            if ($val) {
                $validNums = array_diff($validNums, [$val]);
            }
        }
        foreach ($box as $val) {
            if ($val) {
                $validNums = array_diff($validNums, [$val]);
            }
        }

        while (!empty($validNums)) {

            $board[$rowInd][$colInd] = $validNums[array_rand($validNums, 1)];
            /* array_rand will return random index and not value from parsed array, 
               1 signifies no. of indices to choose */
            
            /* Weird indices just to increment without breaking bounds
               (except row index in very last call, handled in first conditional in this function) */
            if (Solver($board, $rowInd + floor(($colInd + 1)/9), ($colInd + 1) % 9)) {
                return true;
            }
            
            // Will only end up here if value randomly set was not valid down the line or even immediately
            $validNums = array_diff($validNums, [$board[$rowInd][$colInd]]);
            $board[$rowInd][$colInd] = 0;
        }
        return false;
    }

    $start = microtime(true);   // Calculating time at the start of computation
    $board = array(array());

    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 9; $j++) {
            $board[$i][$j] = 0;
        }
    }

    Solver($board, 0, 0);
    printer($board);
    echo 'Done in: ' . (microtime(true) - $start) * 1000 . 'ms';

?>