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
    <link rel="stylesheet" href="css/bibli_inscription_style.css?v=<?php echo time(); ?>">
    <title>Bibliothèque - Inscription</title>
</head>

<body>
    <?php include 'header_bibli.php'?>
      
    <h1>Connexion/Inscription</h1>
    <main>
    
      <section>
      <h2>Connexion</h2>
      <form method="post" action="traitement_connexion.php">
         <fieldset>
         <p>
            <label for="mail">E-mail :</label><br />
            <input type="email" name="mail" id="mail" size="40" placeholder="Ex: Marie.Dupont@gmail.com"/>
         </p>
         <p>
            <label for="pass">Mot de passe :</label><br />
            <input type="password" name="password" id="password" size="30"/> <br/>
         </p></fieldset>
      </form>
      <input class="connecter" type="submit" value="Me connecter"/>
      <!--Conditions de validation, traitement...
      <p>Heureux de vous revoir <?php /*echo($rows['name']);*/ ?> !</p>-->
      </section>

      <section>
      <h2>Inscription</h2>
      <p>Pas encore inscrit ?</br>
      Créez-vous un compte dès à présent pour pouvoir emprunter des livres et donner votre avis !</p>
      <form method="post" action="traitement_inscription.php">
         <fieldset>
            <legend>Informations personnelles</legend>
            <p>
            <label for="nom">Nom * :</label><br />
            <input type="text" name="nom" id="nom" size="20" placeholder="Ex: Dupont" required/> <br/>

            <label for="prenom">Prénom * :</label><br />
            <input type="text" name="prenom" id="prenom" size="20" placeholder="Ex: Marie" required/> <br/>

            <label for="age">Date de naissance * :</label><br />
            <input type="date" name="age" id="age" size="10" required/><br/>
            </p>
         </fieldset>

         <fieldset>
            <legend>Contact</legend>
            <p>
            <label for="mail">E-mail * :</label><br />
            <input type="email" name="mail" id="mail" size="40" placeholder="Ex: Marie.Dupont@gmail.com" required/> <br/>
            
            <label for="tel">Numéro de téléphone :</label><br />
            <input type="tel" name="tel" id="tel" size="30"/> <br/>
            </p>
         </fieldset>
      </form>
         <input class="inscrire" type="submit" value="M'inscrire"/>

      <!--Conditions, traitement du formulaire, réponse attendue
      <p>Votre compte à été créé. Bienvenue !</br>
      Nous vous invitons à consulter vos mails pour finir votre inscription.</p>-->
      </section>
    </main>
    <?php include 'footer_bibli.php'?>
</body>
</html>