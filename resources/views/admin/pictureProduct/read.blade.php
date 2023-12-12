@extends("template.admin.produit.templateCreateProduit")
@section("title")
picture read
@endsection
@section("content")

<p>{{Str::ucfirst($pictureProduct->id)}}</p>
<p>{{Str::ucfirst($pictureProduct->theImage)}}</p>

@endsection
