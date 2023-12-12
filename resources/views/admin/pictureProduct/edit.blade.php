@extends("template.admin.category.templateCreateCategory")
@section("title")
edit category
@endsection
@section("content")


<div class="container">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="my-1">modifie ta categorie</h1>

        <form action="/pictureProduct/{{$pictureProduct->id}}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="row mb-2">
                <label for="nomAjout">theImage</label>
                <input value="{{old("theImage") ?? $pictureProduct->theImage }}"  name="theImage" required type="file" class="form-control" id="nameCategory" placeholder="Enter nom">
            @error("theImage")
                <div class="alert alert-danger mt-1">{{$message}}</div>
            @enderror
            </div>

            <input type="hidden" name="idProduct" value="{{$pictureProduct->idProduct}}">

            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>

@endsection
