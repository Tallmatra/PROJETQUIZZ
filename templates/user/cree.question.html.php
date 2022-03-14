
        <div id="right">  
            
            <div id="para">
                
                <h1> PARAMETRER VOTRE QUESTION</h1>
                
            </div>
            <form action="<?=WEB_ROOT?>" method="POST">
                <div id="groupe">
                    <div class="groupe">
                        <div id="genere">   
                            <div id="quest">
                                <label for="">Questions:</label>
                                <input type="text"  class="quest" name='question'> 
                                <input type="hidden" name='controller' value='question'>
                                <input type="hidden" name='action' value='ajout'>
                                
                            </div>  
                            <div id="point">
                                <label for="">Nbre de points:</label>
                                <button id="sous">-</button>
                                <input name='point' type="number" class="point" id="nbr" min="0" value="point" >
                                <button type="button" id="add">+</button>
                            </div>
                            <div id="type">
                                <label for="">Type de réponse:</label>
                                <select name="select" id="select" class="type">
                                    <option value="" disabled selected>Choisir un type de réponse</option>
                                    <option value="text">choix Texte</option>
                                    <option value="radio">choix Radio</option>
                                    <option value="checkbox"> choix Checkbox</option>
                                </select>
                                
                                <button id="bt" type="button"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt="" ></button>
                            </div>
                            <!-- <div id="reponse">
                            <label for=""  class="for"> Réponse1:</label>
                            <input type="text" class="reponse1">
                            <input type="checkbox" class="checkbox" >
                            <input type="radio" class="radio">
                            <button class="src"><img  class="web" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-supprimer.png"?>" alt=""></button>
                            </div> -->
                        </div>

                            <div id="end">
                                <button class="end">Enregistrer</button>
                            </div>
                    </div>

                </div>
            </form>            
                   
                         
                       
                        
                    
        </div>
   
        <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."cree.question.js"?>"></script>


</body>
</html> 
