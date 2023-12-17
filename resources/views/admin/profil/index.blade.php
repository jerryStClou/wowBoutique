@extends("template.admin.profil.templateIndexProfil")
@section("title")
index produit
@endsection
@section("content")
{{-- <br><br>
<a href="/category/create" class="btn btn-info">create un produit</a>
<br><br>

@foreach ($products as $product )
<p>{{$product->nameProduct}}</p>
<p>{{$product->description}}</p>
<p>{{$product->prix}}</p>
<p>{{$product->quantityProduct}}</p>
<img src="/storage/{{$product->pictureFirst}}">
<a href="/product/{{$product->id}}/edit">modifier</a>
<form action="/product/{{$product->id}}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-danger">supprimer</button>
</form>

<form action="/panier" method="post">
    @csrf
    <input type="hidden" name="idProduct" value="{{$product->id}}">
</form>
@endforeach


<br><br>
<p>nom profil :{{$user->name}}</p>
<p>nombre de produit:{{$nbrProduct}}</p>

<br><br><br><br>
@foreach ( $categories as $category )
    <p>category :{{$category->nameCategory}}</p>
    <a href="/category/{{$category->id}}/edit">modifier</a>
    <form action="/category/{{$category->id}}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-danger">supprimer</button>
</form>
@endforeach
<br><br><br><br>



<br><br><br><br>
@foreach ($subCategories as $subCategory )
<p>sous categorie {{$subCategory->nameSubCategory}}</p>
    <a href="/subCategory/{{$subCategory->id}}/edit">modifier</a>
    <form action="/subCategory/{{$subCategory->id}}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-danger">supprimer</button>
</form>
@endforeach
<br><br><br><br> --}}


<div class="ensemble">

    <div class="infoProfil">
        <p>nom profil :{{$user->name}}</p>
        <p>nombre de produit:{{$nbrProduct}}</p>
    </div>
    <div class="lesBoutons">
        <a href="/product/create"  class="modifierProduit">créer produit</a>
        <a href="/category/create"  class="modifierCategorie">créer categorie</a>
        <a href="/subCategory/create" class="creerProduit">Créer sous catégorie</a>
    </div>

</div>
<br>
<div class="BoutonsGroupe">
    <button id="buttonProduct" class="boutonStyleProfil2">Produit</button>
    <button id="buttonCategory" class="boutonStyleProfil">category</button>
    <button id="buttonSubCategory" class="boutonStyleProfil">subCategory</button>
    <button id="buttonComment" class="boutonStyleProfil">comment</button>

</div>
<br>
<div class="lesProduits">
    <div class="lesCards" id="lesCards">
        @foreach ($products as $product )
        <div class="card">
            <div class="imageCard">
                <img src="/storage/{{$product->pictureFirst}}">
            </div>
            <div class="infoProduit">
                <p>Nom : {{$product->nameProduct}}</p>
                <p>Prix:  {{$product->prix}}</p>
                <p>Quantite:  {{$product->quantityProduct}}</p>
                <div class="boutonsCard">
                    <a href="/product/{{$product->id}}/edit" class="">modifier</a>
                    <form action="/product/{{$product->id}}" method="post" class="">
                        @csrf
                        @method("delete")
                        <button type="submit">Supprimer</button>
                    </form>

                </div>

            </div>
        </div>
        @endforeach
    </div>


    <div class="invisible" id="lesCategories">
        @foreach ($categories as $category)
        <div class="infoCategory">
            <p>Nom : {{$category->nameCategory}}</p>
            <div class="boutonsCard">
                <a href="/category/{{$category->id}}/edit" class="">modifier</a>
                <form action="/category/{{$category->id}}" method="post" class="">
                    @csrf
                    @method("delete")
                    <button type="submit">Supprimer</button>
                </form>

            </div>
        </div>
        @endforeach
    </div>


    <div class="invisible" id="lesSubCategories">
        @foreach ($subCategories as $subCategory)
        <div class="infoCategory">
            <p>Nom : {{$subCategory->nameSubCategory}}</p>
            <div class="boutonsCard">
                <a href="/subCategory/{{$subCategory->id}}/edit" class="">modifier</a>
                <form action="/subCategory/{{$subCategory->id}}" method="post" class="">
                    @csrf
                    @method("delete")
                    <button type="submit">Supprimer</button>
                </form>

            </div>
        </div>
        @endforeach
    </div>

    @php
    foreach ($comments as $comment )
    {
        $tableaux[0][$comment->id] =$comment->id;
    }
    // dd($tableaux);
@endphp


    <div class="invisible" id="comments">
        <div class="boutonsComments">
            <button class="boutonCommStyle" id="boutonCommProfil">Profil</button>
            <button class="boutonCommStyle2" id="boutonCommProduct">products</button>
            <button class="boutonCommStyle2" id="boutonCommComments">comments</button>
        </div>
        @foreach ($comments as $comment )
        <div class="profilComment" id="profilComment">
            <div class="imgProfilComment">
                <img src="/storage/{{$comment->profilPicture}}">
            </div>
            <div class="infoCommentProfil">
                <p>Nom: {{$comment->name}}</p>
                <p>Nombre de commentaire {{count($tableaux[0])}}</p>
            </div>
        </div>
        @endforeach
        <div class="invisible" id="productCommentDiv">
            @foreach ($comments as $comment )
            <div class="imgCommProduct">
                <img src="/storage/{{$comment->pictureFirst}}">
            </div>
            @endforeach
        </div>
        <div class="invisible" id="lesComms">
            @foreach ($comments as $comment )
            <div class="theCommentDiv">
                <p>{{$comment->theComment}}</p>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
