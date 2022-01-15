<?php
trait Mytrait{
    static $name;
   abstract function trA();
}

class MyclassA{
    use Mytrait;
    function trA(){
      echo "My Class A\n"  ;
    }
}
class MyclassB{
    use Mytrait;
    function trA(){
        echo "My Class B\n";
    }
}
MyclassA::$name = "Rayhan";
echo MyclassA::$name."\n";
MyclassB::$name = "Rahman";
echo MyclassB::$name;

$ma = new MyclassA;
$mb = new MyclassB;
echo "\n";
$ma->trA();