<style>

.invisible
{
    display: none;
}

.ensemble
{
    display: flex;
    margin: auto;
}

.infoProfil
{
    border: 1px solid black;
    width: 22%;
}

.infoProfil p
{
    font-size: 1.1em;
    font-weight: bold;
}

.lesBoutons
{
    border: 1px solid black;
    width: 70%;
    display: flex;
    flex-wrap: wrap;
}

/*
.lesBoutons button
{
    border: 1px solid black;
    width: 20%;
    margin: 2%;
    height: 6vh;
    cursor: pointer;
} */


.lesBoutons a
{
    /* border: 1px solid black; */
    width: 20%;
    margin: 2%;
    height: 6vh;
    text-decoration: none;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modifierProfil
{
    background-color: #fcd438;
    border: 1px solid #fcd438;
}

.modifierProfil:hover
{
    background-color: #ad8b03;
    border-color: #ad8b03;
    color: white;
}

.modifierProduit
{
    background-color: #50ca9e;
    border: 1px solid #50ca9e;
}


.modifierProduit:hover
{
    background-color: #038354;
    border: 1px solid #038354;
    color: white;
}


.modifierCategorie
{
    background-color: #f9ac48;
    border: 1px solid #f9ac48;
}


.modifierCategorie:hover
{
    background-color: #b86800;
    border: 1px solid #b86800;
    color: white;
}


.creerProfil
{
    background-color: #55f7a2;
    border: 1px solid #55f7a2;
}


.creerProfil:hover
{
    background-color: #009046;
    border: 1px solid #009046;
    color: white;
}


.creerProduit
{
    background-color: #d0d74f;
    border: 1px solid #d0d74f;
}


.creerProduit:hover
{
    background-color: #9ea601;
    border: 1px solid #9ea601;
    color: white;
}



.creerCategorie
{
    background-color: #b1a0f8;
    border: 1px solid #b1a0f8;
}


.creerCategorie:hover
{
    background-color: #150263;
    border: 1px solid #150263;
    color: white;
}


.BoutonsGroupe
{
    border: 1px solid black;
    width: 92%;
    display: flex;
    justify-content: center;
}

.boutonStyleProfil
{
    width: 8%;
    height: 5vh;
    cursor: pointer;
    border: 2px solid black;
    background-color: #fff;
    margin: 1%;
}


.boutonStyleProfil:hover
{
    background-color: black;
    color: white;
}



.boutonStyleProfil2
{
    width: 8%;
    height: 5vh;
    cursor: pointer;
    border: 2px solid black;
    background-color: #000000;
    margin: 1%;
    color: white;
}

/*
.boutonStyleProfil2:hover
{
    background-color: black;
    color: white;
} */


/* -----------------------------Style lesProduits -------------------- */


.lesProduits
{
    border: 2px solid black;
    width: 92%;
    height: 70vh;
    overflow: auto;
}


.lesCards
{
    /* border: 1px solid green; */
    width: 90%;
    margin: 1%;
    display: flex;
    flex-wrap: wrap;
}

.card
{
    /* border: 1px solid red; */
    width: 25%;
    margin-right: 2%;
    margin-bottom: 2%;
    margin-left: 6%
}





.imageCard
{
    border: 2px solid black;
    height: 35vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.imageCard img
{
    width: 50%;
}

.infoProduit
{
    border: 2px solid black;
    /* height: 15vh; */
    margin-top: 2%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.infoProduit p
{
    margin-top: 2%;
    margin-bottom: 2%;
    font-size: 1.2em;
}

.boutonsCard
{
    /* border: 1px solid yellow; */
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.boutonsCard a
{
    text-decoration: none;
    width: 45%;
    background-color: #0aa6beb4;
    height: 6vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
    font-size: 1.1em;
}


.boutonsCard a:hover
{
    background-color: #055f6dd1;
    border-color: #055f6dd1;
    color: white;
}
.boutonsCard form
{
    /* border: 2px solid blue; */
    width: 45%;
}

.boutonsCard button
{
    cursor: pointer;
    width: 100%;
    height: 6vh;
    background-color: #d35252eb;
    border: 2px solid #d35252eb;
    font-size: 1.1em;

}


.boutonsCard button:hover
{
    background-color: #720303cc;
    border-color: #720303cc;
    color: white;
}


/* --------------------------------Style category----------------------------- */

.lesCategories
{
    width: 95%;
    margin-left: 3%;
    display: flex;
    flex-wrap: wrap;
}


.infoCategory
{
    width: 20%;
    border: 2px solid black;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 2%;
    margin-bottom: 2%;
    margin-top: 2%;
}


.infoCategory p
{
    font-size: 1.1em;
}


/* --------------------------------------------Style comments -------------------------------- */

.comments
{
    /* border: 1px solid black; */
    width: 90%;
    margin-left: 3%;
    margin-top: 2%
}

.boutonsComments
{
    border: 2px solid black;
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 1%;

}

.boutonCommStyle
{
    width: 10%;
    height: 5vh;
    border: 1px solid #a5a5a5;
    cursor: pointer;
    margin: 0.5%;
    background-color: #a5a5a5;
}


.boutonCommStyle2
{
    width: 10%;
    height: 5vh;
    border: 1px solid #000000;
    cursor: pointer;
    margin: 0.5%;
    background-color: #ffffff;
}

.boutonCommStyle2:hover
{

    border: 1px solid #484848;
    background-color: #484848;
    color: white;
}

.profilComment
{
    border: 2px solid black;
    width: 45%;
    height: 30vh;
    display: flex;
    justify-content: space-between;
}


.imgProfilComment
{
    border: 1px solid black;
    width: 50%;
    height: 30vh;
    display: flex;
    justify-content: center;
    align-items: center
}

.imgProfilComment img
{
    width: 60%;
}



.infoCommentProfil
{
    /* border: 1px solid black; */
    width: 45%
}



/* ----------------------------------------productCommentDivStyle ------------------ */


.productCommentDiv
{
    /* border: 2px solid black; */
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}

.imgCommProduct
{
    border: 2px solid black;
    width: 22.5%;
    height: 35vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 2%;
    margin-bottom:2%;
}

.imgCommProduct img
{
    width: 50%;
}



/* -----------------------------------Style lesComms ------------------------------ */


.lesComms
{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.theCommentDiv
{
    width: 100%;
    border: 2px solid black;
}

.theCommentDiv p
{
    font-size: 1.3em;
    margin: 2%;
}





/* ---------------------------------------Responsive----------------------------- */


@media screen and (max-width: 1000px)
{
    .card
    {
        width: 30%;
    }
    .boutonsCard a
    {
        font-size: 0.95em;
    }
    .boutonsCard button
    {
        font-size: 0.9em;
    }
}


@media screen and (max-width: 830px)
{
    .boutonStyleProfil
    {
        width: 10%;
    }

    .boutonStyleProfil2
    {
        width: 10%;
    }
}


@media screen and (max-width: 720px)
{
    .card
    {
        width: 35%;
    }
}



@media screen and (max-width: 641px)
{
    .infoProfil p
    {
        font-size:0.9em;
    }
}



@media screen and (max-width: 605px)
{
    .boutonStyleProfil
    {
        width: 15%;
    }

    .boutonStyleProfil2
    {
        width: 15%;
    }
    .card
    {
        width: 40%;
    }
}


@media screen and (max-width: 530px)
{
    .infoProfil
    {
        width: 26%;
    }
    .lesBoutons
    {
        width: 66%;
    }
    .lesBoutons button
    {
        width: 30%;
    }
    .card
    {
        width: 44%;
    }
}


@media screen and (max-width: 480px)
{
    .card
    {
        width: 50%;
    }
}


@media screen and (max-width: 445px)
{
    .infoProfil
    {
        width: 35%;
    }
    .lesBoutons
    {
        width: 50%;
    }
    .lesBoutons button
    {
        width: 40%;
    }
    .boutonStyleProfil
    {
        width: 25%;
    }
    .boutonStyleProfil2
    {
        width: 25%;
    }
    .card
    {
        width: 60%;
    }
}


@media screen and (max-width: 368px)
{
    .infoProfil
    {
        width: 40%;
    }
    .lesBoutons
    {
        width: 55%;
    }
    .lesBoutons button
    {
        width: 45%;
    }
    .boutonStyleProfil
    {
        width: 30%;
    }

    .boutonStyleProfil2
    {
        width: 30%;
    }

    .card
    {
        width: 65%;
    }
}


@media screen and (max-width: 340px)
{

    .infoProfil
    {
        width: 40%;
    }
    .infoProfil p
    {
        font-size:0.8em ;
    }
    .lesBoutons
    {
        width: 55%;
    }
    .lesBoutons button
    {
        width: 45%;
    }
    .boutonStyleProfil
    {
        width: 30%;
    }

    .boutonStyleProfil2
    {
        width: 30%;
    }
    .card
    {
        width: 70%;
    }
    .boutonsCard button
    {
        font-size: 0.8em;
    }
    .boutonsCard a
    {
        font-size: 0.8em;
    }
}

@media screen and (max-width: 281px)
{
    .infoProfil
    {
        width: 40%;
    }
    .infoProfil p
    {
        font-size: 0.7em;
    }
    .lesBoutons
    {
        width: 55%;
    }

    .lesBoutons button
    {
        width: 45%;
    }

    .boutonStyleProfil
    {
        width: 30%;
    }


    .boutonStyleProfil2
    {
        width: 30%;
    }

    .card
    {
        width: 99%;
    }
}
</style>
