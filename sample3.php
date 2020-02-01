<?php

try {
    function toArray(array $array)
    {
        echo "引数は配列です" . "\n";

    }
} catch (Exception $e) {
    echo $e->getMessage();
}

//toArray([]);

//Fatal errorになる。
//toArray("配列");

//class MyClass
//{
//
//}

//class OtherClass
//{
//
//}

//function type_test(MyClass $class)
//{
//    echo "MyClassです";
//}

//type_test(new MyClass);
//タイプヒンティングで指定した以外のクラスが引数に渡されるとFatal errorになる。
//type_test(new OtherClass())

//interface Myinterface
//{
//
//}
//
//class MyClass implements Myinterface
//{
//
//}
//
//class OtherClass
//{
//
//}
//
//function type_test(Myinterface $class)
//{
//
//}

echo array_sum(
    array_filter(
        array_map(
            function ($v) {
                return $v ** 2;
            },
            array_filter(range(0, 10000), function ($v) {
                return $v % 2 === 0;
            })
        ),
        function ($v) {
            return $v > 20;
        }
    )
);
