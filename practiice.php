<?php
trait one{
    static $name;
    abstract function Age();
}

class Something1{
    use one;

    function Age(){
        echo "22+\n";
    }
}

class Something{
    use one;

    function Age(){
        echo "22\n";
    }
}
$class = new Something;
$class::$name = "Rayhan\n";
echo $class::$name;
$class->Age();

$class2 = new Something1;
$class2::$name = "Rumel\n";
echo $class2::$name;
$class2->Age();



