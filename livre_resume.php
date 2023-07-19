<?php 
$sql = "SELECT * FROM library.books WHERE id_book=$i"; 
   $result = $mysqli->query($sql);
   while($rows=$result->fetch_assoc())
{ $query=mysqli_query($mysqli, $sql); ?>

<article class="livre_resume">
   <?php if ($rows['info']!==""){ ?>
      <p><strong>Information</strong> : <?php echo($rows['info']); ?></p>
   <?php } ?>
   
   <p itemprop="description" class="resume"><?php echo($rows['summary']); ?></p>
</article>
<?php } ?>
<style>
.livre_resume{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    width: 98%;
}
.resume{
    text-align: justify;
    text-indent: 2vw;
}
</style>