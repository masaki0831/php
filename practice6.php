<?php
function a( $number ){
     return $number*2;
}


function f($a, $b){
    $sum = $a + $b;
    return $sum;
}

function b($arr){
    $c = array(1, 3, 5, 7, 9);
    foreach($c as $c){
    $arr *= $c;
    }
    return $arr;
}

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($a >= $arr){
         $max_number = $a;
     }
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 
 $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '. date('Y-m-d') ."\n";

date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

echo date("l");
$today = date("m.d.y");   
