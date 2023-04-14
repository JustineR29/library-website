<form method="post" action="traitement_inscription.php">
    <fieldset>
    <legend>Profil</legend>
    <p>
    <label for="color">Couleur de votre livre de profil :</label>
    <input type="color" name="color" id="color"> <br/>
          
    <label for="titre">Titre de votre livre :</label>
            <input type="text" name="titre" id="titre" size="30" placeholder="Ex: Le journal de Marie"/> <br/>
            
            <label for="police">Police d'écriture de votre titre :</label>
            <select name="police" id="police">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
            </select><br/>

         <label for="color">Couleur de votre titre :</label>
            <input type="color" name="color" id="color"> <br/>

            <label for="style">Style de votre livre :</label>
            <select name="style" id="police">
                  <option value="normal">Sans décoration</option>
                  <option value="cadre_interieur">Cadre</option>
                  <option value="cadre_double">Cadre à double bandes</option>
                  <option value="coin">Coins de cadre</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
                  <option value="#">#</option>
            </select><br/>

         <label for="titre">Couleur de votre décoration :</label>
            <input type="color" name="color" id="color"> <br/>
            
         </p></fieldset>
    </form>
    <input class="valider" type="submit" value="Valider"/>