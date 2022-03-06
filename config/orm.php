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
function array_to_json(string $key, array $array_data)
{
    $array[$key]=json_to_array("users");
    $array[$key][]=$array_data;
    $json=json_encode(["users"=>$array[$key]],JSON_PRETTY_PRINT);
    file_put_contents(PATH_DB, $json);
}
