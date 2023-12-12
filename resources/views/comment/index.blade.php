@extends("template.admin.category.templateCreateCategory")
@section("title")
index category
@endsection
@section("content")

@foreach ($comments as $comment )

<p>{{Str::ucfirst($comment->id)}}</p>
<p>{{Str::ucfirst($comment->theComment)}}</p>
<img src="/storage/{{$comment->profilPicture}}">
<a href="/comment/{{$comment->id}}/edit" class="btn btn-warning">edit</a>
<a href="/comment/{{$comment->id}}" class="btn btn-dark">read</a>
<form action="/comment/{{$comment->id}}" method="post">
    @csrf
   @method("delete")
<button type="submit" id="InputPanier" class="btn btn-danger">Supprimer</button>
</form>

@endforeach
<br>
<a href="/comment/create">Create</a>
<br>


@endsection
