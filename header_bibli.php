<header>
    <section>
        <a href="bibli_accueil.php"><img src="media/assets/etre_papier_long.webp" alt="L'être de papier"></a>
        <form method="post" action="traitement_recherche.php">
            <button class="rechercher" type="submit"><img src="media/img/loupe.webp" alt="Logo de recherche"></button>
            <input type="search" name="search" id="search" placeholder="titre, auteur, mot-clé..."/>
            <button class="effacer" type="reset"><img src="media/img/croix.webp" alt="Croix"></button>
        </form>
        <a class="inscription" href="inscription.php">Connexion/Inscription</a> <!--à remplacer par Nom utilisateur une fois connecté : -->
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
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
    width: 98%;
    padding-top: 1vh;
}

header>section:nth-child(1)>a>img{
    height: 40px;
}   
header>section:nth-child(1)>a>img:hover{
    filter: drop-shadow(1px 1px 1px #897f66cc);
}

header form{
    border: 1px solid grey;
    border-radius: 15px;
    padding: 2px 5px;
    background-color: #f4f1eb;
}
header form:focus-within{
    border: 2px solid #3A577C;
    background-color: white;
    box-shadow: 2px 2px 2px #897f66cc;   
}
header form>input, header button{
    border: none;
    background-color: #00000000;
}
header form>input:focus{
    outline:none;
}

header .rechercher>img{
    max-height: 18px;
    padding-top: 4px;
}
header .effacer>img{
    max-height: 15px;
    padding-top: 3px;
}

header button>img:hover{
    filter: drop-shadow(1px 1px 1px #897f66cc);
}

header .inscription{
    background-color: #3A577C;
    border-radius: 15px;
    color: #eee8dfff;
    padding: 5px;
}
header .inscription:hover{
    background-color: #3d6393;
    color: #f4f1ebff;
    box-shadow: 2px 2px 2px #897f66cc;
}

header section:nth-child(2){
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
    align-items: center;
    width: 98%;
    font-size: large;
    font-weight: bold;
    padding-bottom: 1vh;
}
header section:nth-child(2)>a{
    margin-right: 1vw;
    margin-left: 1vw;
    color: #3A577C;
}

</style>