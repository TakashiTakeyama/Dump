<?php

class PropertyTest {
    // private $age = 35;
    static $arg = "35";
    // private $name = "takashi";

    private $data = array();

    //宣言されているプロパティにはオーバーロードが起動しない。
    public $declared = 1;
    // クラスの外部からアクセスした場合のみこれがオーバーロードされる。
    private $hidden = 2;

    // public function __set($name, $value) 
    // {
    //     echo "Setting '$name' to '$value'\n";
    //     $this->data[$name] = $value;
        // echo self::$arg;
        // echo self::$hidden;
    // }

    public function static_private() {
        echo self::$arg;
        /**
         * $hidden: はstaticプロパティではないので捕まえられない
         */
        // echo self::$hidden;
    }

    public function __construct(int $age, string $name) {
        $this->age = $age;
        $this->name = $name;
    }
}

$obj = new PropertyTest(35, "takashi");
echo $obj->name;
echo $obj->age;
var_dump($obj);
// $obj->a = 1;

// echo $obj->a . "\n\n";
// var_dump($obj);

// $obj->static_private();

// $key = [
//     'name',
//     'address',
//     'email',
// ];
// $zipcode = 'zipcode';

// $arr = compact($zipcode);
// print_r($arr);