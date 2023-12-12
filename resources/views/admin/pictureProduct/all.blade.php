@extends("template.admin.produit.templateIndexProduit")
@section("title")
all picture produit
@endsection
@section("content")

@foreach ($pictureProducts as $pictureProduct )
<br><br>
<img src="/storage/{{$pictureProduct->theImage}}">
<a href="/pictureProduct/{{$pictureProduct->id}}/edit">modifier</a>
<form action="/pictureProduct/{{$pictureProduct->id}}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-danger">supprimer</button>
</form>
<br><br>

@endforeach

<br><br><br>
<a href="/pictureProduct/create" class="btn btn-dark">create</a>
<br><br><br>
<a href="/profil">finish</a>
@endsection
