<?php

namespace MHolod\Validation;


use MHolod\Validation\Rules\Email;
use MHolod\Validation\Rules\Numeric;
use MHolod\Validation\Rules\Required;
use MHolod\Validation\Rules\ValidationStrategy;

class Validation
{
    public static function validate($request)
    {
        $errors = [];

        foreach ($request as $field) {
            $rules = explode('|', $field['rules']);
            
            foreach ($rules as $rule) {
                $error = '';
                
                switch($rule) {
                    case 'email':
                        $error = (new ValidationStrategy(
                            new Email($field['value'], $field['name'])
                        ))->validate();
                        break;
                    case 'numeric':
                        $error = (new ValidationStrategy(
                            new Numeric($field['value'], $field['name'])
                        ))->validate();
                        break;
                    case 'required':
                        $error = (new ValidationStrategy(
                            new Required($field['value'], $field['name'])
                        ))->validate();
                        break;
                    default:
                        throw new \Exception('Invalid rule');
                }
                
                if ($error) {
                    $errors[$field['name']]['errors'][] = $error;
                }
            }
        }
        
        if (!empty($errors)) {
            return $errors;
        }
        
        return true;
    }
}
