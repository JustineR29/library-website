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



            <article>
                <h1><strong><em>
                    
                <?php if ($rows['book_saga']!==NULL){ ?>
                <a href="<?php echo($rows['book_saga']); ?>.php"><?php echo($rows['book_saga']); ?></a><br/>
                Tome <?php echo($rows['volume']); ?> : <a href="bibli_livre_type.php?i=<?=$rows['id_book']?>"><?php echo($rows['title']); ?></a>
                <?php
                } else { ?>
               <a href="bibli_livre_type.php?i=<?=$rows['id_book']?>"><?php echo($rows['title']);?></a>
               <?php
               }
               ; ?></em></strong></h1>
               
               <p>
               <?php if ($rows['book_author_2']!==NULL){ ?>
               <a href="<?php echo($rows['book_author']); ?>.php"><!--à revoir--><?php echo($rows['book_author']); ?></a> 
               & <a href="<?php echo($rows['book_author_2']); ?>.php"><!--à revoir--><?php echo($rows['book_author_2']); ?></a>
               <?php
               } else { ?>
               <a href="<?php echo($rows['book_author']); ?>.php"><!--à revoir--><?php echo($rows['book_author']); ?></a>
               <?php
               }
            ; ?></p>
                <img src="media/img/<?php echo($rows['image']); ?>.jpg" alt="<?php echo($rows['title']); ?>" title="<?php echo($rows['title']); ?>" />
                <p>*****</p>  <!--trouver un système de notation avec moyenne-->
                <p class=resume><?php echo($rows['summary']); ?></p>
            </article>

<style>
article
{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: center;
    border: 2px solid black;
    width: 30%;
    height:60vh;
    margin-top: 2vh;
    margin-bottom: 2vh;
    padding-left: 1vw;
    padding-right: 1vw;
    overflow: auto;
    text-align:center;
}
article>h1
{
    margin-bottom:0;
}
article>img
{
    width:50%;
    box-shadow: 3px 3px 2px black;
}
.resume
{
    text-align: justify;
    text-indent: 2vw;
}
</style>