@extends("template.admin.produit.templateReadProduit")
@section("title")
read produit
@endsection
@section("content")
<div class="grosBloc">
    <div class="bloc1">
        <img src="/storage/{{$product->pictureFirst}}">
    </div>
    <div class="contenueBloc2">
        <div class="bloc2" id="bloc2">
            <p class="pStyle">{{$product->nameProduct}}</p>
            <p class="pStyle">{{$product->prix}}€</p>
            <p class="pStyle">{{$product->quantityProduct}}</p>
            <div class="description">
                <p>{{$product->description}}</p>
            </div>
            <!-- <form action="" class="panierStyle"> -->
                <form action="/panier" method="post" class="panierStyle">
                    @csrf
                    <input type="hidden" name="idProduct" value="{{$product->id}}">
                    <button type="submit" class="panierAjoutStyle">Ajouter aux panier</button>
                </form>
            <div class="lesBoutons">
                <button class="boutonStyle">G</button>
                <button class="boutonStyle">D</button>
                <button class="boutonStyle" id="boutonProduitSimiActiv">Produit similaire</button>
                <button class="boutonStyle" id="boutonCommActiv">Commentaire</button>
            </div>
        </div>
        <div class="invisible" id="lesCommentaires">

            <div class="boutonsCommentaires">
                <button class="commentairesBouton" id="boutonaAfficheComm">Les Commentaires</button>
                <button class="commentairesBouton2" id="boutonEritComm">Ecrire un commentaire</button>
                <button class="commentairesBouton2" id="boutonInfo">info</button>
            </div>

            <div class="sousGroupeCommentaire">
                <div class="leFameuxCommentaire" id="leFameuxCommentaire">
                    <div class="leProfil">
                        <div class="imgProfil">
                            <img src="images/6.png" alt="">
                        </div>
                        <div class="infoProfil">
                            <p>Le Pseudo</p>
                            <p>22/11/2023</p>
                            <p>5/5</p>
                        </div>
                    </div>
                    <div class="commentaireDuProfil">

                    </div>
                </div>
                <form method="" action="" class="invisible" id="ajoutCommentaire">
                    <input type="file" name="" id="ajoutImageComm">
                    <label for="ajoutImageComm" class="imageStyleform"><i class="fa-regular fa-image"></i></label>
                    <label for="ajoutImageComm" class="imageStyleform2">Choisir une photo</label>
                    <input type="text" name="" id="" placeholder="votre pseudo">
                    <textarea name="" id="" placeholder="ecrivez votre commentaire"></textarea>
                    <input type="submit" value="ajouter">
                </form>
            </div>

        </div>
        <div class="invisible" id="produitSimilaire">
            <p class="titleStyle">Produit similaire</p>
            <div class="boutonDivStyle">
                <button class="commentairesBouton2" id="boutonInfo2">info</button>
            </div>
            <div class="lesProduitCards">
                <div class="card">
                    <div class="imageCard">
                        <img src="images/7.png" alt="">
                    </div>
                    <div class="infoCard">
                        <p>Nom produit</p>
                        <p>Prix</p>
                        <form action="" method="" class="ajoutPanierStyle">
                            <button type="submit">Ajouter aux panier</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
