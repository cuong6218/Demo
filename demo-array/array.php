<?php
// $arr1 = [1,2,3,7,4,5];
// $arr2 = [1,2,0,4,3,5];
// print_r(array_diff($arr2, $arr1));   
//output: Array ( [2] => 0 )
//kiểm tra khác nhau giữa 2 mảng, trả về giá trị khác nhau
//---------------------------------------------------
// $arr1 = [1,2,3,7,4,5];
// print_r(array_keys($arr1));  
//output: Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )
// trả về mảng chứa keys
//---------------------------------------------------
// $arr1 = [1,2,3,7,4,5];
// function expValue($arr){
//     $arr *= 2;
//     return $arr;
// }
// print_r(array_map('expValue', $arr1)); 
// output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 14 [4] => 8 [5] => 10 )
// trả về mảng với hàm được thực thi các giá trị
//-----------------------------------------------------
// $arr1 = [1,2,3];
// $arr2 = ['hello', 'world'];
// print_r(array_merge($arr1, $arr2));
// output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => hello [4] => world )
// hợp hai mảng
//-----------------------------------------------------
// $arr = [1];
// print_r(array_pad($arr, 5, 2));
// output: Array ( [0] => 1 [1] => 2 [2] => 2 [3] => 2 [4] => 2 ) 
// thêm giá trị đến khi độ dài mảng bằng size
//-----------------------------------------------------
// $arr = [1,2,3];
// print_r(array_pop($arr));
// print_r($arr);
//output: 3Array ( [0] => 1 [1] => 2 )
// xóa giá trị cuối mảng
//-----------------------------------------------------
// $arr = [1,2,3];
// echo array_product($arr); 
// output: 6
// trả về tích các phần tử 
//-----------------------------------------------------
// $arr = [1,2,3];
// echo array_rand($arr); 
// output: 0 || 1 || 2
// trả về giá trị key ngẫu nhiên
//-----------------------------------------------------
$arr = [1,2,3];






