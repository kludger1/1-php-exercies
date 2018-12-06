<?php
// katleen ludger


// 1
$arr = [0,1,2,3,4];
unset($arr['3']);
var_dump($arr);

// 2
$arr2 = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4]; 
unset($arr2['three']);
var_dump($arr2);

// 3 & 4
$a = array("a"=>"a","b"=>"b","c"=>"c","d"=>"d","e"=>"e","f"=>"f");

// 5
$arr3 = array(0, 1, 2, 3, 4, 5, 6);
echo array_sum($arr3);

