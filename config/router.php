<?php

if(isset($_REQUEST['controller'])){
  
  switch ($_REQUEST['controller']) 
  {
      case "securite" :
        require_once(PATH_SRC."controllers/securite.controllers.php");
      break;
      
      case "user" :
        require_once(PATH_SRC."controllers/user.controllers.php");
      break;
      case "question" :
        require_once(PATH_SRC."controllers/question.controller.php");
      break;
      default:
      require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."error.html.php");
  }

}else{
    require_once(PATH_SRC."controllers".DIRECTORY_SEPARATOR."securite.controllers.php");
}   