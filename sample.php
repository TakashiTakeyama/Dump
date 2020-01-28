<?php

//class Hoge {
//
//    function nameSet() {
//        echo "名前";
//    }

    $fruits = [
        'apple',
        'banana',
        'strawberry',
    ];

    /**
     * メソッド名はcamelCase
     *
     * 配列は[]で書く。
     *
     * クラス名はStudlyCapsで書く、先頭の文字も大文字
     * クラス定数は大文字で書き、区切り文字はアンダースコアを書く。
     *
     *　インデント: 4つのスペースを入れる。（タブではない）
     *  行の長さは80~120文字以内に抑える。
     *
     */

//    function sample_1() {
//        echo "hoge";
//    }
//}


//sample_1();

//3db60220281f183090b9245d0a5ed536


require "vendor/autoload.php";

$url = "http://google.com";

$client = new \GuzzleHttp\Client();
$res = $client->request("GET", $url);

echo $res->getStatusCode() . "\n";
//echo $res->getHeaderLine("content-type") . "\n";
//echo $res->getBody() . "\n";

function hoge($res)
{

}
