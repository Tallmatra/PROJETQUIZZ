<?php
    if(isset($_SESSION["error_ins"]))
    {
      $errors= $_SESSION["error_ins"];
      unset($_SESSION["error_ins"]);
    } 
    if(isset($_SESSION['admin']))
    {
        $inscription=$_SESSION['admin'];
        unset($_SESSION['admin']);
    }

    //upload
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
                   <div class="liste">
                    <div id="center">
            <div id="body">
                <div id="form">
                    <div id="inscrire">
                        <h1> S'INSCRIRE </h1>
                        <p>Pour tester votre niveau de culture générale</p> 
                    </div>
                    
                    <div id="input">
                        <form action="<?=WEB_ROOT?>" method="POST" id="form" onsubmit="return valider()" enctype="multipart/form-data">
                            
                            <input type="hidden" name="controller" value="user">
                            <input type="hidden" name="action" value="inscription">
                            <?php if (isset($errors['inscription'])):?>
                                <p style="color:red"><?= $errors['inscription'];?></p>
                            <?php endif?>
                            <div class="block">
                                <label for="">Prénom</label><br>
                                <input id="prenom" type="text" placeholder="Aaaaa" name="prenom"><br>
                                <small></small>
                                <?php if (isset($inscription['prenom'])):?>
                                <p style="color:red"><?= $inscription['prenom'];?></p>
                            <?php endif?>
                            </div>
                                
                            <div class="block">
                                <label for="">Nom</label><br>
                                <input  id="nom" type="text" placeholder="BBBB"  name="nom"><br>
                                <small></small>
                                <?php if (isset($inscription['nom'])):?>
                                <p style="color:red"><?= $inscription['nom'];?></p>
                            <?php endif?>
                            </div>
                            
                            <div class="block">
                                <label for="">Login</label><br>
                                <input  id="login" type="e-mail"  placeholder="aabaab" name="login"><br>
                                <small></small>
                                <?php if (isset($inscription['login'])):?>
                                <p style="color:red"><?= $inscription['login'];?></p>
                            <?php endif?>
                            </div>
                            
                            <div class="block">
                                <label for="">Password</label><br>
                                <input  id="password" type="password" placeholder="........." class="password" name="password"><br>
                                <small></small>
                                <?php if (isset($errors['password'])):?>
                                <p style="color:red"><?= $inscription['password'];?></p>
                            <?php endif?>
                            </div>
                            
                            <div class="block">
                                <label for="">Confirmer Password</label><br>
                                <input  id="password2" type="password" name="confirme" class="password" placeholder="........"><br>
                                <small></small>
                                <?php if (isset($inscription['error_password'])):?>
                                <p style="color:red"><?= $inscription['error_password'];?></p>
                            <?php endif?>
                            </div>
                           
                            <div id="avatar">
                                <h3> Avatar</h3>
                                

                            </div>
                            <div id="cree">
                               <input type="submit" name="submit" value="créer un compte" >
                            </div>
                            <div id="logo">
                <label for="avatar_img">
                    <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."icone.jpeg"?>" id="img" alt="">
                    </label>
                    <input id="avatar_img" type="file" name="image" accept=".jpg,.png,.jpeg">

                </div>
                        </form>
                    </div>
                        
                </div>
                
            </div>
        </div>
    </div>

                    </div>
    <script src="<?= WEB_PUBLIC."js".DIRECTORY_SEPARATOR."inscription.js"?>"></script>
        
</body>
</html>