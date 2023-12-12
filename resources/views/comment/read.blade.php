@extends("template.admin.produit.templateReadProduit")
@section("title")
read produit
@endsection
@section("content")

<p>{{$comment->theComment}}</p>
<img src="/storage/{{$comment->profilPicture}}">


@endsection

