<article class="livre_info">
   <div class="colonne1">
      <p class="titre_livre"><strong><em>
      <?php if ($rows['book_saga']!==NULL){ ?>
         <a href="<?php echo($rows['book_saga']); ?>.php"><!--à revoir--><?php echo($rows['book_saga']); ?></a><br/>
         Tome <?php echo($rows['volume']); ?> : <?php echo($rows['title']); ?>
      <?php } else { ?>
         <a href="bibli_livre_type.php"><?php echo($rows['title']); ?></a>
      <?php } ?>
      </em></strong></p>

      <p>
      <?php if ($rows['book_author_2']!==NULL){ ?>
         <a href="<?php echo($rows['book_author']); ?>.php"><!--à revoir--><?php echo($rows['book_author']); ?></a> 
         & <a href="<?php echo($rows['book_author_2']); ?>.php"><!--à revoir--><?php echo($rows['book_author_2']); ?></a>
      <?php } else { ?>
         <a href="<?php echo($rows['book_author']); ?>.php"><!--à revoir--><?php echo($rows['book_author']); ?></a>
      <?php } ?>
      </p>
            
      <p><?php echo($rows['date']); ?></p>
      
      <p>Édition : <a href="<?php echo($rows['book_edition']); ?>.php"><?php echo($rows['book_edition']); ?></a></p>
      <p><?php echo($rows['pages']); ?> pages</p>
   </div>
            
   <div class="colonne2">
      <p><a href="<?php echo lcfirst($rows['book_genre']); ?>.php"><?php echo($rows['book_genre']); ?></a></p>
      
      <p><a href="<?php echo lcfirst($rows['book_category']); ?>.php"><?php echo($rows['book_category']); ?></a></p>
      
      <!--<p>-->
      <?php/* à retravailler
        $sql = "SELECT * FROM authors WHERE author=$auteur || author=$auteur2";
         $result = $mysqli->query($sql);
         while($rows=$result->fetch_assoc())
         { $query=mysqli_query($mysqli, $sql);
            if ($rows['book_author_2']!==NULL && $auteur2['author_origine']!==$auteur['author_origine']){ ?> 
               <a href="<?php echo lcfirst($auteur['author_origine']); ?>.php"><!--à revoir--><?php echo($auteur['author_origine']); ?></a> 
               & <a href="<?php echo lcfirst($auteur2['author_origine']); ?>.php"><!--à revoir--><?php echo($auteur2['author_origine']); ?></a>
            <?php } else { ?>
               <a href="<?php echo lcfirst($auteur['author_origine']); ?>.php"><!--à revoir--><?php echo($auteur['author_origine']); ?></a> 
         <?php }}; */?><!--</p>-->
         <!--SELECT author_origine FROM authors WHERE authors.author=books.book_author-->

      <p>
      <?php if ($rows['book_language_2']!==NULL){ ?>
         Texte en <a href="<?php echo lcfirst($rows['book_language']); ?>.php"><!--à revoir--><?php echo lcfirst($rows['book_language']); ?></a> 
         & <a href="<?php echo lcfirst($rows['book_language_2']); ?>.php"><!--à revoir--><?php echo lcfirst($rows['book_language_2']); ?></a>
      <?php } else { ?>
         Texte en <a href="<?php echo lcfirst($rows['book_language']); ?>.php"><!--à revoir--><?php echo lcfirst($rows['book_language']); ?></a>
      <?php } ?>
      </p>

      <p>Thèmes :
      <a href="<?php echo($rows['book_tag_1']); ?>.php"><?php echo($rows['book_tag_1']); ?></a>, 
      <a href="<?php echo($rows['book_tag_2']); ?>.php"><?php echo($rows['book_tag_2']); ?></a>, 
      <a href="<?php echo($rows['book_tag_3']); ?>.php"><?php echo($rows['book_tag_3']); ?></a></p>
   </div>
</article>
<style>
.livre_info{
    display: flex;
    flex-flow: row nowrap;
    justify-content: flex-start;
    align-items: flex-end;
    width: 98%;
}

.colonne1, .colonne2{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    width: 48%;
}
.colonne1>p, .colonne2>p{
    margin-bottom: 0;
}
</style>