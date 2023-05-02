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

<!--filtres-->
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
        <div class="titres"><h1>Résultats de la recherche</h1>
        <?php
            $selectedg=$_POST['genre'];
            $selectedc=$_POST['category'];
            $selectedp=$_POST['period'];
            $selectedl=$_POST['language'];
            $g=implode("','", $selectedg);
            $c=implode("','", $selectedc);
            $p=implode("','", $selectedp);
            $l=implode("','", $selectedl);
        $sql = "SELECT * FROM books WHERE book_genre IN ('$g') AND book_category IN ('$c') AND book_period IN ('$p') AND book_language IN ('$l') OR book_language_2 IN ('$l') ORDER BY book_author asc";
        $result = $mysqli->query($sql);?>
        <p><?php echo(mysqli_num_rows($result)); ?> résultat(s) trouvé(s)</p>
        </div>
        <?php while($rows=$result->fetch_assoc())
        {
        $query=mysqli_query($mysqli, $sql);
        include 'mini_affiche.php'; }
        ?>
        </section><!--condition pour ne pas pouvoir valider si une section est vide (ou automatiser la selection de * quand aucune chexbox n'est selectionnée)-->

        </main>
    <?php include 'footer_bibli.php'?>
</body>
</html>