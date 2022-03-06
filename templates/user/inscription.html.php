<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=WEB_ROOT?>" method="POST">
    <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="inscription">
        <label for="">Prénom</label><br><br>
        <input type="text" placeholder="Aaaaa" name="prenom"><br><br>
        <label for="">Nom</label><br><br>
        <input type="text" placeholder="BBBB"  name="nom"><br><br>
        <label for="">Login</label><br><br>
        <input type="e-mail"  placeholder="aabaab" name="login"><br><br>
        <label for="">Password</label><br><br>
        <input type="password" placeholder="........." name="password"><br><br>
        <label for="">Confirmer Password</label><br><br>
        <input type="password" name="confirme"  placeholder="........"><br><br>
        <input type="submit" name="submit" value="créer un compte">
    </form>
</body>
</html>