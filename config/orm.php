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

function json_to_array_all ():array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data;
}
    //Enregistrement et Mis a jour des donnees du fichier
function array_to_json(string $key, array $array_data)
{
    $array=json_to_array_all();
    $array[$key][]=$array_data;
    $json=json_encode($array,JSON_PRETTY_PRINT);// jpp pour embellir le stockage dans le fichier json
    
    file_put_contents(PATH_DB, $json);
}
