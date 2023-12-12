@extends("template.admin.category.templateCreateCategory")
@section("title")
index category
@endsection
@section("content")

@foreach ($categories as $category )

<p>{{Str::ucfirst($category->id)}}</p>
<p>{{Str::ucfirst($category->nameCategory)}}</p>
<a href="/category/{{$category->id}}/edit">edit</a>
<a href="/category/{{$category->id}}">read</a>
<form action="/category/{{$category->id}}" method="post">
    @csrf
   @method("delete")
<button type="submit" id="InputPanier" class="btn btn-danger">Supprimer</button>
</form>

@endforeach
<br>
<a href="/category/create">Create</a>
<br>


@endsection
