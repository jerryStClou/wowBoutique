@extends("template.admin.category.templateCreateCategory")
@section("title")
index category
@endsection
@section("content")


@foreach ($panier as $panier)
    <p>{{$panier->name}}</p>
    <p>{{$panier->price}}</p>
    <p>Quantiter {{$panier->quantity}}</p>
    <img src="/storage/{{$tableaux[0][$panier->id]}}">
    <form action="/panier/{{$panier->id}}" method="post">
        @method("put")
        @csrf
        <input type="number" name="quantityPanier" id="" placeholder="ajouter une quantiter" min="1" value="{{$panier->quantity}}">
        <button type="submit" class="btn btn-success">ajouter</button>
    </form>
    <form action="/panier/{{$panier->id}}" method="post">
        @method("delete")
        @csrf
    <button class="btn btn-danger">Supprimer</button>
    </form>

<br><br>
@endforeach
<form action="/panier/" method="post">
    @method("delete")
    @csrf
<button class="btn btn-dark">vider</button>

@endsection
