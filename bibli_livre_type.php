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

<?php 
if(isset($_GET['i'])){
   $i=strip_tags($_GET['i']);

   $sql = "SELECT * FROM library.books WHERE id_book=$i"; 
   $result = $mysqli->query($sql);
   while($rows=$result->fetch_assoc())
{ $query=mysqli_query($mysqli, $sql); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/assets/pierre_logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/bibli_livre_type_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - <?php echo($rows['title']); ?></title>
</head>

<body>
   <?php include 'header_bibli.php'?>

   <main>
      <section class="gauche">
         <?php include 'livre_emprunt.php'?>
         <?php include 'livre_suggestions.php'?>
      </section>
      
      <section class="droite">
         <?php include 'livre_infos.php'?>
         <?php include 'livre_resume.php'?>
         <?php include 'livre_commentaires.php'?>
      </section>
      
<?php
   } }
?>
   </main>
   
   <?php include 'footer_bibli.php'?>
</body>
</html>