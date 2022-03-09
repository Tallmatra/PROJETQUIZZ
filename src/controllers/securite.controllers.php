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
            $role=ROLE_JOUEUR;
            $password2=$_POST['confirme'];
            $image=$_POST['image'];
            $image_name= $_FILES['image']['name'];
            validation($nom,$prenom,$login,$password,$password2);
            if(find_login($login)==false)
            {
                inscription($nom,$prenom,$login,$password,$role,$image_name);
                require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
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
          else{
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."error.html.php");
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
function validation(string $nom,string $prenom,string $login, string $password, string $password2)
{
    $errors=[];
    champ_obligatoire('nom', $nom, $errors);
    champ_obligatoire('prenom', $prenom, $errors);
    champ_obligatoire('login', $login, $errors);
  //  champ_obligatoire('password', $password, $errors);
    if(count($errors)==0)
    {
        valid_email('login',$login,$errors);
    }
    valid_password('password',$password,$errors);
    if(count($errors)==0)
    {
        if($password!=$password2)
        {
            $errors['password_err']="Les deux password doivent etre identique";
            $_SESSION['valid']= $errors;
            header("location:".WEB_ROOT."?controller=securite&action=inscription");
            exit();
        }
    }
    else
    {
        $_SESSION['valid']= $errors;
        header("location:".WEB_ROOT."?controller=securite&action=inscription");
        exit();
    }
}

