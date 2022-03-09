<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."error.css"?>">
    <title>Page d'erreur</title>
</head>
<body>
<div class="header">

                <h1>LE PLAISIR DE JOUER</h1>
        </div>
    <div class="error_contain">
        <div class="text_error">
            <h1>Cette page n'existe pas</h1>
            <p>La page que vous recherchez semble introuvable. Sans détour, il n'est point de voyage... Retournez à la page de connexion.</p>
            <button onclick="window.location.href = '<?=WEB_ROOT."?controller=user&action=accueil"?>';">Retour a la page d'acceuil</button>
        </div>
        <div class="img_error">
            <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."error_404.svg"?>" alt="">
        </div>
    </div>
</body>
</html>