<?php

    $board = array(array());

    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 9; $j++) {
            $board[$i][$j] = 0;
            echo '&nbsp&nbsp&nbsp'.$board[$i][$j];
            if ($j == 8) {
                echo '<br>';
            }
        }
    }
    
     
?>