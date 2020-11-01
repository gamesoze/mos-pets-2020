<?php

require_once "../db_defines.php";
header('Content-Type: charset=utf-8');
header('Content-Type: application/json');

$answer = array();
$response = $_GET;

if (count($response) == 0) {
    $answer["error"] = "Bad response";
    echo json_encode($answer);
    die(0);
} elseif (isset($response['key'])) {
    //setcookie('PHPSESSID', $response['key'], time()+36000);
    session_id($response['key']);
    session_start();
    if (isset($_SESSION['user_id'])) {
        if (isset($response['query'])) {
            $db = mysqli_connect(_DB_HOST_, _DB_USER_, _DB_PASS_, _DB_NAME_);
            $db->query("SET NAMES utf8");
            $db->query("SET CHARACTER SET utf8");

            $tables = json_decode($response['query'], $assoc = true);
            if ($tables == null) {
                $answer["error"] = "Bad query";
                echo json_encode($answer);
                die(0);
            }


            $db = mysqli_connect(_DB_HOST_, _DB_USER_, _DB_PASS_, _DB_NAME_);
            $db->query("SET NAMES utf8");
            $db->query("SET CHARACTER SET utf8");


            /*
            for ($i = 0; $i < count($tables); $i++) {
                $q = "SELECT * FROM `" . array_keys($tables)[$i] . "` WHERE ";
                for ($j = 0; $j < count($tables[array_keys($tables)[$i]]); $j++) {
                    $tb = array_keys($tables)[$i];
                    $col = array_keys($tables[array_keys($tables)[$i]])[$j];
                    $q .= $col . " = '" . strval($tables[$tb][$col]) . "'" . ($j < count($tables[$tb])) ? " AND " : "";
                }
                echo $q;
                $res = $db->query($q);
                $answer[array_keys($tables)[$i]] = $res->fetch_assoc();
            }*/

            foreach ($tables as $tb => $col) {

                $q = "SELECT * FROM `" . $tb . "` WHERE ";

                foreach ($col as $col_key => $col_val) {
                    $q .= $col_key . " = '" . $col_val . "'" . ((array_search($col_key, array_keys($col)) < count(array_keys($col)) - 1) ? " AND " : "");
                }
                $res = $db->query($q);
                $answer[$tb] = $res->fetch_all();
            }
            $answer["error"] = "none";
            echo json_encode($answer,  JSON_UNESCAPED_UNICODE);
            die(0);

        }
    } else {
        $answer["error"] = "Bad key";
        echo json_encode($answer);
        die(0);
    }
}


echo json_encode($answer);