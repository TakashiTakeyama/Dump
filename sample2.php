<?php

//$time = date("l"-"d");
//echo $time;
//
//function handler(http\Exception\ $e) {
//}

function inverse($x)
{
    if (!$x) {
        throw new Exception('ゼロによる徐算');
    }
    return 1 / $x;
}

echo inverse(1) . "\n";

try {
    echo inverse(5) . "\n";
    echo "tryは実行される" . "\n";
    echo inverse(0) . "\n";
    //errorが出ると以下は実行されない。
    echo "tryは実行される" . "\n";
} catch (Exception $e) {
    echo '補足した除外: ' . $e->getMessage(), "\n";
    //continue: Not in the "loop" or "switch"

    /**
     * finally: php5.5以降、catchブロックの後にfinallyブロックも指定できるようになった
     * try及びcatchブロックのあとで常に実行される。
     **/

} finally {
    echo "最後に常に実行される。" . "\n";
}

//実行は続行される。
echo "Hello world" . "\n";

/**
 * ネストした例外
 */
class MyException extends Exception
{
}

class Test
{
    public function testing()
    {
        try {
            try {
                //throw: ユーザー定義の例外を投げる。
                throw new MyException('foo');
            } catch (Exception $e) {
                //改めてスロー
//            echo $e->getMessage();
                throw $e;


            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}

/**
 * キャッシュとクッキーの違い
 * キャッシュは一度閲覧したホームページの情報
 * クッキーはuser_idやパスワードなどのユーザー自身がWebブラウザに入力した情報
 */


