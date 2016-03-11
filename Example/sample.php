<?php

    require __DIR__ . '/vendor/autoload.php';

    $validator = new JsonValidator\Validator();

    var_dump($validator->validatePayload(json_encode([
                    'key' => 'value'
                ])));