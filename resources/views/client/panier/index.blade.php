@extends("template.client.panier.templatePanier")
@section("title")
panier
@endsection
@section("content")

{{--
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
<button class="btn btn-dark">vider</button> --}}




<div class="ensemble">
    <div class="lePanier">
        @foreach ($panier as $panier)
        <div class="leProduit">
            <div class="imageProduit">
                <img src="/storage/{{$tableaux[0][$panier->id]}}">
            </div>

            <div class="infoProduit">
                <p class="infoStyle">{{$panier->name}}</p>
                <p class="infoStyle">{{$panier->price}}€</p>

                <div class="quantite">
                    <form action="/panier/{{$panier->id}}" class="ajoutPanier" method="post">
                        @method("put")
                        @csrf
                        quantiter
                        <input type="number" name="quantityPanier" id="">
                        <button type="submit">ajouter au panier</button>
                    </form>
                </div>

                <p class="infoStyle">Prix Quantiter</p>
                <form action="/panier/" method="post">
                    @method("delete")
                    @csrf
                    <button type="submit" class="SupprimerStyle">Supprimer</button>
                </form>
            </div>

        </div>
        @endforeach
    </div>
    <div class="recapitulatif">
        <p class="titreStyle">Recapitulatif de votre panier</p>
        <div class="recapDiv">
            <p class="pStyle">Total produit:</p>
            <p class="pStyle">2</p>
        </div>

        <div class="recapDiv">
            <p class="pStyle">Total somme:</p>
            <p class="pStyle">34€</p>
        </div>
        <form action="" class="valideCommande">
            <button type="submit" class="commandeStyle">Valider ma commande</button>
        </form>
        <a href="" class="continuerStyle">Continuer mes achats</a>
    </div>
</div>


@endsection
