<article class="livre_emprunt">
   <img src="media/img/<?php echo($rows['image']); ?>.jpg" alt="<?php echo($rows['title']); ?>" title="<?php echo($rows['title']); ?>" /></a>
   
   <p><strong>**</strong>***</p> <!--moyenne ?-->
   
   <?php if ($rows['available']>0) { ?>
      <p><a href="#">Emprunter ce livre</a><br/>
      Emplacement : <?php echo($rows['book_bookcase']) . $rows['book_shelf'] . "<br>" . "Couleur : " .$rows['color'];
   } else { ?>
      <p>Livre indisponible<br/>
      <?php if ($rows['pdf']!=="") { ?>
         <a href="<?php echo($rows['pdf']); ?>">Télécharger le PDF</a><br/>
         <a href="#">Demander ce livre</a></p> <!--file d'attente-->
      <?php } else { ?>
         <a href="#">Demander ce livre</a></p> <!--file d'attente-->
   <?php } } ?>
</article>
<style>
.livre_emprunt{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: center;
    width: 98%;
    text-align: center;
}
.livre_emprunt>img{
    width:65%;
}
.livre_emprunt>p{
    margin-bottom:0;
}
</style>