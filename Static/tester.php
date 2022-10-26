<?php

    function printer(&$board, $fill) {
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if ($fill){
                    $board[$i][$j] = 0;
                }
                echo '&nbsp&nbsp&nbsp'.$board[$i][$j];
                if ($j == 8) {
                    echo '<br>';
                }
            }
        }
    }

    function getRow($board, $row) {
        return $board[$row];
    }

    function getCol($board, $col) {
        $colArr = [];
        for ($i = 0; $i < 9; $i++) {
            $colArr[$i] = $board[$i][$col];
        }
        return $colArr;
    }

    function getBox($board, $row, $col) {
        $rowMult = floor($row/3);   // Multipliers to grab the right box that the element is in
        $colMult = floor($col/3);
        $box = array();
        for ($i = 3 * $rowMult; $i < 3 * $rowMult + 3; $i++) {
            for ($j = 3 * $colMult; $j < 3 * $colMult + 3; $j++) {
                $box[3 * ($i - (3 * $rowMult)) + ($j - (3 * $colMult))]= $board[$i][$j];
            }   // This will take values of a 3x3 box and represent it in a 1D array; 
        }       // End use case of this function will not care about structure of the array
        return $box;
    }

    function isFull($board) {
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if (!($board[$i][$j])) {
                    return false;
                }
            }
        }
        return true;
    }

    // Recursive Backtracking function to fill the board
    
    function Solver(&$board, $rowInd, $colInd) {
        if ($rowInd > 8) {
            return true;
        }

        $validNums = [1,2,3,4,5,6,7,8,9];
        $row = getRow($board, $rowInd);
        $col = getCol($board, $colInd);
        $box = getBox($board, $rowInd, $colInd);

        foreach ($row as $val) {
            if ($val) {
                $validNums = array_diff($validNums, [$val]);
            }
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

        print_r($validNums);
        echo "<br>";

        if (empty($validNums)) {
            return false;
        }

        $board[$rowInd][$colInd] = $validNums[array_rand($validNums, 1)];
        printer($board, 0);
        if (Solver($board, $rowInd + floor(($colInd + 1)/9), ($colInd + 1) % 9)) {
            return true;
        }
        
        $board[$rowInd][$colInd] = 0;

        if (Solver($board, $rowInd, $colInd)) {
            return true;
        }

        printer($board, 0);
        echo "<br>";

        return false;
    }

    $board = array(array());

    printer($board, 1);

    Solver($board, 0, 0);
    printer($board, 0);

    // Attempting to make a Sudoku solver


    
     
?>