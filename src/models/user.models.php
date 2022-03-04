<?php
function find_user_login_password(string $login,string $password):array{
    $users=json_to_array("users");
    foreach ($users as $user) {
    if( $user['login']==$login && $user['password']==$password)
    return $user;
    }
    return [];
} 
function find_login(string $login):bool
{
    $users=json_to_array("users");
    foreach ($users as $user) 
    {
        if($user['login']==$login)
            return true;
    }
    return false;
}
function inscrireJoueur($nom,$prenom,$login,$password)
{
    $put=array(
            'nom' => $nom,
            'prenom' => $prenom,
            'login' => $login,
            'password' => $password,
            'score' => '0',
            'role' => ROLE_JOUEUR,
            );
                array_to_json("users",$put);
}
function inscrireAdmin($nom,$prenom,$login,$password)
{
    $put=array(
            'nom' => $nom,
            'prenom' => $prenom,
            'login' => $login,
            'password' => $password,
            'score' => '0',
            'role' => ROLE_ADMIN,
            );
                array_to_json("users",$put);
}
