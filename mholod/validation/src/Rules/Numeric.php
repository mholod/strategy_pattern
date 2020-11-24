<?php

namespace MHolod\Validation\Rules;

class Numeric implements ValidationInterface
{
    public function __construct(string $value, string $name)
    {
        $this->value = $value;
        $this->name = $name;
    }

    public function validate()
    {
        if(!is_numeric($this->value)) {
            return "{$this->name} field is not a numeric value";
        }

        return '';
    }
}
