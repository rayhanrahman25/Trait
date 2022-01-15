<?php
trait GroupOne{
   private function numberSeriesA(){
        echo "This is A\n";
    }
    function numberSeriesB(){
        $this->numberSeriesA();
        echo "This is B\n";
    }
}
trait GroupTwo{
    use GroupOne;

    function numberSeriesC(){
        echo "This is C\n";  
    }
    function numberSeriesD(){
        echo "This is D\n";
    }
}
class Group{
    use GroupTwo; // you can include two trait together using use, you can use "use (it's like extends) " this is only for trait to trait;
}

$gr = new Group;

$gr->numberSeriesD();