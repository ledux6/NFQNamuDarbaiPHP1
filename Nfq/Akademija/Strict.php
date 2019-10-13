<?php
declare(strict_types=1);

namespace Nfq\Akademija;

class Strict{
    
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