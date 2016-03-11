<?php

    require __DIR__ . '/vendor/autoload.php';

    $validator = new JsonValidator\Validator();

    $payload = json_encode([
            'key' => 'value'
        ]);

    if($validator->validatePayload($payload,'json') === true){
        //do something
    };