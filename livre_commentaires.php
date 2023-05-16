<?php 
$sql = "SELECT * FROM library.books WHERE id_book=$i"; 
   $result = $mysqli->query($sql);
   while($rows=$result->fetch_assoc())
{ $query=mysqli_query($mysqli, $sql); ?>

<article class="livre_commentaires">
   <h3>Commentaires</h3>
        
      <form action="traitement_com.php" method="post">
      <textarea class="commentaire_saisi" rows="5" placeholder="Exprimez-vous !"></textarea>
      <input class="envoyer" type="submit" value="Envoyer"/>
      </form>

      <div class="tous_postes">
         <?php 
            $sql = "SELECT * FROM opinion";
            $result = $mysqli->query($sql);
            if(mysqli_num_rows($result)==0) {?>
               <p>Aucun commentaire sur ce livre.</p>
            <?php }else{
               while($rows=$result->fetch_assoc())
               {
               $query=mysqli_query($mysqli, $sql);?>
               <div class="postes">
               <p><?php echo($rows['opinion_user']); ?></p>
               <p><?php echo($rows['date_com']); ?></p>
               <p><?php echo($rows['commentary']); ?></p>
               </div>
            <?php } } ?>            
      </div>
</article>
<?php } ?>
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
main form{
    width: 100%;
}
main form>textarea{
    width: 100%;
    height: 10vh;
    border: 1px solid black;
    border-radius: 5px;
    background-color: #fff8e9;
}
textarea:focus{
    outline:none;
    background: white;
    border: 2px solid #3A577C;
    box-shadow: 2px 2px 2px #897f66cc;
}
.tous_postes{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
}
.postes{
    background-color: #e6d3ae;
    border-radius: 10px;
    padding: 5px;
}
.envoyer{
    background-color: #3A577C;
    border-radius: 15px;
    color: #eee8dfff;
    padding: 5px;
    border: none;
    margin-top: 3px;
}
.envoyer:hover{
    background-color: #3d6393;
    color: #f4f1ebff;
    box-shadow: 2px 2px 2px #897f66cc;
    cursor: pointer;
}
</style>