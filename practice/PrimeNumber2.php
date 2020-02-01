<?php

//$arr = [];

for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
    //array_merge(): 配列同士の結合
//    $arr = array_merge($i);
    print_r($arr);
}


function check_prime_number($arg)
{
    for ($i = 1; $i++) {
        if ($arr[$i] % $arg === 0) {
            echo $arg . "は" . $arr[$i] . "の素数です。";
        }
    }
}

//foreach ($arr as $key => $value) {
//    echo "No" . $key . "値は" . $value . "\n";
//}
