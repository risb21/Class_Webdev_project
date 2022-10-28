<?php

    function printer(&$board) {
        echo "________________________<br>";
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                if (!$j) {
                    echo "|";
                }
                if ($board[$i][$j]) {
                    echo '&nbsp&nbsp'.$board[$i][$j] . '&nbsp';
                } else {
                    echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
                }
                if (!(($j + 1) % 3)) {
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

    function validValues($board, $rowInd, $colInd) {
        $validVals = [1,2,3,4,5,6,7,8,9];
        $row = getRow($board, $rowInd);
        $col = getCol($board, $colInd);     // Gets values in row, column and box to follow sudoku rules
        $box = getBox($board, $rowInd, $colInd);

        // for ($x = 0; $x < 9; $x++) {
        //     if ($row[$x]) {
        //         if ($key = array_search($row[$x], $validVals) !== false) {
        //             unset($validVals[$key]);
        //         }
        //     }
        // }
        // for ($x = 0; $x < 9; $x++) {
        //     if ($col[$x]) {
        //         if ($key = array_search($col[$x], $validVals) !== false) {
        //             unset($validVals[$key]);
        //         }
        //     }
        // }
        // for ($x = 0; $x < 9; $x++) {
        //     if ($box[$x]) {
        //         if ($key = array_search($box[$x], $validVals) !== false) {
        //             unset($validVals[$key]);
        //         }
        //     }
        // }
        $validVals = array_diff($validVals, $row);
        $validVals = array_diff($validVals, $col);
        $validVals = array_diff($validVals, $box);

        return $validVals;
    }

    // Recursive Backtracking function to fill the board

    function Solver(&$board, $rowInd, $colInd) {
        if ($rowInd > 8) {
            return true;    // Checks if board is full
        }
        if ($board[$rowInd][$colInd] == 0){

            $validNums = validValues($board, $rowInd, $colInd);
    
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
        } else {
            if (Solver($board, $rowInd + floor(($colInd + 1)/9), ($colInd + 1) % 9)) {
                return true;
            }
        }
    }

    // Will verify if the board is solvable after removal of a value from the puzzle board

    function isValid($board, $puzzle) {
        if (Solver($puzzle, 0, 0) == $board) { return true; }
        return false;
    }
    
    function puzzleMaker($board, $difficulty, $validIndex) {

        // Mapping difficulty from 0 to 1 to number of iterations (from 25 to 53)
        $diffMap = floor($difficulty * 28) + 25;

        $puzzle = $board;

        while ($diffMap) {
            
            $randIndex = array_rand($validIndex, 1);
            $randRow = floor($validIndex[$randIndex] / 9);
            $randCol = $validIndex[$randIndex] % 9;
            // Generating random value indices to remove (ensures value chosen is not 0)

            $oldVal = $puzzle[$randRow][$randCol];
            $puzzle[$randRow][$randCol] = 0;
            if (isValid($board, $puzzle)) {
                $validIndex = array_diff($validIndex, [$validIndex[$randIndex]]);
                --$diffMap;  
                // Removes the index from validIndex array and decrements no. of cells to remove if puzzle is solvable
            } else {
                $puzzle[$randRow][$randCol] = $oldVal;
                // If puzzle is not solvable, old value is restored
            }
        }

        return $puzzle;
    }


    function isUnique($board) {
        $SolvedOnce = $board;
        Solver($SolvedOnce, 0, 0);
        
        $SolvedAgain = $board;
        for ($i = 0; $i < 3; $i++) {
            Solver($SolvedAgain, 0, 0);
            if ($SolvedOnce != $SolvedAgain) {
                return false;
            }
            $SolvedAgain = $board;
        }
        return true;
    }

    $difficulty = 0.75;

    $validIndex = array();
    for ($i = 0; $i < 81; $i++) {
        $validIndex[$i] = $i;
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
    $end = microtime(true);
    echo 'Done in: ' . ($end - $start) * 1000 . ' ms';
    
    $start = microtime(true);   // Calculating time at the start of computation
    $puzzle = puzzleMaker($board, $difficulty, $validIndex);
    
    $count = 0;
    while (!isUnique($puzzle)) {
        if (($count + 1) % 11) {
            $puzzle = puzzleMaker($board, $difficulty, $validIndex);
        } else {
            // After every 10 tries per board, reset values in the board and solve again
            for ($i = 0; $i < 9; $i++) {
                for ($j = 0; $j < 9; $j++) {
                    $board[$i][$j] = 0;
                }
            }
            Solver($board, 0, 0);

            $puzzle = puzzleMaker($board, $difficulty, $validIndex);
        }
        $count++;
    }

    $end = microtime(true);
    echo "<br>";
    printer($board);
    printer($puzzle);
    echo 'Took ' . $count . ' iteration';
    echo $count == 1 ? '<br>' : 's<br>';
    echo 'Done in: ' . $end - $start . ' s<br>';

    $test = [1,2,3,4,5,6,7,8,9];
    for ($x = 0; $x < 9; $x++) {
        $key = array_rand($test, 1);
        echo '<br>'.$test[$key].' Will be unset ';
        unset($test[$key]);
        print_r($test);
    }
    
    

?>