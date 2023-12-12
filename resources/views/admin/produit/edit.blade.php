@extends("template.admin.produit.templateEdit")
@section("title")
edit produit
@endsection
@section("content")


<div class="container">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="my-1">Ajoute ton produit</h1>

        <form action="/product/{{$product->id}}" method="post" enctype="multipart/form-data">
            @method("put")
            @csrf
            <div class="row mb-2">
                <label for="nomAjout">Nom *</label>
                <input value="{{old("nameProduct")?? $product->nameProduct}}"  name="nameProduct" required type="text" class="form-control" id="nom" placeholder="Enter nom">
            @error("nameProduct")
                <div class="alert alert-danger mt-1">{{$message}}</div>
            @enderror
            </div>

            <div class="row mb-2">
                <label for="nomAjout">Description *</label>
                <textarea name="description" value="{{old("description")?? $product->description}}"></textarea>
            @error("description")
                <div class="alert alert-danger mt-1">{{$message}}</div>
            @enderror
            </div>

            <div class="row mb-2">
                <label for="prix">Prix *</label>
                <input value="{{old("prix")?? $product->prix}}"  name="prix" required type="text" class="form-control" id="region" placeholder="Enter le prix">
            @error("prix")
                <div class="alert alert-danger mt-1">{{$message}}</div>
            @enderror
            </div>

            <div class="row mb-2">
                <label for="pictureFirst">Image *</label>
                <input value="{{old("pictureFirst")?? $product->pictureFirst}}"  name="pictureFirst"  accept="image/*" required type="file" class="form-control" id="capital" placeholder="Enter capital">
                @error("pictureFirst")
                <div class="alert alert-danger mt-1">{{$message}}</div>
                @enderror
            </div>



            <div class="row mb-2">
                <label for="categorieAjout">quantityProduct</label>
                <input value="{{old("quantityProduct")?? $product->quantityProduct}}"  name="quantityProduct"  type="number" class="" id="categorieAjout" placeholder="Enter votre categorie">
                @error("quantityProduct")
                <div class="alert alert-danger mt-1">{{$message}}</div>
                @enderror
            </div>
            <input type="hidden" name="idCategory" value="{{$product->idCategory}}">
            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>

@endsection
