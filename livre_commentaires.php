<article class="livre_commentaires">
   <h3>Commentaires</h3>
        
      <form action="traitement_com.php" method="post">
      <textarea class="commentaire_saisi" rows="5" placeholder="Exprimez-vous !"></textarea>
      <input class="envoyer" type="submit" value="Envoyer"/>
      </form>

      <div class="postes">
         <?php 
            $sql = "SELECT * FROM opinion";
            $result = $mysqli->query($sql);
            if(mysqli_num_rows($result)==0) {?>
               <p>Aucun commentaire sur ce livre.</p>
            <?php }else{
               while($rows=$result->fetch_assoc())
               {
               $query=mysqli_query($mysqli, $sql);?>
               <p><?php echo($rows['opinion_user']); ?></p>
               <p><?php echo($rows['date_com']); ?></p>
               <p><?php echo($rows['commentary']); ?></p>
            <?php } } ?>            
      </div>
</article>
<style>
.livre_commentaires{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    width: 98%;
}
h3{
    margin-bottom: 1vh;
    font-size: medium;
}
form{
    width: 100%;
}
form>textarea{
    width: 100%;
    height: 10vh;
    border: 1px solid black;
}
.postes{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    width: 100%;
}
</style>