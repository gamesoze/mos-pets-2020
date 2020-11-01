<?php

require_once "../db_defines.php";

$answer = array();
$response = $_GET;

if (count($response) == 0) {
    $answer["error"] = "Bad response";
    echo json_encode($answer);
    die(0);
} elseif (isset($response['key'])) {
    //setcookie('PHPSESSID', $response['key'], time()+36000);
    session_name('PHPSESSID');
    session_id($response['key']);
    session_start();
    var_dump($_COOKIE);
    var_dump($_SESSION);
    if (isset($_SESSION['user_id'])) {
        $answer['user_id'] = $_SESSION['user_id'];
        var_dump($_SESSION);
    } else {
        $answer["error"] = "Bad key";
        echo json_encode($answer);
        die(0);
    }
}


echo json_encode($answer);