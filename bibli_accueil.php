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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/assets/book.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bibli_accueil_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - Accueil</title>
</head>

<body>
    <?php include 'header_bibli.php'?>
    
    <?php include 'banderole.php'?>

    <main>
    <?php include 'filtres.php'?>
    <section class="livres_cases">
        <h1>Nouveautés</h1>
        <?php 
            $sql = "SELECT * FROM books WHERE available>0 ORDER BY id_book desc LIMIT 9";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
        {
            $query=mysqli_query($mysqli, $sql);
            ?>
            <?php include 'mini_affiche.php'?>
            <?php
        }
        ?>
    </section>

    </main>
    <?php include 'footer_bibli.php'?>
</body>
</html>