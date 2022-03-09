<?php
    if(isset($_SESSION["error_ins"]))
    {
      $errors= $_SESSION["error_ins"];
      unset($_SESSION["error_ins"]);
    } 
    if(isset($_SESSION['valid']))
    {
        $errors=$_SESSION['valid'];
        unset($_SESSION['valid']);
    }

    //deplacer dans le dossier uploads
    if(isset($_POST['submit']))
    {
        if(array_key_exists('image', $_FILES))
        {
            $image_name= $_FILES['image']['name'];
            $tmp_image= $_FILES['image']['tmp_name'];
            $folder= WEB_PUB."uploads".DIRECTORY_SEPARATOR;
            move_uploaded_file($tmp_image, $folder.$image_name);
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."inscription.css"?>">
    
    <title>Document</title>
</head>
<body>
    <div id="container">
        <div id="head">
            <div id="head1"> 
              <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>">
            </div>
            <div id="head2">
                <h1>
                    Le plaisir de jouer
                                                
                </h1>
            </div>
        </div>
        <div id="center">
            <div id="body">
                <div id="form">
                    <div id="inscrire">
                        <h1> S'INSCRIRE </h1>
                        <p>Pour tester votre niveau de culture générale</p> 
                         <hr>
                    
                    </div>
                    
                    <div id="input">
                        <form action="<?=WEB_ROOT?>" method="POST" id="formulaire" onsubmit="return valider()" enctype="multipart/form-data">
                            <div class="formulaire">
                            <input type="hidden" name="controller" value="securite">
                            <input type="hidden" name="action" value="inscription">
                            <?php if (isset($errors['inscription'])):?>
                                <p style="color:red"><?= $errors['inscription'];?></p>
                            <?php endif?>
                            <div class="block">
                                <label for="">Prénom</label><br>
                                <input id="prenom" type="text" placeholder="Aaaaa" name="prenom"><br>
                                <small></small>
                                <?php if (isset($errors['prenom'])):?>
                                    <p style="color:red"><?= $errors['prenom'];?></p>
                                <?php endif?>
                            </div>
                                
                            <div class="block">
                                <label for="">Nom</label><br>
                                <input  id="nom" type="text" placeholder="BBBB"  name="nom"><br>
                                <small></small>
                                <?php if (isset($errors['nom'])):?>
                                    <p style="color:red"><?= $errors['nom'];?></p>
                                <?php endif?>
                            </div>
                            
                            <div class="block">
                                <label for="">Login</label><br>
                                <input  id="login" type="e-mail"  placeholder="aabaab" name="login"><br>
                                <small></small>
                                <?php if (isset($errors['login'])):?>
                                    <p style="color:red"><?= $errors['login'];?></p>
                                <?php endif?>
                            </div>
                            
                            <div class="block">
                                <label for="">Password</label><br>
                                <input  id="password" type="password" placeholder="........." class="password" name="password"><br>
                                <small></small>
                                <?php if (isset($errors['password'])):?>
                                    <p style="color:red"><?= $errors['password'];?></p>
                                <?php endif?>
                            </div>
                            
                            <div class="block">
                                <label for="">Confirmer Password</label><br>
                                <input  id="password2" type="password" name="confirme" class="password" placeholder="........"><br>
                                <small></small>
                                <?php if (isset($errors['password_err'])):?>
                                   <p style="color:red"><?= $errors['password_err'];?></p>
                                <?php endif?>
                            </div>
                            <div id="cree">
                                <input type="submit" name="submit" value="créer un compte" >
                                <a href="<?= WEB_ROOT."?controller=securite&action=connexion"?>">SE CONNECTER</a>
                                </div>
                            </div>
                            <div class="avatar">
                                
                                <div id="logo">
                                        <label for="avatar_img">
                                    <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."icone.jpeg"?>" id="img" alt="">
                                    </label>
                                    <input id="avatar_img" type="file" name="image" accept=".jpg,.png,.jpeg">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                        
                </div>
                
            </div>
        </div>
    </div>
    <script src="<?= WEB_PUBLIC."js".DIRECTORY_SEPARATOR."inscription.js"?>"></script>

</body>
</html>