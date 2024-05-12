<?php
class Animal {
    public $cry = "bowbow!";
    function bow () {
        echo $this->cry .PHP_EOL;
    }
}

class Cat extends Animal {
    public $cry ="にゃお！";
}

$animal_1 =new Cat();
$animal_1->bow();
?>
