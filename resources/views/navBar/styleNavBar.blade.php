<style>
    *
{
    padding: 0;
    margin: 0;
}

header
{
    border: 1px solid white;
}

.invisible
{
    display: none;
}

nav
{
    border: 3px solid #084f69dc;
    display: flex;
    justify-content: space-around;
    align-items: center;
    /* height: 13vh; */
    background-color: #fff;
    /* background-color: #303030; */

}

.liens1Div
{
    /* border: 1px solid black; */
    width: 10%;
    display: flex;
    align-items: center;
}


.logoStyle
{
    /* border: 1px solid red; */
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    color: black;
    font-size: 1.2em;
}


.logoStyle:hover
{
    text-decoration: underline;
}



.logoStyle img
{
    width: 85%;
}



.recherche1
{
    /* border: 1px solid red; */
    width: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
}


.recherche1 input
{
    background-color: white;
    border: 2px solid black;
    width: 70%;
    height: 6vh;
}

.recherche1 button
{
    border: 2px solid #084f69dc;
    border-radius: 5px;
    background-color: rgba(8, 79, 104, 0.863);
    width: 20%;
    height: 7vh;
    margin-left: 2%;
    cursor: pointer;
    font-size: 1.1em;
    color: #ffffff;
}

.recherche1 button:hover
{
    background-color: black;
    color: white;
}

.liens2Div
{
    display: flex;
    justify-content: space-around;
    list-style: none;
    /* border: 2px solid blue; */
    width: 45%;
}



.liens2Div a
{
    text-decoration: none;
    color: #434242;
    font-size: 1.2em;
    /* border: 1px solid #434242; */
    border-radius:2px;
    width: 15%;
    display: flex;
    justify-content: center;
    align-items: center;
}


.liens2Div a:hover
{
    color: white;
    background-color: #434242;

}


.liens2Div form
{
    width: 15%;
    /* border: 1px solid red; */
}

.liens2Div form button
{
    width: 100%;
    height: 100%;
    cursor: pointer;
    border: 1px solid white;
    background: white;
    font-size: 1.2em;
    color: #434242;
}



.liens2Div form button:hover
{
    color: white;
    background-color: #434242;

}

.panierLien i
{
    font-size: 1.2em;
}

.nbrPanier
{
    border: 1px solid #ea0f0fe1;
    background-color: #ea0f0fe1;
    width: 40%;
    /* height: 40%; */
    color: white;
    font-size: 1.1em;
    display: flex;
    align-items: center;
    justify-content: center;
    /* margin-left: 2%;    */
}


.boutonsNavBar
{
    border: 2px solid #434242;
    background-color: #434242;
    border-radius: 5px;
    height: 6vh;
    width: 8%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    cursor: pointer;
}

.boutonsNavBar:hover
{
    background-color: #084f69dc;
    border-color: #084f69dc;
}

.trait
{
    border: 2px solid white;
    width: 55%;
}

.recherche2
{
    display: none;
}

/* ----------------------------nav2 --------------------------- */

.nav2
{
    display: flex;
    justify-content: space-around;
    align-items: center;
    /* border: 1px solid #C9C16B; */
    background-color: #084f69dc;
    height: 7vh;
}



