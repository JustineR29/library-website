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
        <label for="tous" class="box_perso">
            <input type="checkbox" name="genre[]" value="<?php 
            $sql = "SELECT * FROM genres ORDER BY genre ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            { 
            $query=mysqli_query($mysqli, $sql); echo($rows['genre']), ("','");}?>" checked id="tous"/>
            Tous les genres
            <span class="check_perso"></span>
        </label><br/>
            <?php
            $sql = "SELECT * FROM genres ORDER BY genre ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
        <label for="<?php echo($rows['genre']); ?>" class="box_perso">
            <input type="checkbox" name="genre[]" value="<?php echo($rows['genre']); ?>" id="<?php echo($rows['genre']); ?>"/>
            <?php echo($rows['genre']); ?>
            <span class="check_perso"></span>
        </label><br/>
        <?php
        }
        ?>
        </p></fieldset>

        <fieldset><p><strong>Catégorie(s) :</strong><br/>
        <label for="tous" class="box_perso">
            <input type="checkbox" name="category[]" value="<?php 
            $sql = "SELECT * FROM categories ORDER BY category ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql); echo($rows['category']), ("','");}?>" checked id="tous"/>
            Toutes les catégories
            <span class="check_perso"></span>
        </label><br/>
            <?php 
            $sql = "SELECT * FROM categories ORDER BY category ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
        <label for="<?php echo($rows['category']); ?>" class="box_perso">
            <input type="checkbox" name="category[]" value="<?php echo($rows['category']); ?>" id="<?php echo($rows['category']); ?>"/>
            <?php echo($rows['category']); ?>
            <span class="check_perso"></span>
        </label><br/>
        <?php
        }
        ?>
        </p></fieldset>

        <fieldset><p><strong>Époque(s) :</strong><br/>
        <label for="tous" class="box_perso">
            <input type="checkbox" name="period[]" value="<?php 
            $sql = "SELECT * FROM periods ORDER BY period ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql); echo($rows['period']), ("','");}?>" checked id="tous"/>
            Toutes les époques
            <span class="check_perso"></span>
        </label><br/>
            <?php 
            $sql = "SELECT * FROM periods ORDER BY period ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
        <label for="<?php echo($rows['period']); ?>" class="box_perso">
            <input type="checkbox" name="period[]" value="<?php echo($rows['period']); ?>" id="<?php echo($rows['period']); ?>"/>
            <?php echo($rows['period']); ?>
            <span class="check_perso"></span>
        </label><br/>
        <?php
        }
        ?>
        </p></fieldset>

        <fieldset><p><strong>Langue(s) :</strong><br/>
        <label for="tous" class="box_perso">
            <input type="checkbox" name="language[]" value="<?php 
            $sql = "SELECT * FROM languages ORDER BY language ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql); echo($rows['language']), ("','");}?>" checked id="tous"/>
            Toutes les langues
            <span class="check_perso"></span>
        </label><br/>
            <?php 
            $sql = "SELECT * FROM languages ORDER BY language ASC";
            $result = $mysqli->query($sql);
            while($rows=$result->fetch_assoc())
            {
            $query=mysqli_query($mysqli, $sql);?>
        <label for="<?php echo($rows['language']); ?>" class="box_perso">
            <input type="checkbox" name="language[]" value="<?php echo($rows['language']); ?>" id="<?php echo($rows['language']); ?>"/>
            <?php echo($rows['language']); ?>
            <span class="check_perso"></span>
        </label><br/>
        <?php
        }
        ?>
        </p></fieldset>
        
        <button class="valider" type="submit" value="Valider">Valider</button>
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
    padding: 5px 1vw;
    background: #ebddc0;
}
.filtres_boite form{
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    width: 98%;
}
.filtres_boite fieldset{
    border:none;
}
.filtres_boite fieldset>p{
    margin-top: 2px;
    margin-bottom: 2px;
}

.box_perso{
    display: block;
    position: absolute;
}
input[type=checkbox]{
    visibility: hidden;
}
.check_perso{
    position: absolute;
    top: 0;
    left: 0;
    height: 15px;
    width: 15px;
    background-color: #d6c49d;
    border: 2px solid #897f66;
    border-radius: 4px;
    cursor: pointer;
}
.check_perso:hover{
    background-color: #ac9f7f;
    box-shadow: 2px 2px 2px #897f66cc;
}
.box_perso input:checked ~ .check_perso{
    background-color: #3A577C;
    border: 2px solid #3A577C;
    box-shadow: 2px 2px 2px #897f66cc;
}
.check_perso:after{
    content:"";
    position: absolute;
    display: none;
}
.box_perso input:checked ~ .check_perso:after{
    display: block;
}
.check_perso:after{
    left: 4px;
    bottom: 2px;
    width: 2.5px;
    height: 6px;
    border: solid #f4f1eb;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.filtres_boite .valider
{
    display: block;
    align-self: center;
    border: none;
    background-color: #3A577C;
    color: #ebddc0;
    padding: 5px;
    border-radius: 15px;
}
.filtres_boite .valider:hover{
    background-color: #3d6393;
    color: #f4f1ebff;
    box-shadow: 2px 2px 2px #897f66cc;
    cursor: pointer;
}
</style>