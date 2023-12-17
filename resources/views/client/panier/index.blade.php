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


@php
    foreach ($products as $product )
    {
        $tableaux[0][$product->id] =$product->quantityProduct;
        $tableaux[1][$product->id] =$product->pictureFirst;
        $quantiter = 0;
        $tableaux[2][$product->id] =$product->prix * $quantiter;
        $tableaux[3][$product->id] = 0;

    }
@endphp



<div class="ensemble">
    <div class="lePanier">
        @foreach ($panier as $panier)
        <div class="leProduit">
            <div class="imageProduit">
                <img src="/storage/{{$tableaux[1][$panier->id]}}">
            </div>

            <div class="infoProduit">
                <p class="infoStyle">{{$panier->name}}</p>
                <p class="infoStyle">{{$panier->price}}€</p>
                <p>Quantiter : {{$panier->quantity}} </p>
                {{-- <div class="quantite"> --}}
                    <form action="/panier/{{$panier->id}}" {{--class="ajoutPanier"--}} method="post">
                        @method("put")
                        @csrf
                        quantiter
                        <input type="number" name="quantityPanier" id="">
                        <button type="submit">ajouter au panier</button>
                    </form>
                {{-- </div> --}}

                <p class="infoStyle">Prix total {{$coutTotal = $panier->price*$panier->quantity}}</p>
                @php
                    $tableaux[2][$panier->id] = $coutTotal;
                    $tableaux[3][$panier->id] = $panier->quantity;
                    $tableaux[4][$panier->id] = $panier->id;
                @endphp
                <form action="/panier/{{$panier->id}}" method="post">
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
            <p class="pStyle">{{array_sum($tableaux[3])}}</p>
        </div>

        <div class="recapDiv">
            <p class="pStyle">Total somme:</p>
            <p class="pStyle">{{array_sum($tableaux[2])}}€</p>
        </div>

        <div class="recapDiv">
            <p class="pStyle">Nbr produit différent:</p>
            <p class="pStyle">{{count($tableaux[4])-1}}</p>
        </div>

        <form action="" class="valideCommande">
            <button type="submit" class="commandeStyle">Valider ma commande</button>
        </form>
        <a href="/home" class="continuerStyle">Continuer mes achats</a>
    </div>
</div>



<form action="/panier" method="post">
    @method("delete")
    @csrf
  <button class="btn btn-dark">vider</button>
</form>

@endsection
