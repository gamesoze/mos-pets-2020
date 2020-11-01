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

$phone = "";
$email = "";
$Fname = "";
$fisrstname = "";
$lastname = "";
$error = "NULL";
$success = false;

if (@$_POST['phone'] && @$_POST['email'] && @$_POST['pwd'] && @$_POST['pwd_repeat'] && @$_POST['fisrstname'] && @$_POST['lastname'] && @$_POST['Fname']) {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $Fname = $_POST['lastname'];
    $fisrstname = $_POST['fisrstname'];
    $lastname = $_POST['Fname'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd_repeat'];

    if ($phone == "" || $email == "" || $pwd == "" || $pwd_repeat == "" || $Fname == "" || $fisrstname == "" || $lastname == "") {
        $error = "Все поля должны быть заполнены";
    } elseif (!is_str_valid($phone)) {
        $error = "Логин может содержать только латинские символы верхнего и нижнего регистра, а также цифры и символы:<br>[-, _].";
    } elseif (!is_email_valid($email)) {
        $error = "Некорректный формат почты";
    } elseif (!is_str_valid($Fname) && !is_ru_str_valid($fisrstname) && !is_ru_str_valid($lastname)) {
        $error = "ПО русски, я сказал";
    } elseif (!is_str_valid($pwd)) {
        $error = "Пароль может содержать только латинские символы верхнего и нижнего регистра, а также цифры и символы:<br>[-, _].";
    } elseif (strlen($phone) < 6 || strlen($phone) > 16) {
        $error = "Длинна логина должна быть от 6 до 16 символов.";
    } elseif (strlen($pwd) < 6 || strlen($pwd) > 16) {
        $error = "Длинна пароля должна быть от 6 до 16 символов.";
    } elseif ($pwd !== $pwd_repeat) {
        $error = "Пароли не совпадают";
    } elseif ($phone === $pwd) {
        $error = "Логин не может совпадать с паролем";
    } else {
        $db = mysqli_connect(_DB_HOST_, _DB_USER_, _DB_PASS_, _DB_NAME_);
        $db->query("SET NAMES utf8");
        $db->query("SET CHARACTER SET utf8");

        $q_users = $db->query("SELECT * FROM `users`" . "WHERE email = '$email'");

        $q_users = $q_users->fetch_all();

        if (count($q_users) == 0) {
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $result = $db->query("INSERT INTO `users` (phone, password, access_level, email, lastname, fisrstname, Fathername)"
                . " VALUE ('$phone', '$pwd', 0, '$email',  '$lastname', '$fisrstname', '$Fname')");
            $success = true;
            $error = "Поздравляю - вы зарегестрированы!!!";
        } else {
            $error = "Пользователь с именем \"$phone\" уже существует";
        }

    }

}

require_once "include/head.php";
require_once "include/body.php";

session_write_close();