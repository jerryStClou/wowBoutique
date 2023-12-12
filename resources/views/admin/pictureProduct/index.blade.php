@extends("template.admin.produit.templateCreateProduit")
@section("title")
picture produit
@endsection
@section("content")

@foreach ($pictureProduct as $pictureProduct )
<img src="/storage/{{$pictureProduct->theImage}}">
<a href="/pictureProduct/{{$pictureProduct->id}}/edit">modifier</a>
<a href="/pictureProduct/{{$pictureProduct->id}}">read</a>
<form action="/pictureProduct/{{$pictureProduct->id}}" method="post">
    @csrf
    @method("delete")
    <button type="submit">supprimer</button>
</form>
@endforeach

<a href="pictureProduct/create">create</a>

@endsection
