@extends("template.admin.category.templateCreateCategory")
@section("title")
index category
@endsection
@section("content")

@foreach ($subCategories as $Subcategory )

<p>{{Str::ucfirst($Subcategory->id)}}</p>
<p>{{Str::ucfirst($Subcategory->nameSubCategory)}}</p>
<a href="/subCategory/{{$Subcategory->id}}/edit" class="btn btn-warning">edit</a>
<a href="/subCategory/{{$Subcategory->id}}" class="btn btn-dark">read</a>
<form action="/subCategory/{{$Subcategory->id}}" method="post">
    @csrf
   @method("delete")
<button type="submit" id="InputPanier" class="btn btn-danger">Supprimer</button>
</form>

@endforeach
<br>
<a href="/subCategory/create">Create</a>
<br>


@endsection
