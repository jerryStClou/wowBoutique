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
                @foreach ($comments as $comment)
                <div class="leFameuxCommentaire" id="leFameuxCommentaire">
                    <div class="leProfil">
                        <div class="imgProfil">
                            <img src="/storage/{{$comment->profilPicture}}">
                        </div>
                        <div class="infoProfil">
                            <p>Le Pseudo</p>
                            <p>{{$comment->created_at}}</p>
                            <p>5/5</p>
                        </div>
                    </div>
                    <div class="commentaireDuProfil">
                        <p>{{$comment->theComment}}</p>
                    </div>
                </div>
                @endforeach
                <form  action="/comment" method="post" class="invisible" id="ajoutCommentaire" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="profilPicture" id="ajoutImageComm">
                    <label for="ajoutImageComm" class="imageStyleform"><i class="fa-regular fa-image"></i></label>
                    <label for="ajoutImageComm" class="imageStyleform2">Choisir une photo</label>
                    {{-- <input type="text" name="" id="" placeholder="votre pseudo"> --}}
                    <textarea name="theComment" id="" placeholder="ecrivez votre commentaire"></textarea>
                    <input type="hidden" name="idProduct" value="{{$product->id}}">
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
                @foreach ( $productsCateg as $productCateg)
                <div class="card">
                    <div class="imageCard">
                        <img src="/storage/{{$productCateg->pictureFirst}}">
                    </div>
                    <div class="infoCard">
                        <p>{{$productCateg->nameProduct}}</p>
                        <p>{{$productCateg->prix}}</p>
                        <form action="/panier" method="post" class="ajoutPanierStyle">
                            @csrf
                            <input type="hidden" name="idProduct" value="{{$productCateg->id}}">
                            <button type="submit">Ajouter aux panier</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>




<div class="contenuBloc3" id="">
    <div class="bloc3" id="bloc3">
        <p class="pStyle">{{$product->nameProduct}}</p>
        <p class="pStyle">{{$product->prix}}€</p>
        <p class="pStyle">{{$product->quantityProduct}}</p>
        <div class="description">
            <p>{{$product->description}}</p>
        </div>
        <form action="/panier" method="post" class="panierStyle">
            @csrf
            <input type="hidden" name="idProduct" value="{{$product->id}}">
            <button type="submit" class="panierAjoutStyle">Ajouter aux panier</button>
        </form>
        <div class="lesBoutons">
            <button class="boutonStyle">G</button>
            <button class="boutonStyle">D</button>
            <button class="boutonStyle" id="boutonProduitSimiActiv2">Blog similaire</button>
            <button class="boutonStyle" id="boutonCommActiv2">Commentaire</button>
        </div>
    </div>
    <div class="invisible" id="lesCommentaires2">

        <div class="boutonsCommentaires">
            <button class="commentairesBouton" id="boutonaAfficheComm2">Les Commentaires</button>
            <button class="commentairesBouton2" id="boutonEritComm2">Ecrire un commentaire</button>
            <button class="commentairesBouton2" id="boutonInfo3">info</button>
        </div>

        <div class="sousGroupeCommentaire">
            <div class="lecommentaire" id="leFameuxCommentaire">
                @foreach ($comments as $comment)
                <div class="leFameuxCommentaire" id="">
                    <div class="leProfil">
                        <div class="imgProfil">
                            <img src="/storage/{{$comment->profilPicture}}">
                        </div>
                        <div class="infoProfil">
                            <p>Le Pseudo</p>
                            <p>{{$comment->created_at}}</p>
                            <p>5/5</p>
                        </div>
                    </div>
                    <div class="commentaireDuProfil">
                        <p>{{$comment->theComment}}</p>
                    </div>
                </div>
                @endforeach
            </div>

                <form  action="/comment" method="post" class="invisible" id="ajoutCommentaire" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="profilPicture" id="ajoutImageComm">
                    <label for="ajoutImageComm" class="imageStyleform"><i class="fa-regular fa-image"></i></label>
                    <label for="ajoutImageComm" class="imageStyleform2">Choisir une photo</label>
                    {{-- <input type="text" name="" id="" placeholder="votre pseudo"> --}}
                    <textarea name="theComment" id="" placeholder="ecrivez votre commentaire"></textarea>
                    <input type="hidden" name="idProduct" value="{{$product->id}}">
                    <input type="submit" value="ajouter">
                </form>
        </div>

    </div>
    <div class="invisible" id="produitSimilaire2">
        <p class="titleStyle">Produit similaire</p>
        <div class="boutonDivStyle">
            <button class="commentairesBouton3" id="boutonInfo4">info</button>
        </div>
        <div class="lesProduitCards">
            @foreach ( $productsCateg as $productCateg)
                <div class="card">
                    <div class="imageCard">
                        <img src="/storage/{{$productCateg->pictureFirst}}">
                    </div>
                    <div class="infoCard">
                        <p>{{$productCateg->nameProduct}}</p>
                        <p>{{$productCateg->prix}}</p>
                        <form action="/panier" method="post" class="ajoutPanierStyle">
                            @csrf
                            <input type="hidden" name="idProduct" value="{{$productCateg->id}}">
                            <button type="submit">Ajouter aux panier</button>
                        </form>
                    </div>
                </div>
                @endforeach

        </div>
    </div>

</div>


@endsection
