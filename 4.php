<?php

// error 2 loại: 
// 1 - lỗi cú pháp
// 2 - lỗi logic

// cách debug lỗi, syntax vs logic error


echo "nhập số tuổi \n";

$tuoi = readline("nhập số tuổi: \n");

echo "tuổi là $tuoi";

// cấu trúc
/**
*in menu
*
* input chọn
*
* -> 1: thêm mới -> nhập thông tin -> thêm mới -> quay về menu
* -> 2: xóa -> nhập id -> confirmm -> xóa -> menu
* -> 0: thoát chương trình
*/

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

$board = [
    [1,0,null,0],
    [1,0,null,1],
    [0,1,0,1],
    [1,0,null,0],
   ];

function is_valid(array $board): bool {

    return false;
  }