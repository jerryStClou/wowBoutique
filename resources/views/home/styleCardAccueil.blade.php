<style>

/* ----------------------------description-------------------------- */

.description
{
    border: 3px solid black;
    /* height: 20vh; */
    display: flex;
    justify-content: center;
    align-items: center;
}

.description p
{
    font-size: 1.2em;
    margin: 2%;
}

/* ----------------------------Style Card Accueil --------------------------- */
.lesCardCateg
{
    border: 2px solid black;
    display: flex;
    flex-wrap: wrap;
    width: 95%;
    height: 65vh;
    margin: auto;
    overflow: auto;
}

.cardCateg
{
    /* border: 2px solid black; */
    width: 25%;
    margin-top: 2%;
    margin-left: 5.5%;
}

.imgCardCateg
{
    width: 100%;
    border: 2px solid black;
    height: 35vh;
    display: flex;
    justify-content: center;
    align-items: center;
}


.imgCardCateg img
{
    width: 42%;
}

.infoCarCateg
{
    border: 2px solid black;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 1.5%;
    width: 100%;
}

.infoCarCateg p
{
    font-size: 1.1em;
    margin-top: 1%;
    margin-bottom: 2%;
}


.infoCarCateg a
{
    text-decoration: none;
    width: 70%;
    height: 6vh;
    color: black;
    background-color: #34d692e1;
    font-size: 1.1em;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 2%;
}

.infoCarCateg a:hover
{
    background-color: #046d41e1;
    color: white;
}

/* --------------------------------------Responsives BreaksPoints----------------------------- */

@media screen and (max-width: 920px)
{
    /* .imgCardCateg
    {
        height: 25vh;
    } */

    .lesCardCateg
    {
        height: 60vh;
    }

    .imgCardCateg img
    {
        width: 55%;
    }
}


@media screen and (max-width: 753px)
{

    .lesCardCateg
    {
        height: 48vh;
    }

    .imgCardCateg
    {
        height: 25vh;
    }
}


@media screen and (max-width: 625px)
{

    .imgCardCateg
    {
        height: 22vh;
    }

    .infoCarCateg a
    {
        width: 90%;
    }
}

@media screen and (max-width: 500px)
{
    .cardCateg
    {
       width: 43%;
    }

    .lesCardCateg
    {
        height: 44vh;
    }

    .imgCardCateg img
    {
        width: 40%;
    }

    .infoCarCateg a
    {
        width: 100%;
        font-size: 1em;
    }

}

@media screen and (max-width: 300px)
{

    .lesCardCateg
    {
        height: 49vh;
    }

    .cardCateg
    {
       width: 80%;
       margin-left: 10%;
    }

    .imgCardCateg
    {
        height: 27vh;
    }

}
</style>
