<?php 

namespace Spl;

class SplInt extends SplType 
{
    const __default = 0 ;
    
    public function __construct($initial_value = 0, $strict = false)
    {
        if($strict && !\is_int($initial_value)) {
            throw new \InvalidArgumentException("Value not an integer");
        }
        
        parent::__construct($initial_value, $strict);
        
        if(!\is_int($initial_value)) {
            throw new \UnexpectedValueException("Value not an integer");
        }
    }
}
