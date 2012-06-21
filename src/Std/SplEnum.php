<?php

namespace Spl;

class SplEnum extends SplType 
{
    private $__values = array();
    
    const __default = null ;
    
    public function getConstList ($include_default = false )
    {
        if($include_default) {
            return $this->__values;
        } else {
            return $this->__values;
        }
    }
    
    public function __construct($initial_value = null, $strict = false)
    {
        echo \get_class($this);
        $reflect = new \ReflectionClass(\get_class());
        $this->__values = (array)$reflect->getConstants();
        
        var_dump($this->__values);
        
        if($strict && !\in_array($initial_value, $this->__values)) {
            throw new \InvalidArgumentException("Value not a float");
        }
        
        parent::__construct($initial_value, $strict);
        
        if(!\in_array($initial_value, $this->__values)) {
            throw new \UnexpectedValueException("Value not a const in enum " . __CLASS__);
        }
    }
}
