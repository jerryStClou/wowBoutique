@extends("template.admin.produit.templateCreateProduit")
@section("title")
edit comment
@endsection
@section("content")

<div class="container">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="my-1">edit ton comment</h1>

        <form action="/comment/{{$comment->id}}" method="post" enctype="multipart/form-data">
            @method("put")
            @csrf
            <div class="row mb-2">
                <label for="theComment">Nom *</label>
                <input value="{{old("theComment")?? $comment->theComment}}"  name="theComment" required type="text" class="form-control" id="nom" placeholder="Enter nom">
            @error("theComment")
                <div class="alert alert-danger mt-1">{{$message}}</div>
            @enderror
            </div>



            <div class="row mb-2">
                <label for="profilPicture">Image *</label>
                <input value="{{old("profilPicture")?? $comment->profilPicture}}"  name="profilPicture"  accept="image/*" required type="file" class="form-control" id="capital" placeholder="Enter capital">
                @error("profilPicture")
                <div class="alert alert-danger mt-1">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>


@endsection
