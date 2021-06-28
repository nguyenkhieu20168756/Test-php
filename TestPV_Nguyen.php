<?php

$numbers = array(1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15);

function bai1($n, $numbers){
  $newArr = array();
  for($i = 0; $i < count($numbers)/$n; $i++){
    for($j = $i; $j < count($numbers); $j+= $n){
      array_push($newArr, $numbers[$j]);
    }
  }
  echo 'bai1 : ' . json_encode($newArr, JSON_HEX_TAG) .'<br/>';
}

function bai2($numbers){
  $sum = 0;
  rsort($numbers, SORT_NUMERIC);
  $sum = $numbers[0] + $numbers[1];
  echo " bai 2: tong 2 so lon nhat : $sum <br/>";
}

function bai3($numbers){
  rsort($numbers, SORT_NUMERIC);
  $min = 10000;
  $result = array();
  for($i = 0; $i < count($numbers) - 1; $i++){
    if($numbers[$i] - $numbers[$i + 1] <= $min){
      $min = $numbers[$i] - $numbers[$i + 1];
    }
  }
  for($i = 0; $i < count($numbers) - 1; $i++){
    if($numbers[$i] - $numbers[$i + 1] == $min){
      array_push($result, [$numbers[$i], $numbers[$i + 1]]);
    }
  }
  $js_code = 'bai3 : ' . json_encode($result, JSON_HEX_TAG);
  echo $js_code;
}

bai1(3, $numbers);
bai2($numbers);
bai3($numbers);
?>