<?php

namespace Spl;

abstract class SplType 
{
    const __default = null;
    
    protected $__value = null;
    
    public function __construct ($initial_value, $strict) {
        $this->__value = is_null($initial_value)?self::__default:$initial_value;
    }
    
    public function __toString()
    {
        return (string)$this->__value;
    }

}
