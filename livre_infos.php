<article class="livre_info">
   <div class="colonne1">
      <p class="titre_livre"><strong><em>
      <?php if ($rows['book_saga']!==NULL){ ?>
         <a href="bibli_saga_type.php?s=<?=urlencode($rows['book_saga'])?>"><!--à revoir--><?php echo($rows['book_saga']); ?></a><br/>
         Tome <?php echo($rows['volume']); ?> : <a href="bibli_livre_type.php?i=<?=urlencode($rows['id_book'])?>"><?php echo($rows['title']); ?></a>
      <?php } else { ?>
         <a href="bibli_livre_type.php?i=<?=urlencode($rows['id_book'])?>"><?php echo($rows['title']); ?></a>
      <?php } ?>
      </em></strong></p>

      <p>
      <?php if ($rows['book_author_2']!==NULL){ ?>
         <a href="bibli_auteur_type.php?a=<?=urlencode($rows['book_author'])?>"><?php echo($rows['book_author']); ?></a> 
         & <a href="bibli_auteur_type.php?a=<?=urlencode($rows['book_author_2'])?>"><?php echo($rows['book_author_2']); ?></a>
      <?php } else { ?>
         <a href="bibli_auteur_type.php?a=<?=urlencode($rows['book_author'])?>"><?php echo($rows['book_author']); ?></a>
      <?php } ?>
      </p>
            
      <p><?php echo($rows['date']); ?></p>
      
      <p>Édition : <a href="bibli_edition_type.php?e=<?=urlencode($rows['book_edition'])?>"><?php echo($rows['book_edition']); ?></a></p>
      <p><?php echo($rows['pages']); ?> pages</p>
   </div>
            
   <div class="colonne2">
      <p><a href="bibli_genre_type.php?g=<?=urlencode($rows['book_genre'])?>"><?php echo($rows['book_genre']); ?></a></p>
      
      <p><a href="bibli_categorie_type.php?c=<?=urlencode($rows['book_category'])?>"><?php echo($rows['book_category']); ?></a></p>
      
      <p>
      <?php
      if ($rows['book_author_2']!==NULL){ 
         $sql = "SELECT author_origine FROM library.authors WHERE author IN (SELECT book_author FROM library.books WHERE id_book='$i')"; 
         $result = $mysqli->query($sql);?>
         <?php while($rows=$result->fetch_assoc())
         {
         $query=mysqli_query($mysqli, $sql);?>
         <a href="bibli_origine_type.php?o=<?=urlencode($rows['author_origine'])?>"><?php echo($rows['author_origine']); ?></a> 
         <?php }
         $sql = "SELECT author_origine FROM library.authors WHERE author IN (SELECT book_author_2 FROM library.books WHERE id_book='$i')"; 
         $result = $mysqli->query($sql);?>
         <?php while($rows=$result->fetch_assoc())
         {
         $query=mysqli_query($mysqli, $sql);?>
         & <a href="bibli_origine_type.php?o=<?=urlencode($rows['author_origine'])?>"><?php echo($rows['author_origine']); ?></a>
      <?php }} else {
         $sql = "SELECT author_origine FROM library.authors WHERE author IN (SELECT book_author FROM library.books WHERE id_book='$i')"; 
         $result = $mysqli->query($sql);?>
         <?php while($rows=$result->fetch_assoc())
         {
         $query=mysqli_query($mysqli, $sql);?>
         <a href="bibli_origine_type.php?o=<?=urlencode($rows['author_origine'])?>"><?php echo($rows['author_origine']); ?></a> 
         <?php }} ?>
      </p>

      <p>
      <?php
      $sql = "SELECT * FROM library.books WHERE id_book=$i"; 
      $result = $mysqli->query($sql);
      while($rows=$result->fetch_assoc())
   { $query=mysqli_query($mysqli, $sql);

      if ($rows['book_language_2']!==NULL){ ?>
         Texte en <a href="bibli_langage_type.php?l=<?=urlencode($rows['book_language'])?>"><?php echo lcfirst($rows['book_language']); ?></a> 
         & <a href="bibli_langage_type.php?l=<?=urlencode($rows['book_language_2'])?>"><?php echo lcfirst($rows['book_language_2']); ?></a>
      <?php } else { ?>
         Texte en <a href="bibli_langage_type.php?l=<?=urlencode($rows['book_language'])?>"><?php echo lcfirst($rows['book_language']); ?></a>
      <?php } ?>
      </p>

      <p>Thèmes :
      <a href="bibli_theme_type.php?t=<?=urlencode($rows['book_tag_1'])?>"><?php echo($rows['book_tag_1']); ?></a>, 
      <a href="bibli_theme_type.php?t=<?=urlencode($rows['book_tag_2'])?>"><?php echo($rows['book_tag_2']); ?></a>, 
      <a href="bibli_theme_type.php?t=<?=urlencode($rows['book_tag_3'])?>"><?php echo($rows['book_tag_3']); ?></a></p>
   <?php } ?>
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