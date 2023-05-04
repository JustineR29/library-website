<footer>
    <main>
        <div>
        <a href="#">Lien</a> <!--À voir-->
        <a href="#">Lien</a>
        <a href="#">Lien</a>
        <a href="#">Lien</a>
        </div>
    </main>
</footer>
<style>
footer {
    height: 110px;
    width: 100%;
    bottom: 0;
    margin-top: 10px;
    position:relative;
    background: #3A577C;
}
footer main{
    width: 100%;
    height:inherit;
    background: url("css/pierre.webp") top no-repeat;
    background-size: 70px;
    background-position-x: 2vw;
}
footer div{
    height: inherit;
    width: 90vw;
    position: relative;
    left: 8vw;
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-around;
    align-items: center;
}
footer div a{
    color: #ffeecacf;
}
</style>