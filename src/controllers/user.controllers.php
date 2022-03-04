<?php
    require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php"); 

if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
     if(($_REQUEST['action']=="connexion")){

      }

    }

}


if($_SERVER["REQUEST_METHOD"]=="GET")
{
 
  if(isset($_REQUEST['action'] ))
    {
      if(($_REQUEST['action']=="accueil"))
      {
        
        liste_joueur();
      }
      
    } 
}
function liste_joueur()    
{
    ob_start();
    $data= find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php"); 
    $contain = ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 
}
