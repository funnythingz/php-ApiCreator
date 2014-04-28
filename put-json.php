<?php

class ApiCreator {

    static public function createJSON($data) {
        return json_encode($data);
    }

}

class Main {

    static public function putJSON($args) {

        header('Access-Control-Allow-Origin:*');
        header("Content-Type: text/json");

        echo ApiCreator::createJSON($args);

    }

}

$data = [
    "status" => "200",
    "data" => [
        "hoge" => "hoge",
        "ahya" => "ahya"
    ]
];

Main::putJSON($data);
