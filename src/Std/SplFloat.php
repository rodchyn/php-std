<?php 

namespace Spl;

class SplFloat extends SplType 
{
    const __default = 0 ;
    
    public function __construct($initial_value = 0, $strict = false)
    {
        if($strict && !\is_float($initial_value)) {
            throw new \InvalidArgumentException("Value not a float");
        }
        
        parent::__construct((float)$initial_value, $strict);
        
        if(!\is_float($initial_value)) {
            throw new \UnexpectedValueException("Value not a float");
        }
    }
}
