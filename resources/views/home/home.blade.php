@extends("home.templateHome")
@section("title")
home
@endsection
@section("content")
<br><br>
<div class="description">
    <p>
        ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
       voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
       quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
       labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
       laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
       molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
       </p>
</div>

<br>
<br>
<br>

<div class="lesCardCateg">
    @foreach ( $produitVetement as $produitVetement )
    <div class="cardCateg">
        <div class="imgCardCateg">
            <img src="/storage/{{$produitVetement->pictureFirst}}">
        </div>
        <div class="infoCarCateg">
            <p>{{$produitVetement->nameProduct}}</p>
            <p>{{$produitVetement->prix}}</p>
            <p>{{$produitVetement->quantityProduct}}</p>
            <a href="/product/{{$produitVetement->id}}">{{__('message.seeProduct')}}</a>
        </div>
    </div>
    @endforeach
</div>

<br><br>



<div class="lesCardCateg">
    @foreach ( $produitElec as $produitElec )
    <div class="cardCateg">
        <div class="imgCardCateg">
            <img src="/storage/{{$produitElec->pictureFirst}}">
        </div>
        <div class="infoCarCateg">
            <p>{{$produitElec->nameProduct}}</p>
            <p>{{$produitElec->prix}}</p>
            <p>{{$produitElec->quantityProduct}}</p>
            <a href="/product/{{$produitElec->id}}">{{__('message.seeProduct')}}</a>
        </div>
    </div>
    @endforeach
</div>
<br><br><br>
@endsection
