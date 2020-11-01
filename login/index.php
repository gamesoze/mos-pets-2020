<?php

session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['remember'] == 'y')
        $delta = 60 * 60 * 24 * 365;
    else
        $delta = 60 * 60 * 12;

    if (time() - $_SESSION['login_time'] > $delta)
        unset($_SESSION);

    if ($_SESSION['user_id'] != '')
        header("Location: /");
}


require_once "../db_defines.php";
require_once "include/functions.php";

$login = "";
$error = "NULL";
$success = false;

if (@$_POST["login"] && @$_POST["pwd"]) {
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $remember = isset($_POST["remember"]) ? "y" : "n";

    if (!is_str_valid($login)) {
        $error = "Такого пользователя несушествует";
    } else {
        $db = mysqli_connect(_DB_HOST_, _DB_USER_, _DB_PASS_, _DB_NAME_);

        $q_get_user = "SELECT * FROM `users` WHERE login = '$login'";
        $result = $db->query($q_get_user);
        if ($db->connect_error)
            die("Bad Connection");
        $result = $result->fetch_assoc();

        if ($result == null) {
            $error = "Такого пользователя не существует";
        } elseif (!password_verify($pwd, $result["password"])) {
            $error = "Неправильное имя пользователя или пароль";
        } else {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['access'] = $result['access_level'];
            $_SESSION['remember'] = $remember;
            $_SESSION['login_time'] = time();
            $error = "Вход выполнен успешно";
            $success = true;
            header("Location: /");
        }
    }


}

require_once "include/head.php";
require_once "include/body.php";

session_write_close();