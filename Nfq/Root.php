<?php 

namespace Nfq;

class Root{

    function calculateHomeWorkSum(...$numbers)
    {
        $sum = 0;
        foreach($numbers as $number){
            $sum = $sum + $number;
        }
        return $sum;
    }
}

?>