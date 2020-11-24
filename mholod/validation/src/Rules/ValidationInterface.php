<?php

namespace MHolod\Validation\Rules;

interface ValidationInterface
{
    public function __construct(string $value, string $name);

    public function validate();
}
