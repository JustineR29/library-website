<article class="livre_emprunt">
   <img src="media/img/cover/<?php echo($rows['image']); ?>.webp" alt="<?php echo($rows['title']); ?>" title="<?php echo($rows['title']); ?>" /></a>
   
   <p><strong>**</strong>***</p> <!--moyenne ?-->
   
   <?php if ($rows['available']>0) { ?>
      <p class="emprunter"><a href="#">Emprunter ce livre</a></p>
      <p>Emplacement : <?php echo($rows['book_bookcase']) . $rows['book_shelf'] . "<br>" . "Couleur : " .$rows['color'];
   } else { ?></p>
      <p>Livre indisponible</p>
      <?php if ($rows['pdf']!=="") { ?>
         <p class="telecharger"><a href="<?php echo($rows['pdf']); ?>">Télécharger le PDF</a></p>
         <p class="demander"><a href="#">Demander ce livre</a></p> <!--file d'attente-->
      <?php } else { ?>
         <p class="demander"><a href="#">Demander ce livre</a></p> <!--file d'attente-->
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
    box-shadow: 3px 3px 5px black;
}
.livre_emprunt>p{
    margin-bottom:0;
}
.emprunter, .telecharger, .demander{
    color: #eee8dfff;
    background-color: #3A577C;
    border-radius: 15px;
    padding: 5px;
}
.emprunter:hover, .telecharger:hover, .demander:hover{
    color: #f4f1ebff;
    background-color: #3d6393;
    box-shadow: 2px 2px 2px #897f66cc;
}
</style>