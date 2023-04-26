<header>
    <section>
    <form method="post" action="traitement_recherche.php">
        <p><label for="search">Rechercher :</label>
            <input type="search" name="search" id="search" size="20" placeholder="titre, auteur, mot-clé..."/></p></form>
        <img src="media/assets/etre_papier_long.webp" alt="L'être de papier">
        <p><a href="inscription.php">Connexion/Inscription</a></p>  <!--à remplacer par Nom utilisateur une fois connecté : -->
    </section>
   
    <section>
            <a href="bibli_accueil.php">ACCUEIL</a>
            <a href="bibli_genre.php">GENRE</a>
            <a href="bibli_categorie.php">CATÉGORIE</a>
            <a href="bibli_saga.php">SAGA</a>
            <a href="bibli_auteur.php">AUTEUR</a>
            <a href="bibli_origine.php">ORIGINE</a>
            <a href="bibli_edition.php">ÉDITION</a>
            <a href="bibli_theme.php">THÈME</a>
    </section>
</header>
<style>
header{
    height: auto;
    width: 100%;
    position: relative;
    top: 0;
    display: flex;
    flex-flow: column wrap;
    justify-content: flex-start;
    align-items: center;
    background: #eee8dfff;
    border-bottom: 2px solid #3A577C;
    margin-bottom: 10px;
    box-shadow: 0px 5px 5px #897f66;
}

header>section:nth-child(1){
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
    align-items: center;
    width: 98%;
}
header>section:nth-child(1) p, header>section:nth-child(1) a{
    color: #3A577C;
}
header>section:nth-child(1)>img{
    width: 30%;
    filter: drop-shadow(2px 2px 2px #897f66cc);
}

header>section:nth-child(2){
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
    align-items: center;
    width: 98%;
    font-size: large;
    font-weight: bold;
    padding-bottom: 1vh;
}
header>section:nth-child(2)>a{
    margin-right: 1vw;
    margin-left: 1vw;
    color: #3A577C;
}

</style>