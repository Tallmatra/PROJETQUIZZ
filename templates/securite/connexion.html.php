<?php
    if(isset($_SESSION[KEY_ERRORS]))
    {
        $errors=$_SESSION[KEY_ERRORS];
        unset($_SESSION[KEY_ERRORS]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.connexion.css"?>">
    <title>Document</title>
</head>
<body>
    
    
    <div id="container">
    <div id="head"> <h1>Login Form </h1></div> 
        <form action="<?=WEB_PUBLIC?>" method="POST" onSubmit=" return allOk()" >
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="connexion">

            <div id=input>
            <?php if (isset($errors['connexion'])):?>
        <p style="color:red"><?= $errors['connexion'];?></p>
      <?php endif?>
                <div class="login">
                    <input type="text" name="login" id="login" placeholder="Login" > 
                    <small></small>
                    <?php if (isset($errors['login'])):?>
        <p style="color:red"><?= $errors['login'];?></p>
      <?php endif?>
                </div>
                <div class="login">
                   <input type="password" name="Password"  placeholder="Password" id="password"> 
                   <small></small>
                   <?php if (isset($errors['password'])):?>
        <p style="color:red"><?= $errors['password'];?></p>
      <?php endif?>
                </div>
                
                <div class="connexion">
                 <input type="submit" name="button" value="Connexion" id="connexion">

                 <p class="lien"><a href="<?=WEB_ROOT."?controller=securite&action=inscrire"?>">S'inscrire pour jouer?</a></p>
                </div>
                
                
            </div> 
        </form>   
    </div>
    
   <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.js"?>"></script>
    
</body>

</html> 