# Strategy pattern example in Laravel 8

### Scenario 

A need has arisen for a custom validation. 

This code implements custom validation using a strategy pattern.

This code purpose is to demonstrates use of strategy pattern and it is not meant to be a production validation solution

### Usage

```
    $request = [
        ['name' => 'email_field', 'value' => 'foo@bar.com', 'rules' => 'email|required'],
        ['name' => 'first_name', 'value' => 'Jane', 'rules' => 'required'],
        ['name' => 'cost', 'value' => '1', 'rules' => 'numeric'],
    ];
    
    return Validation::validate($request);
```