<?php

function getWinner(array $board) {

    for ($i = 0; $i < 4; $i++)
    {
        for ($j = 0; $j < 4; $j++)
        {
            
            $board[$i][$j] = readline("nhập giá trị: \n");
        }
        
    }

    return $board;

}