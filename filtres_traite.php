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
                <input type="checkbox" name="genre[]" value="<?php echo($rows['genre']); ?>" <?php if(isset($_POST['genre']) AND in_array($rows['genre'], $_POST['genre'])) {echo('checked="checked"');} ?>/>
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
                <button class="valider" type="submit" value="Valider">Valider</button>
        </form>
</section>
<style>
main>section:nth-child(1){
    display:flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: flex-start;
    box-shadow: 2px 2px 5px #897f66;
    background: #ebddc0;
    width: 18%;
    padding-left: 1vw;
    height: relative;
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
.valider
{
    background-color: #3A577C;
    border: 2px solid #3A577C;
    border-radius: 2px;
    margin-bottom: 5px;
}

</style>