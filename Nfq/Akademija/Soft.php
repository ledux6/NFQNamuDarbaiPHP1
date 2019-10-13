<?php 

namespace Nfq\Akademija;

class Soft{

    function calculateHomeWorkSum(int...$numbers): int
    {
        $sum = 0;
        foreach($numbers as $number){
            $sum = $sum + $number;
        }
        return $sum;
    }

}

?>