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
    <link rel="shortcut icon" href="media/assets/pierre_logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/bibli_genre_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - Catégorie</title>
</head>

<body>
    <?php include 'header_bibli.php'?>

    <main>
        <h1>CATÉGORIES</h1>
        <section>
            <?php 
            $sql = "SELECT * FROM categories ORDER BY category ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
            <article><a href="<?php echo lcfirst($rows['category']); ?>.php">
                <h2><?php echo mb_strtoupper($rows['category']); ?></h2>
                <img src="media/img/tag/<?php echo lcfirst($rows['category']); ?>.webp" alt="<?php echo($rows['category']); ?>" title="<?php echo($rows['category']); ?>" />
            </a></article>
            <?php
            }
            ?> 
        </section>
    </main>
    <?php include 'footer_bibli.php'?>
</body>
</html>