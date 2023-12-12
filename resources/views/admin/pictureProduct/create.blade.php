@extends("template.admin.produit.templateCreateProduit")
@section("title")
create produit image
@endsection
@section("content")


<div class="container">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="my-1">Ajoute ton produit</h1>

        <form action="/pictureProduct" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <label for="nomAjout">Nom *</label>
                <input value="{{old("theImage")}}"  name="theImage" required type="file" class="form-control" id="nom" placeholder="Enter nom">
            @error("theImage")
                <div class="alert alert-danger mt-1">{{$message}}</div>
            @enderror
            </div>


            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>


@endsection
