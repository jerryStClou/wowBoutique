@extends("template.admin.category.templateCreateCategory")
@section("title")
create category
@endsection
@section("content")

<div class="container">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="my-1">Ajoute ton produit</h1>

        <form action="/category" method="post">
            @csrf
            <div class="row mb-2">
                <label for="nomAjout">Nom Category</label>
                <input value="{{old("nameCategory")}}"  name="nameCategory" required type="text" class="form-control" id="nameCategory" placeholder="Enter nom">
            @error("nameCategory")
                <div class="alert alert-danger mt-1">{{$message}}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>

@endsection
