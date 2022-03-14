<?php
    require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php"); 
    require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."question.model.php"); 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   if(isset($_REQUEST['action']))
   {
     if(($_REQUEST['action']=="ajout"))
     {
       $data=json_to_array("questions");
       $end= end($data);
       $id= $end['id'];
       $question=$_POST['question'];
       $point=$_POST['point'];
       $type=$_POST['select'];
       $input=$_POST['input'];
       foreach($input as $index => $input)
       {
         $reponses[$index]=$input;
       }
      switch($type){
    
        case"text":
          $correct=$reponses;
       
        break;
        case"radio":
          $radio=$_POST['radio'];
            $correct[]=$radio;
        break;
        case"checkbox":
          $checkbox=$_POST['checkbox'];
          foreach($checkbox as $value){
            $correct[]=$value;
          }
        break;
      }
      inscription_Question($id, $question,$point,$type,$reponses,$correct);
      ob_start();
      require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."cree.question.html.php");
      $contain = ob_get_clean();
      require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
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
      if($_REQUEST['action']="creeQuestion"){
        ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."cree.question.html.php");
        $contain = ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
       }
      
      else{
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."error.html.php");
      }
      
  } 
}
