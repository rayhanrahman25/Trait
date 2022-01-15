<?php
trait SerialA{
    function seriesA(){
        echo "A\n";
    }
}
trait SerialB{
    function seriesA(){
        echo "A++\n";
    }
}

class Something{
    use SerialA, SerialB{
     SerialA::seriesA as funkA;
     SerialB::seriesA as funkB;
    }
    function seriesA(){
       echo "Print Something\n";
    }
}

$something = new Something;
$something->seriesA();
$something->funkA();
$something->funkB();