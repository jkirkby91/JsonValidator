# Json-Validator

[![Build Status](https://travis-ci.org/jkirkby91/JsonValidator.svg?branch=master)](https://travis-ci.org/jkirkby91/JsonValidator)

Simple PHP class if you work with API's a lot to validate json payloads and response bodies

# To install
 composer require jkirkby91/jsonvalidator

# Validate Json string

    $validator = new JsonValidator\Validator();

    $payload = json_encode([
            'key' => 'value'
        ]);

    if($validator->validatePayload($payload,'json') === true){
       //do something
    };
    
# Validate response and return in array format
   
    $validator = new JsonValidator\Validator();

    $payload = json_encode([
            'key' => 'value'
        ]);

    $response_array = $validator->validatePayload($response,'array');
    
# Validate response and return an object
   
    $validator = new JsonValidator\Validator();

    $payload = json_encode([
            'key' => 'value'
        ]);

    $response_array = $validator->validatePayload($response,'obj');
    
