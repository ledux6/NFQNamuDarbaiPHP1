<?php

namespace Nfq\Akademija;

class NotTyped{

    function calculateHomeWorkSum(...$numbers): int
    {
        $sum = 0;
        foreach($numbers as $number){
            $sum = $sum + $number;
        }
        return $sum;
    }

}
?>