<?php

class ApiCreator {

    static public function createJSON($args) {

        header('Access-Control-Allow-Origin:*');
        header("Content-Type: text/json");

        echo json_encode($args);

    }

}
