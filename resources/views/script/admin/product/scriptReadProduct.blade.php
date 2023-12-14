<script>
let boutonProduitSimiActiv = document.querySelector("#boutonProduitSimiActiv");

let boutonCommActiv = document.querySelector("#boutonCommActiv");

let bloc2 = document.querySelector("#bloc2");

let lesCommentaires = document.querySelector("#lesCommentaires");

let produitSimilaire = document.querySelector("#produitSimilaire");

let boutonaAfficheComm = document.querySelector("#boutonaAfficheComm");
let boutonEritComm = document.querySelector("#boutonEritComm");

let ajoutCommentaire = document.querySelector("#ajoutCommentaire");

let leFameuxCommentaire = document.querySelector("#leFameuxCommentaire");

let boutonInfo = document.querySelector("#boutonInfo");

let boutonInfo2 = document.querySelector("#boutonInfo2");


boutonCommActiv.addEventListener("click",function(){
    bloc2.className = "invisible";
    lesCommentaires.className = "lesCommentaires";

})



boutonProduitSimiActiv.addEventListener("click",function(){
    bloc2.className = "invisible";
    produitSimilaire.className = "produitSimilaire"
})


boutonaAfficheComm.addEventListener("click",function(){

        ajoutCommentaire.className = "invisible";
        leFameuxCommentaire.className = "leFameuxCommentaire"
        boutonaAfficheComm.className = "commentairesBouton"
        boutonEritComm.className = "commentairesBouton2";

})

boutonEritComm.addEventListener("click",function(){
    leFameuxCommentaire.className = "invisible";
    ajoutCommentaire.className = "ajoutCommentaire";
    boutonEritComm.className = "commentairesBouton";
    boutonaAfficheComm.className = "commentairesBouton2";
})


// boutonEritComm.addEventListener("click",function(){
//     leFameuxCommentaire.className = "invisible";
//     ajoutCommentaire.className = "ajoutCommentaire";
//     boutonEritComm.className = "commentairesBouton";
//     boutonaAfficheComm.className = "commentairesBouton2"

// })


boutonInfo.addEventListener("click",function(){
    bloc2.className = "bloc2";
    lesCommentaires.className = "invisible";

})


boutonInfo2.addEventListener("click",function(){
    bloc2.className = "bloc2";
    produitSimilaire.className = "invisible"

})






// ------------------------------------------------Responsive--------------------------------------------------

let boutonProduitSimiActiv2 = document.querySelector("#boutonProduitSimiActiv2");

let boutonCommActiv2 = document.querySelector("#boutonCommActiv2");

let bloc3 = document.querySelector("#bloc3");

let lesCommentaires2 = document.querySelector("#lesCommentaires2");

let produitSimilaire2 = document.querySelector("#produitSimilaire2");

let boutonaAfficheComm2 = document.querySelector("#boutonaAfficheComm2");
let boutonEritComm2 = document.querySelector("#boutonEritComm2");

let ajoutCommentaire2 = document.querySelector("#ajoutCommentaire2");

let leFameuxCommentaire2 = document.querySelector("#leFameuxCommentaire2");

let boutonInfo3 = document.querySelector("#boutonInfo3");

let boutonInfo4 = document.querySelector("#boutonInfo4");


boutonCommActiv2.addEventListener("click",function(){
    bloc3.className = "invisible";
    lesCommentaires2.className = "lesCommentaires";

})



boutonProduitSimiActiv2.addEventListener("click",function(){
    bloc3.className = "invisible";
    produitSimilaire2.className = "produitSimilaire"
})


boutonaAfficheComm2.addEventListener("click",function(){

        ajoutCommentaire2.className = "invisible";
        leFameuxCommentaire2.className = "leFameuxCommentaire"
        boutonaAfficheComm2.className = "commentairesBouton"
        boutonEritComm2.className = "commentairesBouton2";

})

boutonEritComm2.addEventListener("click",function(){
    leFameuxCommentaire2.className = "invisible";
    ajoutCommentaire2.className = "ajoutCommentaire";
    boutonEritComm2.className = "commentairesBouton";
    boutonaAfficheComm2.className = "commentairesBouton2";
})


// boutonEritComm.addEventListener("click",function(){
//     leFameuxCommentaire.className = "invisible";
//     ajoutCommentaire.className = "ajoutCommentaire";
//     boutonEritComm.className = "commentairesBouton";
//     boutonaAfficheComm.className = "commentairesBouton2"

// })


boutonInfo3.addEventListener("click",function(){
    bloc3.className = "bloc3";
    lesCommentaires2.className = "invisible";

})


boutonInfo4.addEventListener("click",function(){
    bloc3.className = "bloc3";
    produitSimilaire2.className = "invisible"

})




</script>
