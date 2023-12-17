<script>
    let buttonProduct  = document.querySelector("#buttonProduct");
    let buttonCategory  = document.querySelector("#buttonCategory");
    let buttonSubCategory  = document.querySelector("#buttonSubCategory");
    let buttonComment  = document.querySelector("#buttonComment");

    let lesCards  = document.querySelector("#lesCards");
    let lesCategories  = document.querySelector("#lesCategories");
    let lesSubCategories  = document.querySelector("#lesSubCategories");
    let comments  = document.querySelector("#comments");


    buttonProduct.addEventListener("click", function(){
        lesCards.classList.remove("invisible");
        lesCards.classList.add("lesCards");

        lesCategories.classList.remove("lesCategories");
        lesCategories.classList.add("invisible");

        lesSubCategories.classList.remove("lesCategories");
        lesSubCategories.classList.add("invisible");

        comments.classList.remove("comments");
        comments.classList.add("invisible");

        buttonProduct.classList.remove("boutonStyleProfil");
        buttonProduct.classList.add("boutonStyleProfil2");

        buttonCategory.classList.remove("boutonStyleProfil2");
        buttonCategory.classList.add("boutonStyleProfil");

        buttonSubCategory.classList.remove("boutonStyleProfil2");
        buttonSubCategory.classList.add("boutonStyleProfil");

        buttonComment.classList.remove("boutonStyleProfil2");
        buttonComment.classList.add("boutonStyleProfil");

    })





    buttonCategory.addEventListener("click", function(){
        lesCards.classList.remove("lesCards");
        lesCards.classList.add("invisible");

        lesCategories.classList.remove("invisible");
        lesCategories.classList.add("lesCategories");

        lesSubCategories.classList.remove("lesCategories");
        lesSubCategories.classList.add("invisible");

        comments.classList.remove("comments");
        comments.classList.add("invisible");

        buttonProduct.classList.remove("boutonStyleProfil2");
        buttonProduct.classList.add("boutonStyleProfil");

        buttonCategory.classList.remove("boutonStyleProfil");
        buttonCategory.classList.add("boutonStyleProfil2");

        buttonSubCategory.classList.remove("boutonStyleProfil2");
        buttonSubCategory.classList.add("boutonStyleProfil");

        buttonComment.classList.remove("boutonStyleProfil2");
        buttonComment.classList.add("boutonStyleProfil");
    })





    buttonSubCategory.addEventListener("click", function(){
        lesCards.classList.remove("lesCards");
        lesCards.classList.add("invisible");

        lesCategories.classList.remove("lesCategories");
        lesCategories.classList.add("invisible");

        lesSubCategories.classList.remove("invisible");
        lesSubCategories.classList.add("lesCategories");

        comments.classList.remove("comments");
        comments.classList.add("invisible");

        buttonProduct.classList.remove("boutonStyleProfil2");
        buttonProduct.classList.add("boutonStyleProfil");

        buttonCategory.classList.remove("boutonStyleProfil2");
        buttonCategory.classList.add("boutonStyleProfil");

        buttonSubCategory.classList.remove("boutonStyleProfil");
        buttonSubCategory.classList.add("boutonStyleProfil2");

        buttonComment.classList.remove("boutonStyleProfil2");
        buttonComment.classList.add("boutonStyleProfil");
    })





    buttonComment.addEventListener("click", function(){
        lesCards.classList.remove("lesCards");
        lesCards.classList.add("invisible");

        lesCategories.classList.remove("lesCategories");
        lesCategories.classList.add("invisible");

        lesSubCategories.classList.remove("lesCategories");
        lesSubCategories.classList.add("invisible");

        comments.classList.remove("invisible");
        comments.classList.add("comments");

        buttonProduct.classList.remove("boutonStyleProfil2");
        buttonProduct.classList.add("boutonStyleProfil");

        buttonCategory.classList.remove("boutonStyleProfil2");
        buttonCategory.classList.add("boutonStyleProfil");

        buttonSubCategory.classList.remove("boutonStyleProfil2");
        buttonSubCategory.classList.add("boutonStyleProfil");

        buttonComment.classList.remove("boutonStyleProfil");
        buttonComment.classList.add("boutonStyleProfil2");
    })





// ----------------------------Script Comment -----------------------------------------------------------------------------


let boutonCommProfil  = document.querySelector("#boutonCommProfil");
let boutonCommProduct  = document.querySelector("#boutonCommProduct");
let boutonCommComments  = document.querySelector("#boutonCommComments");


let profilComment  = document.querySelector("#profilComment");
let productCommentDiv  = document.querySelector("#productCommentDiv");
let lesComms  = document.querySelector("#lesComms");


boutonCommProfil.addEventListener("click", function(){
    profilComment.classList.remove("invisible");
    profilComment.classList.add("profilComment");

        productCommentDiv.classList.remove("productCommentDiv");
        productCommentDiv.classList.add("invisible");

        lesComms.classList.remove("lesComms");
        lesComms.classList.add("invisible");

        boutonCommProfil.classList.remove("boutonCommStyle2");
        boutonCommProfil.classList.add("boutonCommStyle");

        boutonCommProduct.classList.remove("boutonCommStyle");
        boutonCommProduct.classList.add("boutonCommStyle2");

        boutonCommComments.classList.remove("boutonCommStyle");
        boutonCommComments.classList.add("boutonCommStyle2");
    })






    boutonCommProduct.addEventListener("click", function(){
    profilComment.classList.remove("profilComment");
    profilComment.classList.add("invisible");

        productCommentDiv.classList.remove("invisible");
        productCommentDiv.classList.add("productCommentDiv");

        lesComms.classList.remove("lesComms");
        lesComms.classList.add("invisible");

        boutonCommProfil.classList.remove("boutonCommStyle");
        boutonCommProfil.classList.add("boutonCommStyle2");

        boutonCommProduct.classList.remove("boutonCommStyle2");
        boutonCommProduct.classList.add("boutonCommStyle");

        boutonCommComments.classList.remove("boutonCommStyle");
        boutonCommComments.classList.add("boutonCommStyle2");
    })





    boutonCommComments.addEventListener("click", function(){
    profilComment.classList.remove("profilComment");
    profilComment.classList.add("invisible");

        productCommentDiv.classList.remove("productCommentDiv");
        productCommentDiv.classList.add("invisible");

        lesComms.classList.remove("invisible");
        lesComms.classList.add("lesComms");

        boutonCommProfil.classList.remove("boutonCommStyle");
        boutonCommProfil.classList.add("boutonCommStyle2");

        boutonCommProduct.classList.remove("boutonCommStyle");
        boutonCommProduct.classList.add("boutonCommStyle2");

        boutonCommComments.classList.remove("boutonCommStyle2");
        boutonCommComments.classList.add("boutonCommStyle");
    })

</script>
