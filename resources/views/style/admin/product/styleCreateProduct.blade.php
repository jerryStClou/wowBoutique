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
    height: 40vh;
    width: 60%;
    overflow: auto;
}

.description p
{
    width: 85%;
    /* margin-top: 2%;
    margin-left: 7%; */
    margin: auto;
    /* text-align: center; */
}

.panierStyle
{
    /* border: 3px solid blue; */
    display: flex;
    flex-direction: column;
    width: 60%;
}



.panierStyle button
{
    border: 1px solid #ffd958;
    background-color: #ffd958;
    height: 8vh;
    margin-top: 3%;
    font-size: 1.2em;
    cursor: pointer;
}


.panierStyle button:hover
{
    border-color: #9e7a05df;
    background-color: #9e7a05df;
    color: white;
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
    /* border: 2px solid yellow; */
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


.leleFameuxCommentaire
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


.commentaireDuProfil p
{
    font-size: 1.1em;
    width: 80%;
    margin: auto;
}
/* ----------------------------------------ajoutCommentaireStyle ------------------- */


.ajoutCommentaire
{
    /* border: 2px solid green; */
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
    height: 27vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.imageCard img
{
    width: 68%;
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


    .panierStyleLiens
    {
        width: 45%;
        height: 7vh;
        background-color: #20c0e8c2;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        font-size: 1.2em;
        margin-top: 5%;
    }



    .panierStyleLiens:hover
    {
        background: #0b6379c2;
        color: white;
    }
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
      width: 85%;
    }

    .imageCard img
    {
        width: 87%;
    }
}

@media screen and (max-width: 978px)
{
    .leProfil
    {
        border: 2px solid black;
        flex-direction: column;
        align-items: center;
        justify-content: baseline;
        width: 40%;
    }
    .imgProfil
    {
        width: 100%;
        height: 25vh;
    }

    .imgProfil img
    {
        width: 60%;
    }

    .infoProfil
    {
        width: 100%;
    }

    .infoProfil p
    {
        /* margin-top: 0%;
        margin-bottom: 0%; */
        width: 100%;
        /* background-color: red; */
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.05em;
    }
}

@media screen and (max-width:767px)
{
    .grosBloc
    {
        justify-content: center;
    }
    .bloc1
    {
        width: 70%;

    }

    .bloc1 img
    {
       width: 66%;
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
        border: 1px solid blue;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: auto;
        /* height: 30vh; */
    }
    .pStyle
    {
        margin-top:0.5%;
        margin-bottom: 0.5%;
    }
    .description
    {
        /* height: 30vh;    */
        width: 80%;
    }
    .panierStyle
    {
        width: 100%;
    }

    .panierStyle button
    {
        width: 90%;
    }
    .panierStyleLiens
    {
        width: 80%;
        height: 6vh;
    }

    .lesBoutons
    {
        width: 80%;
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
    /* .panierStyle
    {
        width: 30%;
    } */
    .panierStyle button
    {
        font-size: 1em;
    }

    .boutonStyle
    {
        height: 5vh;
        width: 100%;
        font-size: 0.9em;
    }


    .lesProduitCards
    {
        border: 1px solid blue;
        width: 98%;
    }
    .produitSimilaire2
    {
        border: 1px solid red;
        width: 100%;
        margin: auto;
    }
    .card
    {
        /* height: 35vh; */
    }
    .imageCard img
    {
        width: 80%;

    }

    .commentairesBouton
    {
        height: 7vh;
    }


    .commentairesBouton2
    {
        height: 7vh;
    }
}

/*
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
} */


@media screen and (max-width:657px)
{
    .bloc1 img
    {
        width: 75%;
    }

    .imageCard img
    {
        width: 100%;
    }
}


@media screen and (max-width: 564px)
{
    .bloc1 img
    {
        width: 90%;
    }


    .imageCard
    {
        height: 23vh;
    }

    .imageCard img
    {
        width: 100%;
    }
}



@media screen and (max-width: 500px)
{

    /* .bloc1
    {
        height: 18vh;
    }
    .bloc1 img
    {
        width: 55%;
    } */
    .card
    {
        width: 55%;
        height: 60vh;
    }
    .imageCard
    {
        height: 40vh;
    }

    .imageCard img
    {
        width: 95%;
    }
    .boutonsCommentaires
    {
        flex-direction: column;
        align-items: center;
    }
    .commentairesBouton
    {
        width: 90%;
        height: 4vh;
    }

    .commentairesBouton2
    {
        width: 90%;
        height: 4vh;
    }

    .leFameuxCommentaire
    {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .leProfil
    {
        width: 60%;
    }

    .commentaireDuProfil
    {
        width: 95%;
    }
}



@media screen and (max-width: 411px)
{
    .bloc1
    {
        width: 80%;
        height: 93vh;
    }

    .bloc1 img
    {
        width: 95%;
    }
    .contenuBloc3
    {
        width: 80%;
    }

    .imageCard
    {
        height: 35vh;
    }

    .imageCard img
    {
        width: 65%;
    }

}




@media screen and (max-width: 376px)
{

    .bloc1
    {
        /* height: 18vh; */
    }
    .bloc1 img
    {
        width: 98%;
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
        width: 100%;
        min-height: 42vh;
        max-height: 48vh;
    }
    .card
    {
        height: 50vh;
        width: 48%;
    }
    .imageCard
    {
        height: 30vh;
    }
    .imageCard img
    {
        width: 80%;
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
        height: 76vh;
        width: 95%;
    }
    .bloc1 img
    {
        width: 99%;
    }
    .contenuBloc3
    {
        width: 98%;
    }
}
</style>
