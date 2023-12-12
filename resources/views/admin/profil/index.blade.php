@extends("template.admin.produit.templateIndexProduit")
@section("title")
index produit
@endsection
@section("content")
<br><br>
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
<br><br><br><br>
@endsection
