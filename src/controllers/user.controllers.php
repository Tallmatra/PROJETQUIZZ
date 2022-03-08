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
          if(find_login($login)==false)
          {
            inscrireAdmin($nom,$prenom,$login,$password);
              header("location:".WEB_ROOT."?controller=user&action=admin");
              exit();
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
    } 
}
function liste_joueur()    
{
    ob_start();
    $data= find_users(ROLE_JOUEUR);
    $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? (int) ($_GET['page']) : 1;
    $limit = 5;
    $totalPages = ceil(count($data) / $limit);
    $page = max($page, 1);
    $page = min($page, $totalPages);
    $affiche = ($page - 1) * $limit;
    $affiche = ($affiche < 0) ? 0 : $affiche;
    $items = array_slice($data, $affiche, $limit);
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php"); 
    $contain = ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
}