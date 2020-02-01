<?php

class Hoge
{
    public function __call($name, $arguments)
        /**
         * 必ず二つの引数が必要ないとfatal error
         * must take exactly 2 arguments
         * オーバーロード: 動的にメソッドを定義する時に使う、マジックメソッド
         * PHPでは存在しないプロパティやメソッドにアクセスされた時の振る舞いをオーバーロードと呼んでいる
         * プロパティやメソッドを動的に「作成ため」の手法です。これらの動的エンティティは、マジックメソッドを用いて処理される。
         * 難しい
         *
         * implode: 配列要素を文字列により連結する。
         * explode: 文字列を文字列により分割する。
         */
    {
        echo "{$name}定義されていないメソッドが呼び出された時に呼ばれる。";
    }

    public function __set(string $name, mixed $value) : void
    {
        echo "{$name}がプロパティとして定義される。";
    }
    

}

$obj = new Hoge;
$obj->takashi();
