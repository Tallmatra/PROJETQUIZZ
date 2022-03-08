<?php
    if(isset($_SESSION["error_ins"]))
    {
      $errors= $_SESSION["error_ins"];
      unset($_SESSION["error_ins"]);
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
                        <form action="<?=WEB_ROOT?>" method="POST" id="form" onsubmit="return valider()">
                            
                            <input type="hidden" name="controller" value="user">
                            <input type="hidden" name="action" value="inscription">
                            <?php if (isset($errors['inscription'])):?>
                                <p style="color:red"><?= $errors['inscription'];?></p>
                            <?php endif?>
                            <div class="block">
                                <label for="">Prénom</label><br>
                                <input id="prenom" type="text" placeholder="Aaaaa" name="prenom"><br>
                                <small></small>
                            </div>
                                
                            <div class="block">
                                <label for="">Nom</label><br>
                                <input  id="nom" type="text" placeholder="BBBB"  name="nom"><br>
                                <small></small>
                            </div>
                            
                            <div class="block">
                                <label for="">Login</label><br>
                                <input  id="login" type="e-mail"  placeholder="aabaab" name="login"><br>
                                <small></small>
                            </div>
                            
                            <div class="block">
                                <label for="">Password</label><br>
                                <input  id="password" type="password" placeholder="........." class="password" name="password"><br>
                                <small></small>
                            </div>
                            
                            <div class="block">
                                <label for="">Confirmer Password</label><br>
                                <input  id="password2" type="password" name="confirme" class="password" placeholder="........"><br>
                                <small></small>
                            </div>
                           
                            <div id="avatar">
                                <h3> Avatar</h3>
                                <button> Choisir un fichier</button>
                            </div>
                            <div id="cree">
                               <input type="submit" name="submit" value="créer un compte" >
                            </div>
                        </form>
                    </div>
                        
                </div>
                <div id="logo">

                </div>
            </div>
        </div>
    </div>

                    </div>
        
    <script src="<?= WEB_PUBLIC."js".DIRECTORY_SEPARATOR."inscription.js"?>"></script>
</body>
</html>