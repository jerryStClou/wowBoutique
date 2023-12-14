<style>
    .ensemble
{
    display: flex;
    /* border: 2px solid black; */
    justify-content: space-between;
}

.lePanier
{
    /* border: 2px solid blue; */
    width: 35%;
    height: 40vh;
}

.leProduit
{
    border: 3px solid black;
    height: 50vh;
    display: flex;
    /* flex-direction: column; */
    /* align-items: center; */
    height: 45vh;
}

.infoStyle
{
    font-size: 1.1em;
}
.imageProduit
{
    border: 3px solid black;
    width: 30%;
    height: 20vh;
    margin: 2%;
}

.infoProduit
{
    /* border: 3px solid green; */
    width: 65%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.quantite
{
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: 2px solid black;
    width: 85%;
    height: 6vh;
}

.ajoutPanier
{
    /* border: 2px solid blue; */
}

.quantite button
{
    cursor: pointer;
    background-color: #fff;
    border:1px solid black;
    width: 60%;
    height: 6vh;
    font-size: 1.4em;
}

.quantite button:hover
{
    background-color: black;
    color: white;
}

.quantite p
{
    font-size: 1.2em;
}

.retirePanier
{
    /* border: 2px solid blue; */
    display: flex;
    justify-content: end;
}

.infoProduit form
{
    /* border: 1px solid green; */
    width: 90%;
}

.SupprimerStyle
{
    border: 1px solid #f24028e2;
    width: 100%;
    height: 7vh;
    cursor: pointer;
    background-color: #f24028e2;
    font-size: 1.1em;
}

.SupprimerStyle:hover
{
    border: 1px solid #831305e2;
    background-color: #831305e2;
    color: white;
}



/* ---------------------------------Style recapitulatif ----------------------------------------- */


.recapitulatif
{
    border: 3px solid black;
    width: 60%;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 60vh;
}

.titreStyle
{
    font-size: 1.4em;
    font-weight: bold;
    text-align: center;
}

.recapDiv
{
    /* border: 2px solid blue; */
    width: 70%;
    display: flex;
    justify-content: space-between ;
}

.pStyle
{
    font-size: 1.3em;
    font-weight: bold;
}
.valideCommande
{
    /* border: 1px solid green; */
    width: 70%;
    /* height: 8vh; */
}
.commandeStyle
{
    border: 1px solid #FD384F;
    background-color: #FD384F;
    height: 8vh;
    font-size: 1.2em;
    width: 70%;
    cursor: pointer;
}

.commandeStyle:hover
{
    background-color: #8d0616;
    color: white;
}

.continuerStyle
{
    border: 1px solid #29DE92;
    background-color: #29DE92;
    height: 8vh;
    text-decoration: none;
    width: 70%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.3em;
    color: black;
    margin-top: 2%;
    margin-bottom: 2%;
}

.continuerStyle:hover
{
    color: white;
    border: 1px solid #05653d;
    background-color: #05653d;
}

@media screen and (max-width: 700px)
{
    .leProduit
    {
       flex-direction: column;
       align-items: center;
    }
}


@media screen and (max-width: 600px)
{
    .imageProduit
    {
       height: 7vh;
    }
    .infoProduit
    {
        /* background-color: blue; */
        width: 100%;
    }
    .valideCommande
    {
        width: 85%;
    }
    .continuerStyle
    {
        width: 85%;
    }
}
</style>
