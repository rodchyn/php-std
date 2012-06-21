<?php

require_once '../src/Std/SplType.php';
require_once '../src/Std/SplInt.php';
require_once '../src/Std/SplFloat.php';
require_once '../src/Std/SplEnum.php';

class Month extends \Spl\SplEnum {
    const __default = self::January;
    
    const January = 1;
    const February = 2;
    const March = 3;
    const April = 4;
    const May = 5;
    const June = 6;
    const July = 7;
    const August = 8;
    const September = 9;
    const October = 10;
    const November = 11;
    const December = 12;
}

try {
    $i = new \Spl\SplEnum(Month::January);
    var_dump($i->getConstList());
} catch (\Exception $e) {
    echo $e->getMessage() . "\n";
}


echo "Value: $i";