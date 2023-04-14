<?php 
$user='root';
$password='root';
$database='library';
$servername='localhost';

$mysqli=new mysqli($servername, $user, $password, $database);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
?>

<?php /*
if(isset($_GET['i'])){
   $i=strip_tags($_GET['i']);*/

   $sql = "SELECT * FROM library.books WHERE id_book=68"; 
   $result = $mysqli->query($sql);
   while($rows=$result->fetch_assoc())
{ $query=mysqli_query($mysqli, $sql); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/assets/book.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bibli_livre_type_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - <?php echo($rows['title']); ?></title>
</head>

<body>
   <?php include 'header_bibli.php'?>

   <main>
      <section>
         <img src="media/img/<?php echo($rows['image']); ?>.jpg" alt="<?php echo($rows['title']); ?>" title="<?php echo($rows['title']); ?>" /></a>
         <p><strong>**</strong>***</p> <!--moyenne ?-->
         <?php if ($rows['available']>0) { ?>
         <p><a href="#">Emprunter ce livre</a><br/>
         Emplacement : <?php echo($rows['book_bookcase']) . $rows['book_shelf'] . "<br>" . "Couleur : " .$rows['color'];
         } else { ?>
               <p>Livre indisponible<br/>
               <?php if ($rows['pdf']!==NULL) { ?>
               <a href="<?php echo($rows['pdf']); ?>">Télécharger le PDF</a><br/>
               <a href="#">Demander ce livre</a></p> <!--file d'attente-->
               <?php } else { ?>
               <a href="#">Demander ce livre</a></p> <!--file d'attente-->
         <?php } } ?>
         <div class="liens_cote">
         <h1><?php echo($rows['title']); ?></h1>   
            <ul>
               <li><a href="#">Aperçu</a></li>
               <li>Déjà lu ?</li>
               <ul>
                  <li>Donner une note : *****</li><!--trouver un moyen pour que l'utilisateur puisse noter-->
                  <li><a href="#">Rappel</a></li>
                  <li><a href="#">Page des fans</li>
               </ul>
               <li>Suggestion</li>
               
               
               <img src="#.jpg" class="couverture" alt="#" title="#" /></a>  <!--image livre avec mêmes tags ?-->
         </div>
      </section>



      <section>
      <article>
         <div>
         <p><strong><em>
            <?php if ($rows['book_saga']!==NULL){ ?>
               <a href="<?php echo($rows['book_saga']); ?>.php"><!--à revoir--><?php echo($rows['book_saga']); ?></a><br/>
               Tome <?php echo($rows['volume']); ?> : <?php echo($rows['title']); ?>
            <?php
            } else { ?>
               <a href="bibli_livre_type.php"><?php echo($rows['title']); ?></a>
               <?php
            }
         ; ?></em></strong></p>

            <p>
               <?php if ($rows['book_author_2']!==NULL){ ?>
               <a href="<?php echo($rows['book_author']); ?>.php"><!--à revoir--><?php echo($rows['book_author']); ?></a> 
               & <a href="<?php echo($rows['book_author_2']); ?>.php"><!--à revoir--><?php echo($rows['book_author_2']); ?></a>
               <?php
               } else { ?>
               <a href="<?php echo($rows['book_author']); ?>.php"><!--à revoir--><?php echo($rows['book_author']); ?></a>
               <?php
               }
             ?></p>
            
            <p><?php echo($rows['date']); ?></p>
            <p>Édition : <a href="<?php echo($rows['book_edition']); ?>.php"><?php echo($rows['book_edition']); ?></a></p>
            <p><?php echo($rows['pages']); ?> pages</p>
         </div>
         <div>
            <p><a href="<?php echo lcfirst($rows['book_genre']); ?>.php"><?php echo($rows['book_genre']); ?></a></p>
            <p><a href="<?php echo lcfirst($rows['book_category']); ?>.php"><?php echo($rows['book_category']); ?></a></p>
            <p>
            <?php/* $sql = "SELECT * FROM authors WHERE author=$auteur || author=$auteur2";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            { $query=mysqli_query($mysqli, $sql);
            if ($rows['book_author_2']!==NULL && $auteur2['author_origine']!==$auteur['author_origine']){ ?> 
               <a href="<?php echo lcfirst($auteur['author_origine']); ?>.php"><!--à revoir--><?php echo($auteur['author_origine']); ?></a> 
               & <a href="<?php echo lcfirst($auteur2['author_origine']); ?>.php"><!--à revoir--><?php echo($auteur2['author_origine']); ?></a>
            <?php
            } else { ?>
               <a href="<?php echo lcfirst($auteur['author_origine']); ?>.php"><!--à revoir--><?php echo($auteur['author_origine']); ?></a> 
               <?php
            }}
            ; */?></p>
            <!--SELECT author_origine FROM authors WHERE authors.author=books.book_author-->

         <p>
            <?php if ($rows['book_language_2']!==NULL){ ?>
               Texte en <a href="<?php echo lcfirst($rows['book_language']); ?>.php"><!--à revoir--><?php echo lcfirst($rows['book_language']); ?></a> 
               & <a href="<?php echo lcfirst($rows['book_language_2']); ?>.php"><!--à revoir--><?php echo lcfirst($rows['book_language_2']); ?></a>
            <?php
            } else { ?>
               Texte en <a href="<?php echo lcfirst($rows['book_language']); ?>.php"><!--à revoir--><?php echo lcfirst($rows['book_language']); ?></a>
               <?php
            }
            ; ?></p>

            <p>Thèmes : <a href="<?php echo($rows['book_tag_1']); ?>.php"><?php echo($rows['book_tag_1']); ?></a>, 
            <a href="<?php echo($rows['book_tag_2']); ?>.php"><?php echo($rows['book_tag_2']); ?></a>, 
            <a href="<?php echo($rows['book_tag_3']); ?>.php"><?php echo($rows['book_tag_3']); ?></a></p>
            
         </div>
      </article>

      <article>
         <?php if ($rows['info']!==""){ ?>
               <p><strong>Information</strong> : <?php echo($rows['info']); ?></p>
               <?php
               }
               ; ?>
         <p class="resume"><?php echo($rows['summary']); ?></p>
      
         <div class="commentaires">
            <h3>Commentaires</h3>

            <?php if(isset($_POST['envoyer'])) {
                if(empty($_POST['commentaire_saisi'])) {?>
                <p>Veuillez écrire un commentaire.</p>;
                <?php}elseif{ (strlen(($_POST['commentaire_saisi'])>1500))?>
                <p>Le commentaire est trop long, 1500 caractères maximum (vous en avez tapés </p> <?php echo strlen($_POST['commentaire'])?>).<br/></p>; <?php }
            }else{
            $commentaire_saisi=mysqli_real_escape_string($_POST['commentaire_saisi']);
            $commentaire_saisi=nl2br($commentaire_saisi);
                if(mysqli_query($mysqli, "INSERT INTO opinion SET commentary='$commentaire_saisi', date_com=".time())){?>
                <p>Commentaire posté avec succès.</p>;<?php
                }else{ ?>
                <p>Une erreur s'est produite. Veuillez réessayer ou contacter le support.</p> <?php
                }
               }?>
        
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
               <?php
               } } ?>            
            </div>
         </div>
      </article>
      </section>
      
<?php
   } /*}*/
?>
   </main>
   
   <?php include 'footer_bibli.php'?>
</body>
</html>