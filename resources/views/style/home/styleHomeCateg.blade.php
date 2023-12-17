<style>
    .lesCards
{
    border: 1px solid black;
    display: flex;
    flex-wrap: wrap;
    /* justify-content: space-around; */
}

.card
{
    border: 1px solid black;
    width: 20%;
    margin: 2%;
}

.imageCard
{
    border: 3px solid black;
    border-radius: 5px;
    height: 45vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.imageCard img
{
    width: 55%;
}

.infoCard
{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.infoCard form
{
    /* border: 1px solid red; */
    width: 100%;
}

.infoCard p
{
    margin-top: 0;
    margin-bottom: 0;
    font-size: 1.2em;
}

.infoCard button
{
    border: 1px solid #ffd958;
    background-color: #ffd958;
    cursor: pointer;
    width: 100%;
    height: 6vh;
    font-size: 1em;
}

.infoCard button:hover
{
    border-color:#957405e6;
    background-color: #957405e6;
    color: white;
}

@media screen and (max-width: 1276px)
{
    .imageCard
    {
        height: 35vh;
    }
}


@media screen and (max-width: 1143px)
{
    .imageCard
    {
        height: 20vh;
    }
}


@media screen and (max-width: 867px)
{
    .imageCard
    {
        height: 15vh;
    }
}


@media screen and (max-width: 607px)
{
    .imageCard
    {
        height: 12vh;
    }
}

@media screen and (max-width: 480px)
{
    .imageCard
    {
        height: 9vh;
    }
}


@media screen and (max-width: 461px)
{
    .card
    {
        width: 25%;
    }
    .infoCard button
    {
        height: 7.5vh;
    }
}
</style>
