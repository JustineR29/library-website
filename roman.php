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
    <link rel="stylesheet" href="css/roman_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - Roman</title>
</head>

<body>
    <?php include 'header_bibli.php'?>

    <main>
        <section>
            <h1>Filtrer par :</h1>
                <ul>
                    <li class="categorie"><strong>Catégorie</strong></li>
                        <ul>
                            <?php 
                            $sql = "SELECT DISTINCT book_category FROM books WHERE book_genre='Roman' ORDER BY book_category ASC";
                            $result = $mysqli->query($sql);
                            while($rows=$result->fetch_assoc())
                            {
                            $query=mysqli_query($mysqli, $sql);?>
                            <li><a href="roman_<?php echo($rows['book_category']); ?>"><?php echo($rows['book_category']); ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>

                        <li class="langue"><strong>Langue</strong></li>
                        <ul>
                            <?php 
                            $sql = "SELECT DISTINCT book_language FROM books WHERE book_genre='Roman' ORDER BY book_language ASC";
                            $result = $mysqli->query($sql);
                            while($rows=$result->fetch_assoc())
                            {
                            $query=mysqli_query($mysqli, $sql);?>
                            <li><a href="roman_langue_<?php echo($rows['book_language']); ?>"><?php echo($rows['book_language']); ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>

                        <li class="origine"><strong>Origine de l'auteur</strong></li>
                        <ul>
                            <?php 
                            $sql = "SELECT DISTINCT author_origine FROM authors WHERE book_genre='Roman' ORDER BY author_origine ASC";
                            $result = $mysqli->query($sql);
                            while($rows=$result->fetch_assoc())
                            {
                            $query=mysqli_query($mysqli, $sql);?>
                            <li><a href="roman_<?php echo($rows['author_origine']); ?>"><?php echo($rows['author_origine']); ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>

                        <li class="epoque"><strong>Époque</strong></li>
                        <ul>
                            <?php 
                            $sql = "SELECT DISTINCT book_period FROM books WHERE book_genre='Roman' ORDER BY book_period ASC";
                            $result = $mysqli->query($sql);
                            while($rows=$result->fetch_assoc())
                            {
                            $query=mysqli_query($mysqli, $sql);?>
                            <li><a href="roman_<?php echo($rows['book_period']); ?>"><?php echo($rows['book_period']); ?></a></li>
                            <?php
                            }
                            ?>                         
                        </ul>
                </ul>
        </section>
    <section>
        <h1>Par ordre d'arrivée décroissant</h1>
        <?php 
            $sql = "SELECT * FROM books WHERE book_genre='Roman' ORDER BY id_book desc";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
        {
            $query=mysqli_query($mysqli, $sql);?>
            <?php include 'mini_affiche.php'?>
            <?php
        }
        ?>
        </section>

    </main>
    <?php include 'footer_bibli.php'?>
</body>
</html>