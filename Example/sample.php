<?php

    require __DIR__ . '/vendor/autoload.php';

    $validator = new Json\Validator();

    var_dump($validator->validatePayload(json_encode([
                    'key' => 'value'
                ])));