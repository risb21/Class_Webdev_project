<?php

    function printer($board) {
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $board[$i][$j] = 0;
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
        for ($i = 0; $i<9; $i++) {
            $colArr[$i] = $board[$i][$col];
        }
        return $colArr;
    }

    function isNotNotFull($board) {
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if (!($board[$i][$j])) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }

    // Recursive Backtracking function to fill the board
    
    function Solver($board) {
        $row, $col;
        if (isNotNotFull($board)) {
            return $board;
        }
        $vals = isNotNotFull($board);
        $row = $vals[0];
        $col = $vals[1];



    }


    $board = array(array());

    printer($board);

    // Attempting to make a Sudoku solver


    
     
?>