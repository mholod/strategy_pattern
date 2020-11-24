<?php

namespace MHolod\Validation\Rules;

class Email implements ValidationInterface
{
    public function __construct(string $value, string $name)
    {
        $this->value = $value;
        $this->name = $name;
    }
    
    public function validate()
    {
        if(!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            return "{$this->name} field is not a valid email";
        }
        
        return '';
    }
}
