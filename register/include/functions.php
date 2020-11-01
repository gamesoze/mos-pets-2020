<?php

function is_str_valid($str)
{
    return (preg_match("/[^a-zA-Z0-9\-_]+/", $str) === 0)? true: false;
}

function is_ru_str_valid($str)
{
    return (preg_match("/[^а-яА-Я0-9\-_]+/", $str) === 0)? true: false;
}

function is_email_valid($email)
{
    return (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email) === 0)? false: true;
}
?>