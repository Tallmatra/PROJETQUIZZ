<?php
//recuperation du contenu d un fichier
//$json=file_get_contents(PATH_DB);
// $arr=json_decode($json,true);
// var_dump($arr)  ;die;
function json_to_array (string $key):array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data[$key];
    }
    //Enregistrement et Mis a jour des donnees du fichier
    function save_data(string $key,array $data):array{
    return [];
}