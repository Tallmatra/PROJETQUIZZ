<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.accueil.css"?>">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."liste.joueurs.css"?>">

    <title>Document</title>
</head>
<body>
    
    <div id="container">
        <div id="head">
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
                <input type="submit" name="" value="Deconnexion"   onclick="window.location.href = '<?= WEB_ROOT."?controller=securite&action=deconnexion" ?>';">
                </div>
            </div>
            <div id="corps">
                <div id="accueil">
                    <div id="logo"></div>
                    <div id="question">
                        
                        <?php if(is_admin()):?>
                        <a href="<?=WEB_ROOT."?controller=user&action=accueil"?>">Acceuil <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png"?>" alt=""></a>
                         <a href="">Liste de Questions <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt=""> </a>
                        <a href="">Créer un Admin <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste-active.png"?>" alt=""></a>
                        <a href="<?=WEB_ROOT."?controller=user&action=liste"?>">Liste de Joueurs <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png"?>" alt=""></a>
                        <a href="">Créer Questions <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt=""></a> 
                        
                    </div>
                </div>
                                 <?= $contain ?>
                                 <?php endif ?>
            </div>
        </div>
    </div>
</body>
</html>