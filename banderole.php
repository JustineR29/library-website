<h1>Coups de cœur</h1>
    <?php 
            $sql = "SELECT * FROM books WHERE id_book=116";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
        {
            $query=mysqli_query($mysqli, $sql);?>
        <div class="banderole">
            <img src="media/img/cover/<?php echo($rows['image']); ?>.webp" alt="<?php echo($rows['title']); ?>" title="<?php echo($rows['title']); ?>" /> <!--faire une banderole : CSS-->
            <div class="band">
            <p><strong><em>
                <?php if ($rows['book_saga']!==NULL){ ?>
                <a href="<?php echo($rows['book_saga']); ?>.php"><?php echo($rows['book_saga']); ?></a><br/>
                Tome <?php echo($rows['volume']); ?> : <a href="<?php echo($rows['title']); ?>.php"><?php echo($rows['title']); ?></a>
                <?php
                } else { ?>
               <a href="bibli_livre_type.php?i=<?=$rows['id_book']?>"><?php echo($rows['title']); ?></a>
               <?php
               }
               ?></em></strong></p>
            <p class="resume"><?php echo($rows['summary']); ?></p>
            </div>
            <div class="avis">
                <p>Avis de la rédaction</p>
                <p>*****</p>
                <p>Commentaires</p><!--table reliée, à voir-->
            </div>
        </div>
    <?php
        }
    ?>
<style>
.banderole{
    display:flex;
    flex-flow: row nowrap;
    justify-content: space-between;
    align-items: center;
    background: #ebddc0;
    box-shadow: 2px 2px 5px #897f66;
    width: 98%;
    margin-bottom: 10px;
}
.banderole>img{
    width: 15%;
    margin:1%;
    box-shadow: 3px 3px 5px black;
}
.band{
    display:flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    width: 60%;
    text-align:justify;
}
.titre_band {
    margin-bottom: 0;
    font-weight: bold;
}
.avis{
    display:flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: center;
    width: 23%;
}
</style>