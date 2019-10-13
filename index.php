<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);


require_once 'vendor/autoload.php';


use Nfq\Akademija\Strict;
use Nfq\Akademija\Soft;
use Nfq\Akademija\NotTyped;
use Nfq\Root;
use Wujunze\Colors;

$colors = new Colors();

$class = new Root();
echo $colors->getColoredString( "calculateHomeWorkSum: ". $class->calculateHomeWorkSum(3,2.2,'1') . PHP_EOL, "white", "green");
$class = new NotTyped();
echo $colors->getColoredString( "Nfq\Akademija\NotTyped\calculateHomeWorkSum: ".$class->calculateHomeWorkSum(3,2.2,'1'). PHP_EOL, "white", "green");
$class = new Soft();
echo $colors->getColoredString( "Nfq\Akademija\Soft\calculateHomeWorkSum: ".$class->calculateHomeWorkSum(3,2.2,'1'). PHP_EOL, "white", "green");
$class = new Strict();
echo $colors->getColoredString( "Nfq\Akademija\Strict\calculateHomeWorkSum: ".$class->calculateHomeWorkSum(3,2.2,'1'). PHP_EOL, "white", "green");





?>