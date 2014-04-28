<?php

require_once('./api-creator.php');

$data = [
    "status" => (string)http_response_code(),
    "data" => [
        "hoge" => "hoge",
        "ahya" => "ahya"
    ]
];

ApiCreator::createJSON($data);
