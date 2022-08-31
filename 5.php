<?php

/**
 * Cho một bàn cờ 4x4 (giống bt4),
 * 
 * Yêu cầu: xác định bàn cờ có hợp lệ hay không.
 * 
 * Bàn cờ hợp lệ khi số lượng của X nhiều hơn hoặc bằng O 1 đơn vị
 * 
 * input:
 * 
 * 
 * output: true/false
 */



// function is_valid(array $board): bool {

//    $a = 0;
//    $b = 0;

//   for ($i = 0; $i < 4; $i++)
//   {
//     for ($j = 0; $j < 4; $j++)
//     {
      
//       if ( $board[$i][$j] === 1)
//       {
//           $a += 1;
//       }
//       else if ( $board[$i][$j] === 0)
//       {
//         $b += 1;
//       }
//     }
   
//   }
//   if ($a >= $b)
//   {
//     return true;
//   }

//   return false;
//   }


//   $board = [
//     [1,0,null,1],
//     [1,0,null,1],
//     [1,0,0,1],
//     [1,0,0,0],
//   ];


//   $Check = is_valid($board);

//   echo var_dump($Check);

// require_once

require_once './5/board.php';

$board = [
  [],
  [],
  [],
  []
];


$a = getWinner($board);

echo json_encode($a);
