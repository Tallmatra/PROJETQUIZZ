<?php
    require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php"); 

if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
     if(($_REQUEST['action']=="inscription"))
     {
          $nom=$_POST['nom'];
          $prenom=$_POST['prenom'];
          $login=$_POST['login'];
          $password=$_POST['password'];
          $role=ROLE_ADMIN;
          $password2=$_POST['confirme'];
          $image=$_POST['image'];
          $image_name= $_FILES['image']['name'];
          validationAdmin($nom,$prenom,$login,$password,$password2);
          if(find_login($login)==false)
          {
              inscription($nom,$prenom,$login,$password,$role,$image_name);
              ob_start();
              require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."admin.html.php");
              $contain = ob_get_clean();
              require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
          }
          else
          {
              $errors=[];
              $errors['inscription']="Login existant";
              $_SESSION["error_ins"]= $errors;
              header("location:".WEB_ROOT."?controller=user&action=admin");
              exit();
          } 
    }

    }

}


if($_SERVER["REQUEST_METHOD"]=="GET")
{
 
  if(isset($_REQUEST['action'] ))
    {
      if(!is_connect())
      {
        header("location:".WEB_ROOT);
        exit(); 
      }
      if(($_REQUEST['action']=="accueil"))
      {
        
        liste_joueur();
      }
      elseif(($_REQUEST['action']=="liste"))
      {
        
        liste_joueur();
      }
      elseif(($_REQUEST['action']=="admin"))
      {
        ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."admin.html.php");
        $contain = ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
      }
      else{
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."error.html.php");
      }
  } 
}
function liste_joueur()    
{
    ob_start();
    $data= find_users(ROLE_JOUEUR);
    $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? (int) ($_GET['page']) : 1; //forme ternaire
    $limit = 8;
    $totalPages = ceil(count($data) / $limit);
    $page = max($page, 1);
    $page = min($page, $totalPages);
    $affiche = ($page - 1) * $limit;// determine la position à afficher
    $affiche = ($affiche < 0) ? 0 : $affiche;
    $items = array_slice($data, $affiche, $limit);
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php"); 
    $contain = ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
}

function validationAdmin(string $nom,string $prenom,string $login, string $password, string $password2)
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
            $errors['error_password']="Les deux password doivent etre identique";
            $_SESSION['admin']= $errors;
            header("location:".WEB_ROOT."?controller=user&action=admin");
            exit();
        }
    }
    else
    {
        $_SESSION['valid']= $errors;
        header("location:".WEB_ROOT."?controller=user&action=admin");
        exit();
    }
}

