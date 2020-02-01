<?php

class Dog
{
    public function barks()
    {
        $cat = new Cat();
        $cat->meow();
    }
}

/**
 * DogクラスはCatクラスに強く依存する為単体テストができなない
 * DIはクラスの中でnewをしない
 * 必要なインスタンスは外からインジェクションする
 *
 * 注入のやり方は3つある
 * 1.メソッドインジェクション
 * メソッドの引数に依存対象のクラスを渡す事
 * 2.セッタインジェクション
 * DI
 * 3.コンストラクタインジェクション
 */
class Dog

{
    public function barks(Cat $cat)
    {
        $cat->meow();
    }
}

$cat = new Cat();
$dog =
