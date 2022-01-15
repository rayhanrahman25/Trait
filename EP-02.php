<?php
trait NumberSerialOne{
    function NumberSeriesA(){
        echo "This Is A\n";
        parent::NumberSeriesA();
    }
}
class Collection1{
    function NumberSeriesA(){
        echo "This is B\n";
    }
}
class Collection extends Collection1{
    use NumberSerialOne;
    
}
$cl = new Collection;
$cl->NumberSeriesA();