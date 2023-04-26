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

<section class="filtres_boite">
    <h1>Filtrer par :</h1>
    <form method="post" action="traitement_filtre.php">
        <fieldset><p><strong>Genre(s) :</strong><br/>
        <input type="checkbox" name="genre[]" value="<?php 
            $sql = "SELECT * FROM genres ORDER BY genre ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            { 
            $query=mysqli_query($mysqli, $sql); echo($rows['genre']), ("','");}?>" checked id="tous"/>
        <label for="tous">Tous les genres</label><br/>
            <?php
            $sql = "SELECT * FROM genres ORDER BY genre ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
        <input type="checkbox" name="genre[]" value="<?php echo($rows['genre']); ?>" id="<?php echo($rows['genre']); ?>"/>
        <label for="<?php echo($rows['genre']); ?>"><?php echo($rows['genre']); ?></label> <br/>
        <?php
        }
        ?>
        </p></fieldset>

        <fieldset><p><strong>Catégorie(s) :</strong><br/>
        <input type="checkbox" name="category[]" value="<?php 
            $sql = "SELECT * FROM categories ORDER BY category ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql); echo($rows['category']), ("','");}?>" checked id="tous"/>
        <label for="tous">Toutes les catégories</label><br/>
            <?php 
            $sql = "SELECT * FROM categories ORDER BY category ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
        <input type="checkbox" name="category[]" value="<?php echo($rows['category']); ?>" id="<?php echo($rows['category']); ?>"/>
        <label for="<?php echo($rows['category']); ?>"><?php echo($rows['category']); ?></label><br/>
        <?php
        }
        ?>
        </p></fieldset>

        <fieldset><p><strong>Époque(s) :</strong><br/>
        <input type="checkbox" name="period[]" value="<?php 
            $sql = "SELECT * FROM periods ORDER BY period ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql); echo($rows['period']), ("','");}?>" checked id="tous"/>
        <label for="tous">Toutes les époques</label><br/>
            <?php 
            $sql = "SELECT * FROM periods ORDER BY period ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
        <input type="checkbox" name="period[]" value="<?php echo($rows['period']); ?>" id="<?php echo($rows['period']); ?>"/>
        <label for="<?php echo($rows['period']); ?>"><?php echo($rows['period']); ?></label><br/>
        <?php
        }
        ?>
        </p></fieldset>

        <fieldset><p><strong>Langue(s) :</strong><br/>
        <input type="checkbox" name="language[]" value="<?php 
            $sql = "SELECT * FROM languages ORDER BY language ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql); echo($rows['language']), ("','");}?>" checked id="tous"/>
        <label for="tous">Toutes les langues</label><br/>
            <?php 
            $sql = "SELECT * FROM languages ORDER BY language ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
        <input type="checkbox" name="language[]" value="<?php echo($rows['language']); ?>" id="<?php echo($rows['language']); ?>"/>
        <label for="<?php echo($rows['language']); ?>"><?php echo($rows['language']); ?></label><br/>
        <?php
        }
        ?>
        </p></fieldset>
        
        <input class="valider" type="submit" value="Valider"/>
    </form>
</section>
<style>
main>.filtres_boite{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    box-shadow: 2px 2px 5px #897f66;
    width: 18%;
    min-width: 150px;
    padding-left: 1vw;
    height: relative;
    background: #ebddc0;
}
fieldset{
    border:none;
}
fieldset>p{
    margin-top: 2px;
    margin-bottom: 2px;
}
ul
{
    list-style-type: none;
    margin-top: 0px;
    margin-left: -30px;
    
}
</style>