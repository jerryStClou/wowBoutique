@extends("template.home.templateHomeCateg")
@section("title")
home
@endsection
@section("content")
<div class="lesCards">
    @foreach ( $productsCateg as $productCateg)
    <div class="card">
        <div class="imageCard">
            <img src="/storage/{{$productCateg->pictureFirst}}">
        </div>
        <div class="infoCard">
            <p>Nom: {{$productCateg->nameProduct}}</p>
            <p>Prix: {{$productCateg->prix}}</p>
            <form action="/panier" method="post">
                @csrf
                <input type="hidden" name="idProduct" value="{{$productCateg->id}}">
                <button type="submit">Ajouter aux panier</button>
            </form>
        </div>
    </div>
    @endforeach

</div>

@endsection
