<?php

// class Introduction {
//     // var $x = 10;
//     public $x = 10;

//     function test() {
//         return "the number is: {$this->x}";
//     }
// }

// $obj = new Introduction();

// // -> object operator
// // :: static method
// echo $obj->x;

// // PDO - Php Data Object

class Introduction {

    public function __construct($name, $age) {
        $this->name = $name;
    }

    public function getName() {
        echo $this->name;
    }

    public function __destruct() {
        echo "This is __destruct.";
    }
}

$obj = new Introduction("Mike", 10);
$obj->getName();