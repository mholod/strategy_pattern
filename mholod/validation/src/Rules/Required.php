<?php

namespace MHolod\Validation\Rules;

class Required implements ValidationInterface
{
    public function __construct(string $value, string $name)
    {
        $this->value = $value;
        $this->name = $name;
    }

    public function validate()
    {
        if(!$this->value) {
            return "{$this->name} field is required";
        }

        return '';
    }
}
