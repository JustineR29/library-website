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
    <link rel="stylesheet" href="css/bibli_roman_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - <?php echo($_POST['search']); ?></title>
</head>

<body>
    <?php include 'header_bibli.php'?>

    <main>
    <?php include 'filtres.php';?>

    <section>
        <div class="titres">
            <h1>Résultats de la recherche "<?php echo($_POST['search']); ?>"</h1>
            
        
        <?php
            $search = $_POST['search'];
            $sql = "SELECT * FROM books WHERE title LIKE '%$search%' OR book_author LIKE '%$search%' OR book_author_2 LIKE '%$search%' OR book_authors LIKE '%$search%' OR book_saga LIKE '%$search%' OR book_category LIKE '%$search%' OR book_edition LIKE '%$search%' OR book_tag_1 LIKE '%$search%' OR book_tag_2 LIKE '%$search%' OR book_tag_3 LIKE '%$search%' OR info LIKE '%$search%' OR keywords LIKE '%$search%'";
            $result = $mysqli->query($sql); ?>
            <p><?php echo(mysqli_num_rows($result)); ?> résultat(s) trouvé(s)</p>
        </div>
            <?php while($rows=$result->fetch_assoc())
        {
            $query=mysqli_query($mysqli, $sql);
                include 'mini_affiche.php';
        }
        ?>
    </section>

    </main>
    <?php include 'footer_bibli.php'?>
</body>
</html>