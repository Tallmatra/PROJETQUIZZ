<?php 
//deplacer dans le dossier uploads
if(isset($_POST['submit']))
{
    if(array_key_exists('image', $_FILES))
    {
        $image_name= $_FILES['image']['name'];
        $tmp_image= $_FILES['image']['tmp_name'];
        $folder= WEB_PUB."uploads".DIRECTORY_SEPARATOR;
        move_uploaded_file($tmp_image, $folder.$image_name);
}   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.accueil.css"?>">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."liste.joueurs.css"?>">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."admin.css"?>">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."cree.question.css"?>">
    

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
        <div id="body">
            <div id="entete">
                <div id="creer">
                    <h1>
                        CRÉER ET PARAMÉTRER VOS QUIZZ
                    </h1>
                </div>
                <div id="deconnexion">
                <input type="submit" name="" value="Deconnexion"   enctype="multipart/form-data"  onclick="window.location.href = '<?= WEB_ROOT."?controller=securite&action=deconnexion"  ?>';">
                </div>
            </div>
            <div id="corps">
                <div id="accueil">
                    <div id="logo">
                       <div id="photo">
                           
                           <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."icone.jpeg"?>" alt="">
                           <div id="p">
                               <p>Admin</p>
                           </div>
                       </div>
                    </div>
                    <div id="question">
                        
                        <?php if(is_admin()):?>
                        <a href="<?=WEB_ROOT."?controller=user&action=accueil"?>">Acceuil <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png"?>" alt=""></a>
                         <a href="<?=WEB_ROOT."?controller=user&action=listeQuestion"?>">Liste de Questions <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt=""> </a>
                        <a href="<?=WEB_ROOT."?controller=user&action=admin"?>"> Créer un Admin <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste-active.png"?>" alt=""></a>
                        <a href="<?=WEB_ROOT."?controller=user&action=liste"?>">Liste de Joueurs <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png"?>" alt=""></a>
                        <a href="<?=WEB_ROOT."?controller=question&action=creeQuestion"?>">Créer Questions <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt=""></a> 
                        
                    </div>
                </div>
                                 <?= $contain ?>
                                 <?php endif ?>
            </div>
        </div>
    </div>
    <script src="<?= WEB_PUBLIC."js".DIRECTORY_SEPARATOR."inscription.js"?>"></script>

    
</body>
</html>