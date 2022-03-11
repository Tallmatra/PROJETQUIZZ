
        <div id="right">  
                        
                        <div id="para">
                            
                            <h1> PARAMETRER VOTRE QUESTION</h1>
                            
                        </div>
                        
                        <div id="groupe">
                            <div class="groupe">
                                <div id="quest">
                                    <label for="">Questions:</label>
                                    <input type="text"  class="quest"> 
                                    
                                </div>  
                                <div id="point">
                                    <label for="">Nbre de points:</label>
                                    <input type="number" class="point" min="0"><br>
                                </div>
                                <div id="type">
                                    <label for="">Type de réponse:</label>
                                    <select name="" class="type">
                                        <option value="" disabled selected>Choisir un type de réponse</option>
                                        <option value="texte">choix Texte</option>
                                        <option value="radio">choix Radio</option>
                                        <option value="checbox"> choix Checkbox</option>
                                    </select>
                                    
                                    <button id="bt" ><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>" alt=""></button>
                                </div>
                                <!-- <div id="reponse">
                                <label for=""  class="for"> Réponse1:</label>
                                <input type="text" class="reponse1">
                                <input type="checkbox" class="checkbox" >
                                <input type="radio" class="radio">
                                <button class="src"><img  class="web" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-supprimer.png"?>" alt=""></button>
                                </div> -->
                                <div id="end">
                                    <button class="end">Enregistrer</button>
                                </div>
                            </div>

                        </div>
                    
                   
            </div>                 
                       
                        
                    
        </div>
   

    

</body>
</html> 
