<article class="livre_suggestions">
    <h1><?php echo($rows['title']); ?></h1>   
        <ul>
        <li><a href="#">Aperçu</a></li>
        <li>Déjà lu ?</li>
            <ul>
            <li>Donner une note : *****</li><!--trouver un moyen pour que l'utilisateur puisse noter-->
            <li><a href="#">Rappel</a></li>
            <li><a href="#">Page des fans</li>
            </ul>
        <li>Suggestion</li>
               
        <img src="media/img/cover/#.webp" class="couverture" alt="#" title="#" />
        </ul>  <!--image livre avec mêmes tags ?-->
</article>
<style>
.livre_suggestions{
    width: 98%;
    padding-left: 0.5vw;
    padding-right: 0.5vw;
    margin-top: 2vh;
    background-color: #d6c49d;
    border-radius: 10px;
    box-shadow: 2px 2px 5px #897f66;
}
.livre_suggestions>h1{
    text-align: center;
}
ul
{
    list-style-type: none;
    margin-top: 0px;
    margin-left: -30px;
    margin-bottom: 10px;
}
a{
    color: black;
}
</style>