@extends("template.admin.produit.templateIndexProduit")
@section("title")
index produit
@endsection
@section("content")


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
    <button type="submit" class="btn btn-warning">ajouter aux panier</button>
</form>
@endforeach

<a href="/product/create" class="btn btn-info">create</a>

<br>
<p>nom profil :{{$user->name}}</p>
<p>nombre de produit:{{$nbrProduct}}</p>
@endsection
