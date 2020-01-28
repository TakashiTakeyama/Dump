<?php

try {
    function toArray(array $array)
    {
        echo "引数は配列です" . "\n";

    }
} catch (Exception $e) {
    echo $e->getMessage();
}

toArray([]);

//Fatal errorになる。
//toArray("配列");

class MyClass
{

}

class OtherClass
{

}

function type_test(MyClass $class)
{
    echo "MyClassです";
}

type_test(new MyClass);
//type_test(new OtherClass);
