<?php

class Introduction {
    // var $x = 10;
    public $x = 10;

    function test() {
        return "the number is: {$this->x}";
    }
}

$obj = new Introduction();

// -> object operator
// :: static method
echo $obj->x;

// PDO - Php Data Object
