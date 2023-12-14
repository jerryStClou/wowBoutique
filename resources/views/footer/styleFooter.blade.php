<style>

footer
{
/*display:flex;
justify-content:space-around;*/
border: 2px solid #303030;
background: #303030;

}

footer h3
{
    color: white;
}

.liensFooterDiv
{
    /* border: 1px solid white; */
    display:flex;
    flex-wrap: wrap;
    justify-content:space-around;
    list-style: none;
}



.newsletter
{
    text-align: center;
}

.newsletterForm
{
    /* border: 1px solid white; */
}

.liensFooter
{

    text-decoration:none;
    list-style: none;
    color:white;
    font-size:1.1rem;

}

.liensFooterDiv a
{
    color: white;
    text-decoration: none;
    font-size: 1.2em;
    margin: 3%;
}

.liensFooterDiv a:hover
{
    text-decoration: underline;
}

.liensFooter:hover
{
/* color:white; */
text-decoration: underline;
}

.inputFooter
{
    width:40%;
    height:6vh;
}

.submitFooter
{
    border:2px solid rgb(21, 183, 233);
    border-radius: 3px;
    background:rgb(21, 183, 233);
    width:8%;
    height:6.5vh;
    cursor:pointer;
}

.submitFooter:hover
{
    border:2px solid #0B7090;
    background-color: #0B7090;
    color: white;

}



@media screen and (max-width: 800px)
{
    .submitFooter
    {
        width: 11%;
    }
}


@media screen and (max-width: 800px)
{
    .submitFooter
    {
        width: 15%;
    }
}

@media screen and (max-width: 450px)
{
    .inputFooter
    {
        width: 65%;
    }
    .submitFooter
    {
        width: 20%;
    }
}

@media screen and (max-width: 296px)
{
    .submitFooter
    {
        font-size: 0.9em;
        width: 25%;
    }
}

@media screen and (max-width: 266px)
{
    .submitFooter
    {
        font-size: 0.8em;
    }
}

@media screen and (max-width: 242px)
{
    .liensFooterDiv
    {
        flex-wrap: nowrap;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .liensFooterDiv a
    {
        margin-right: 0;
        margin-left: 0;
        margin-top: 0;
        margin-bottom: 3%;
    }
    .inputFooter
    {
        width: 55%;
    }
    .submitFooter
    {
        font-size: 0.8em;
        width: 30%;
    }
}
</style>
