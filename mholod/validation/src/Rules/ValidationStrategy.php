<?php

namespace MHolod\Validation\Rules;

class ValidationStrategy
{
    protected $validation;
    
    public function __construct(ValidationInterface $validation)
    {
        $this->validation = $validation;
    }
    
    public function validate()
    {
        return $this->validation->validate();
    }
}
