<?php
// pour charger le model
require_once( PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
     if(($_REQUEST['action']=="connexion"))
     {

      $login=$_POST['login'] ;
      $password=$_POST['Password'] ;
      connexion($login,$password); 
      }
      elseif(($_REQUEST['action']=="inscription"))
     {

            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $login=$_POST['login'];
            $password=$_POST['password'];
            if(find_login($login)==false)
            {
                inscrireJoueur($nom,$prenom,$login,$password);
                header("location:".WEB_ROOT."?controller=securite&action=connexion");
                exit();
            }
            else
            {
                $errors=[];
                $errors['inscription']="Login existant";
                $_SESSION["error_ins"]= $errors;
                header("location:".WEB_ROOT."?controller=securite&action=inscrire");
                exit();
            } 
      }

    }

}


if($_SERVER["REQUEST_METHOD"]=="GET")
{
      if(isset($_GET['action']))
      {
        if(($_GET['action']=="connexion"))
        {
          require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
          
        }
        elseif(($_GET['action']=="deconnexion"))
        {
              logout();  
        } 
        elseif(($_GET['action']=="inscrire"))
        {
          require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
  
        }  
      }  
      else
      {
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
      }
    
}

//US1
function connexion(string $login, string $password)
{
    $errors=[];
    champ_obligatoire('login', $login, $errors);
  //  champ_obligatoire('password', $password, $errors);
    if(count($errors)==0)
    {
        valid_email('login',$login,$errors);
    }
    valid_password('password',$password,$errors);
    if(count($errors)==0)
    {
        $users= find_user_login_password($login,$password);
        if(count($users)!=0)
        {
            $_SESSION[KEY_USER]= $users;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }
        else
        {
            $errors['connexion']="Login ou mot de passe incorect";
            $_SESSION[KEY_ERRORS]= $errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }
    else
    {
        $_SESSION[KEY_ERRORS]= $errors;
        header("location:".WEB_ROOT);
        exit();
    }
}

function logout()
{
    session_destroy();
    session_unset();
    header("location:".WEB_ROOT);
    exit(); 
}