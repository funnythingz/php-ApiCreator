<?php

class ApiCreator {

    static public function createJSON($data) {
        return json_encode($data);
    }

}

class Main {

    static public function putJSON() {

        $data = [
            "status" => "200",
            "data" => [
                "hoge" => "hoge",
                "ahya" => "ahya"
            ]
        ];

        header('Access-Control-Allow-Origin:*');
        header("Content-Type: text/json");

        echo ApiCreator::createJSON($data);

    }

}

Main::putJSON();
