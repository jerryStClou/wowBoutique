<style>
    .invisible
{
    display: none;
}

.grosBloc
{
    /* border: 1px solid black; */
    display: flex;
    justify-content: space-between;
}

/* --------------------------------------bloc1 Style ----------------------------------- */
.bloc1
{
    border: 3px solid black;
    width: 40%;
    height: 95vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.bloc1 img
{
    width: 65%;
}

.contenueBloc2
{
    border: 1px solid black;
    width: 50%;
}


/* ---------------------------------------bloc2 Style ------------------ */

.bloc2
{
    /* border: 3px solid black; */
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.pStyle
{
    font-size: 1.2em;
    margin-top: 1%;
    margin-bottom: 1%;
}

.description
{
    border: 3px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 30vh;
    width: 60%;
    overflow: auto;
}

.description p
{
    font-size: 1.1em;
}

.panierStyle
{
    /* border: 3px solid blue; */
    display: flex;
    flex-direction: column;
    width: 60%;
}






.panierStyle
{
    /* border: 1px dashed black; */
    display: flex;
    flex-direction: column;
    width: 60%;
    margin-top: 2%
}




.panierAjoutStyle
{
    width: 100%;
    height: 7vh;
    background-color: #1177d6a8;
    border: 1px solid #1177d6a8;
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
    font-size: 1.2em;
    cursor: pointer;
}



.panierAjoutStyle:hover
{
    background: #033768a8;
    color: white;
}


.prixPanierStyle
{
    font-size: 1.6em;
    font-weight: bold;
    margin-left: 4%;
}


.quantiterPanierDiv
{
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 80%;
    margin-left: 2%;
}



.lesBoutons
{
    /* border: 3px solid black; */
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 60%;
    margin-top: 2%;
}

.boutonStyle
{
    width: 45%;
    height: 7vh;
    margin: 2%;
    background-color: #d6d024ce;
    border: 2px solid #d6d024ce;
    cursor: pointer;
    font-size: 1.1em;
}


.boutonStyle:hover
{
    border-color: #827d03ce;
    background-color: #827d03ce;
    color: white;
}



/* ---------------------------------------Style Commentaire----------------------------------- */

.lesCommentaires
{
    border: 2px solid black;
}

.boutonsCommentaires
{
    border: 2px solid yellow;
    display: flex;
    justify-content: center;
}

.commentairesBouton
{
    width: 25%;
    height: 7vh;
    cursor: pointer;
    border: 1px solid #FE2C55;
    background-color: #FE2C55;
    color: white;
    border-radius:5px ;
    margin: 1%;
}

.commentairesBouton2
{
    width: 25%;
    height: 7vh;
    cursor: pointer;
    border: 1px solid black;
    background-color: white;
    border-radius:5px ;
    margin: 1%;
}


.commentairesBouton2:hover
{
    transform: scale(1.05);
}


.boutonDivStyle
{
    /* border: 1px solid black; */
    width: 100%;
    display: flex;
    justify-content: center;
}

.commentairesBouton3
{
    width: 25%;
    height: 7vh;
    cursor: pointer;
    border: 1px solid black;
    background-color: white;
    border-radius:5px ;
    margin: 2%;
}


.commentairesBouton3:hover
{
    transform: scale(1.05);
}


.sousGroupeCommentaire
{
    /* border: 2px solid black; */
    margin-top: 1%;
}

.leFameuxCommentaire
{
    /* border: 2px solid blue; */
    display: flex;
    /* justify-content: space-between; */
}



.leProfil
{
    /* border: 2px solid green; */
    width: 30%;
    display: flex;
    justify-content: space-between;
    margin: 2%;
}

.imgProfil
{
    border: 2px solid black;
    width: 50%;
    height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
}


.imgProfil img
{
    width: 100%;
}


.infoProfil
{
    /* border: 2px solid red; */
    width:40%;
}

.commentaireDuProfil
{
    border: 4px solid black;
    width: 65%;
    height: 40vh;
    overflow: auto;
    margin: 2%;
}
/* ----------------------------------------ajoutCommentaireStyle ------------------- */


.ajoutCommentaire
{
    border: 2px solid green;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ajoutCommentaire input[type="file"]
{
    display: none;
}

.imageStyleform
{
    border: 2px solid black;
    width: 30%;
    height: 25vh;
    margin-top: 2%;
    font-size: 7em;
    color: #b2b2b2;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.imageStyleform:hover
{
    color: black;
}


.ajoutCommentaire input
{
    width: 45%;
    height: 6vh;
    border: 3px solid black;
    font-size: 1.1em;
    font-weight: bold;
    margin: 2%;
}

.ajoutCommentaire textarea
{
    width: 45%;
    border: 3px solid black;
    height: 30vh;
    font-size: 1.1em;
    font-weight: bold;
}


.ajoutCommentaire input[type="submit"]
{
    background-color: #99cb5de3;
    border: 1px solid #99cb5de3;
    cursor: pointer;
}


.ajoutCommentaire input[type="submit"]:hover
{
    background-color: #3d670ae3;
    border: 1px solid #3d670ae3;
    color: white;
}


/* ----------------------------------- produitSimilaire Style ----------------------------------------- */


.produitSimilaire
{
    border: 1px solid black;
}

.titleStyle
{
    font-size: 1.3em;
    text-align: center;
}

.lesProduitCards
{
    border: 3px solid black;
    width: 90%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    max-height: 70vh;
    overflow: auto;
}

.card
{
    /* border: 1px solid blue; */
    width: 30%;
    height: 40vh;
    margin: 2%;
}

.imageCard
{
    border: 3px solid black;
    height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.imageCard img
{
    width: 70%;
}

.infoCard
{
    /* border: 2px solid red; */
    display: flex;
    flex-direction: column;
    align-items: center;
}


.infoCard p
{
    margin-top:2.5%;
    margin-bottom: 2.5%;
}

.ajoutPanierStyle
{
    /* border: 2px solid red; */
    width: 90%;
}

.ajoutPanierStyle button
{
    width: 100%;
    height: 6vh;
    cursor: pointer;
    background-color: #d6d024ce;
    border: 2px solid #d6d024ce;
}


.ajoutPanierStyle button:hover
{
    border-color: #827d03ce;
    background-color: #827d03ce;
    color: white;
}



 /* .panierStyleLiens
    {
        text-decoration: none;
        width: 90%;
        height: 6vh;
        background-color: #ebd26dc2;
        display: flex;
        justify-content: center;
        align-items: center;
    } */


/* ----------------------------------------Style Bloc 3-------------------------------------- */




.contenuBloc3
{
    /* border: 3px solid black; */
    display: none;
}




/*---------------------------------------------------Style Pop up----------------------------------------------------------------*/


.fenetre
{
    position:fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
    background:rgba(0,0,0,0.7);
    transition: opacity .4s;
    opacity: 0;
    visibility: hidden;
}

.fenetre:target
{
visibility: visible;
opacity:1;
}



.popup
{
    display: inline-block;
    position: absolute;
    top:1%;
    left:20%;
    /*top:90px;
    left:100px;*/
    border: 1px solid black;
    border-radius: 5px;
    background-color: white;
    width:800px;
    height:600px;
    overflow: auto;
}

.popup .cross
{
    position: absolute;
    top:0.25%;
    right: 2%;
    font-size: 230%;
    text-decoration: none;
    font-weight:bold;
    color:#8622D0;

}

.popup .cross:hover
{
  border: 1px solid #D03222;
  background-color: #D03222;
  color: white;
}

.popup h3
{
    margin-top: 1%;
    margin-bottom: 1%;
}



.popup input[type="submit"]
{
    border: 1px solid #f0d449df;
    background-color: #f0d449df;
    width: 70%;
    height: 7vh;
    cursor: pointer;
    font-size: 1.1em;
}




.popup input[type="submit"]:hover
{
    border: 1px solid #a88d04e6;
    background-color: #a88d04e6;
    color: white;
}



#inputAjoutPanier
{
    width:550px;
    height: 40px;
    font-size: 19px;
}




/* ----------------------------------------Style Responsive -------------------------------------- */


@media screen and (max-width: 1000px)
{
    .bloc1 img
    {
      width: 95%;
    }
}

@media screen and (max-width: 984px)
{
    .grosBloc
    {
        justify-content: center;
    }
    .bloc1
    {
        height: 30vh;
        width: 25%;
    }

    .bloc1 img
    {
       width: 45%;
    }
    .contenueBloc2
    {
        display: none;
    }
    .contenuBloc3
    {
        border: 1px solid black;
        display: block;
        width: 70%;
        margin: auto;
    }
    .bloc3
    {
        border: 1px solid black;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: auto;
    }
    .pStyle
    {
        margin-top:0.5%;
        margin-bottom: 0.5%;
    }
    .description
    {
        height: 15vh;
    }
    .imageStyleform
    {
        height: 15vh;
    }
    .commentairesBouton
    {
        height: 4vh;
    }
    .commentairesBouton2
    {
        height: 4vh;
    }
    .ajoutCommentaire input
    {
        height: 4vh;
    }
    .ajoutCommentaire textarea
    {
        height: 14vh;
    }
    .panierStyle
    {
        width: 30%;
    }
    .panierStyle button
    {
        font-size: 1em;
    }



    .boutonStyle
    {
        height: 4vh;
        width: 100%;
        font-size: 0.9em;
    }
    .produitSimilaire
    {
        width: 50%;
        margin: auto;
    }
    .card
    {
        height: 35vh;
    }
    .imageCard img
    {
        width: 95%;

    }
}


@media screen and (max-width: 767px)
{
    .bloc1
    {
        height: 25vh;
    }
    .bloc1 img
    {
        width: 55%;
    }
    .card
    {
        width: 45%;
    }
}


@media screen and (max-width: 564px)
{

    .bloc1
    {
        height: 23vh;
    }
    .bloc1 img
    {
        width: 65%;
    }
}



@media screen and (max-width: 500px)
{

    .bloc1
    {
        height: 18vh;
    }
    .bloc1 img
    {
        width: 55%;
    }
    .card
    {
        width: 55%;
    }
}



@media screen and (max-width: 411px)
{

    .bloc1
    {
        height: 18vh;
    }
}




@media screen and (max-width: 376px)
{

    .bloc1
    {
        height: 18vh;
    }
    .bloc1 img
    {
        width: 73%;
    }
    .ajoutPanierStyle
    {
        width: 100%;
    }
    .produitSimilaire
    {
        border: 1px solid black;
        width: 90%;
        height: 70vh;
    }
    .lesProduitCards
    {
        width: 75%;
        min-height: 42vh;
        max-height: 48vh;
    }
    .card
    {
        height: 25vh;
        width: 60%;
    }
    .imageCard
    {
        height: 20vh;
    }
    .imageCard img
    {
        width: 60%;
    }
    .ajoutPanierStyle button
    {
        height:8vh
    }

}

@media screen and (max-width: 281px)
{
    .bloc1
    {
        height: 18vh;
    }
    .bloc1 img
    {
        width: 90%;
    }
}
</style>