.nav2 a
{
    text-decoration: none;
    color: #ffffff;
    font-size: 1.3em;
    /* border: 2px solid black; */
    width: 10%;
    height: 5.5vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav2 a:hover
{
    text-decoration: underline;
}


/* -----------------------------------------tousLesSousCateg---------------------------------------------- */

/* .tousLesSousCateg1
{
    border: 2px solid black;
    min-height: 20vh;
    display: flex;
    width: 30%;
    position:absolute;
    top: 17%;
    left: 0.5%;
}

.sousCateg
{
    border: 2px solid blue;
    width: 90%;
    margin-left: 5%;
    display: flex;
    flex-wrap: wrap;
}


.lienSousCateg
{
    font-size: 1.4em;
    color: #434242;
    text-decoration: none;
    margin-left: 2%;
    margin-top: 2%;
    border: 2px solid black;
    border-radius: 5%;
    width: 20%;
    height: 5vh;
    display: flex;
    justify-content: center;
    align-items: center ;
}

.lienSousCateg:hover
{
    background-color: #434242;
    color: white;
}
*/



/* ----------------------------Style boutonApparitionNav ---------------------------------- */


.boutonApparitionNav
{
    border: 2px solid #434242;
    background-color: white;
    border-radius: 5px;
    height: 6vh;
    width: 3.5%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    cursor: pointer;
    position: absolute;
    top: 4%;
    right: 5%;
}

.boutonApparitionNav:hover
{
    background-color: #084f69dc;
    border-color: #084f69dc;
}


.trait2
{
    border: 2px solid #434242;
    width: 55%;
}








/* --------------------------------Responsive-------------------------------- */



@media screen and (max-width: 1120px)
{
    .liens2Div a
    {
        width: 20%;
    }
    .nav2 a
    {
        width: 13%;
    }
}



@media screen and (max-width: 1025px)
{
    .recherche1
    {
        width: 33%;
    }
    /* .liens2Div
    {
        width: 32%;
    } */

    .boutonsNavBar
    {
        width: 10%;
    }

}


@media screen and (max-width: 847px)
{
    .liens1Div
    {
        width: 11%;
    }
    .recherche1
    {
        width: 37%;
    }

    .liens2Div
    {
        width: 42%;
    }

    .liens2Div a
    {
        width: 20%;
        font-size: 1em;
    }

    .nav2 a
    {
        width: 15%;
        font-size: 1em;
    }
    .boutonApparitionNav
    {
        width: 5%;
    }
}

@media screen and (max-width: 728px)
{

    nav
    {
        display: flex;
        /* flex-direction: column; */
        flex-wrap: wrap;
        align-items: normal;
        justify-content: start;
        width: 102.5%;
    }

    .liens1Div
    {
        width: 13%;
        margin-left: 3%;
    }

    .liens2Div
    {
        width: 75%;
        display: flex;
        align-items: center;
        margin-left: 5%;
    }
    .liens2Div a
    {
        width: 17%;
        height: 80%;
    }

    .boutonsNavBar
    {
        width: 7%;
    }


    .recherche1
    {
        display: none;
    }


    .recherche2
    {
        display: flex;
        justify-content: center;
        width: 100%;
        /* margin-left: 20%; */
        margin-top: 1%;
        margin-bottom: 1%;
    }
    .recherche2 input
    {
        width: 60%;
        height: 5vh;
        border: 2px solid black;
    }


    .recherche2 button
    {
        height: 5.5vh;
        width: 10%;
        border: 2px solid #454545d2;
        /* border-radius: 5px; */
        background-color: #454545d2;
        color: white;
    }

    .recherche2 button:hover
    {
        background-color: black;
        color: white;
    }


    .nav2
    {
        display: flex;
        /* justify-content: center; */
        flex-wrap: wrap;
        width: 103%;
        height: 15vh;
    }

    .nav2 a
    {
        /* background-color: blue; */
        padding-left: 8%;
        padding-right: 8%;

    }
}


@media screen and (max-width: 587px)
{

    .liens1Div
    {
        width: 17%;
        margin-left: 3%;
    }

    .liens2Div
    {
        width: 70%;
        display: flex;
        align-items: center;
        margin-left: 5%;
    }

    .boutonsNavBar
    {
        width: 10%;
    }

    .liens2Div a
    {
        height: 60%;
        width: 23%;
    }

    .nav2 a
    {
        width: 2.5%;
    }

}


@media screen and (max-width: 480px)
{
    .liens1Div
    {
        width: 20%;
    }
    .liens2Div
    {
        width: 68%;
    }
    .boutonsNavBar
    {
        width: 11%;
    }
}

/*
@media screen and (max-width: 457px)
{
    .liens1Div
    {
        width: 25%;
        margin-left: 0%;
    }
    .liens2Div
    {
        width: 73%;
        margin-left: 0%;
    }
} */

@media screen and (max-width: 400px)
{
    nav
    {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        flex-wrap: nowrap;
        /* height: 16vh; */
    }

    .liens1Div
    {
        width: 20%;
    }

    .liens1Div img
    {
        width: 100%;
    }



    .liens2Div
    {
        width: 100%;
        margin-top: 1%;
        margin-left: 0;
    }

    .liens2Div a
    {
        width: 16%;
        font-size: 0.9em;
    }

    .boutonsNavBar
    {
        height: 4.5vh;
        width: 7%;
    }

    .recherche2
    {
        width: 100%;
        /* border: 1px solid orange; */
        justify-content: center;
    }


    .recherche2 input
    {
        width: 80%;
    }

    .nav2 a
    {
        font-size: 0.9em;
        width: 12%;
    }


    /* .liens1Div
    {
        width: 100%;
    }

    .liens1Div li
    {
        border: 1px solid blue;
        width: 100%;

    }


    .liens1Div a
    {
        border: 1px solid #85bb2d;
        width: 100%;
        margin: auto;
    }

    .liens1Div img
    {
        width: 30%;
        margin: auto;
    }


    .liens2Div
    {
        width: 100%;
    }

    .liens2Div a
    {
        font-size: 1em;
    }
    .nav2 a
    {
        font-size: 1em;
    } */
}


@media screen and (max-width: 348px)
{
    .liens2Div a
    {
        font-size: 1em;
    }

    .recherche2
    {
        /* border: 2px solid blue; */
        width: 100%;
        margin: 0%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .recherche2 input
    {
        width: 70%;
        height: 3vh;
    }

    .recherche2 button
    {
        height: 3.5vh;
        width: 10%;
    }

    .nav2
    {
        /* width: 100%; */
    }

    .nav2 a
    {
        font-size: 1em;
    }

}

@media screen and (max-width: 301px)
{

    .liens1Div img
    {
        width: 87%;
    }
    .liens2Div a
    {
        font-size: 0.9em;
    }

    .nav2 a
    {
        font-size: 0.9em;
    }
}
</style>
