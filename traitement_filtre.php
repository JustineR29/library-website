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
    <link rel="shortcut icon" href="media/assets/book.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bibli_roman_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - <?php echo($_POST['search']); ?></title>
</head>

<body>
    <?php include 'header_bibli.php'?>

    <main>
        <section>
            <h1>Filtrer par :</h1>
            <form method="post" action="traitement_filtre.php">
            <fieldset><p>Genre(s) :<br/>
            <input type="checkbox" name="genre[]" value="<?php 
                $sql = "SELECT * FROM genres ORDER BY genre ASC";
                $result = $mysqli->query($sql);
                while($rows=$result->fetch_assoc())
                {
                $query=mysqli_query($mysqli, $sql); echo($rows['genre']), ("','");}?>" <?php if(isset($_POST['genre']) AND in_array('*', $_POST['genre'])) {echo('checked="checked"');} ?>/>
            <label for="tous">Tous les genres</label><br/>
                <?php 
                $sql = "SELECT * FROM genres ORDER BY genre ASC";
                $result = $mysqli->query($sql);
                while($rows=$result->fetch_assoc())
                {
                $query=mysqli_query($mysqli, $sql);?>
                <input inherit type="checkbox" name="genre[]" value="<?php echo($rows['genre']); ?>" <?php if(isset($_POST['genre']) AND in_array($rows['genre'], $_POST['genre'])) {echo('checked="checked"');} ?>/>
                <label for="<?php echo($rows['genre']); ?>"><?php echo($rows['genre']); ?></label><br/>
                <?php
                }
                ?>
            </p></fieldset>

            <fieldset><p>Catégorie(s) :<br/>
            <input type="checkbox" name="category[]" value="<?php 
                $sql = "SELECT * FROM categories ORDER BY category ASC";
                $result = $mysqli->query($sql);
                while($rows=$result->fetch_assoc())
                {
                $query=mysqli_query($mysqli, $sql); echo($rows['category']), ("','");}?>" <?php if(isset($_POST['category']) AND in_array('*', $_POST['category'])) {echo('checked="checked"');} ?>/>
            <label for="tous">Toutes les catégories</label><br/>
                <?php 
                $sql = "SELECT * FROM categories ORDER BY category ASC";
                $result = $mysqli->query($sql);
                while($rows=$result->fetch_assoc())
                {
                $query=mysqli_query($mysqli, $sql);?>
                <input type="checkbox" name="category[]" value="<?php echo($rows['category']); ?>" <?php if(isset($_POST['category']) AND in_array($rows['category'], $_POST['category'])) {echo('checked="checked"');} ?>/>
                <label for="<?php echo($rows['category']); ?>"><?php echo($rows['category']); ?></label><br/>
                <?php
                }
                ?>

            </p></fieldset>
            <fieldset><p>Époque(s) :<br/>
            <input type="checkbox" name="period[]" value="<?php 
                $sql = "SELECT * FROM periods ORDER BY period ASC";
                $result = $mysqli->query($sql);
                while($rows=$result->fetch_assoc())
                {
                $query=mysqli_query($mysqli, $sql); echo($rows['period']), ("','");}?>" <?php if(isset($_POST['period']) AND in_array('*', $_POST['period'])) {echo('checked="checked"');} ?>/>
            <label for="tous">Toutes les époques</label><br/>
                <?php 
                $sql = "SELECT * FROM periods ORDER BY period ASC";
                $result = $mysqli->query($sql);
                while($rows=$result->fetch_assoc())
                {
                $query=mysqli_query($mysqli, $sql);?>
                <input type="checkbox" name="period[]" value="<?php echo($rows['period']); ?>" <?php if(isset($_POST['period']) AND in_array($rows['period'], $_POST['period'])) {echo('checked="checked"');} ?>/>
                <label for="<?php echo($rows['period']); ?>"><?php echo($rows['period']); ?></label><br/>
                <?php
                }
                ?>
            </p></fieldset>

            <fieldset><p>Langue(s) :<br/>
            <input type="checkbox" name="language[]" value="<?php 
                $sql = "SELECT * FROM languages ORDER BY language ASC";
                $result = $mysqli->query($sql);
                while($rows=$result->fetch_assoc())
                {
                $query=mysqli_query($mysqli, $sql); echo($rows['language']), ("','");}?>" <?php if(isset($_POST['language']) AND in_array('*', $_POST['language'])) {echo('checked="checked"');} ?>/>
            <label for="tous">Toutes les langues</label><br/>
                <?php 
                $sql = "SELECT * FROM languages ORDER BY language ASC";
                $result = $mysqli->query($sql);
                while($rows=$result->fetch_assoc())
                {
                $query=mysqli_query($mysqli, $sql);?>
                <input type="checkbox" name="language[]" value="<?php echo($rows['language']); ?>" <?php if(isset($_POST['language']) AND in_array($rows['language'], $_POST['language'])) {echo('checked="checked"');} ?>/>
                <label for="<?php echo($rows['language']); ?>"><?php echo($rows['language']); ?></label><br/>
                <?php
                }
                ?>
            </p></fieldset>
                <input class="valider" type="submit" value="Valider"/>
        </form></section>

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
        <p><?php echo(mysqli_num_rows($result)); ?> résultat(s) trouvé(s)</p></div>
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