<?php
function champ_obligatoire(string $key,string $data,array &$errors,string
    $message="ce champ est obligatoire"){
    if(empty($data)){
        $errors[$key]=$message;
    }
}
function valid_email(string $key,string $data,array &$errors,string $message="Email invalid")
{
    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $data)) 
    {
        $errors[$key]=$message;
    }
}
function valid_password (string $key,string $data,array &$errors,string $message="Password invalid")
{
    $letters =preg_match ('#[a-zA-Z]#' ,$data); 
    $numbers =preg_match ('#[0-9]#' ,$data); 
    if(strlen($data)<6 || !$numbers || !$letters || empty($data))
    {
        $errors[$key]=$message;
    }
}