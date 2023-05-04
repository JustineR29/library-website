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
if(isset($_GET['o'])){
   $o=strip_tags($_GET['o']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/assets/pierre_logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/bibli_roman_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - <?php echo($o); ?></title>
</head>

<body>
    <?php include 'header_bibli.php'?>

    <main>
    <?php include 'filtres.php';?>

    <section>
        <div class="titres">
            
            
            <?php
            $sql = "SELECT * FROM library.books WHERE book_author IN (SELECT author FROM library.authors WHERE author_origine='$o') OR book_author_2 IN (SELECT author FROM library.authors WHERE author_origine='$o')"; 
            $result = $mysqli->query($sql);?>
            <h1><?php echo mb_strtoupper($o); ?></h1>
            <p><?php echo(mysqli_num_rows($result)); ?> livre(s) de cette origine</p>
        </div>
            <?php while($rows=$result->fetch_assoc())
        {
            $query=mysqli_query($mysqli, $sql);
                include 'mini_affiche.php';
        }
        ?>
        
    </section>

<?php
}
?>

    </main>
    <?php include 'footer_bibli.php'?>
</body>
</html>