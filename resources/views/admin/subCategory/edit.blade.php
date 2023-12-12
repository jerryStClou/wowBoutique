@extends("template.admin.category.templateCreateCategory")
@section("title")
edit category
@endsection
@section("content")


<div class="container">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
        <h1 class="my-1">modifie ta categorie</h1>

        <form action="/subCategory/{{$subCategory->id}}" method="POST">
            @method("PUT")
            @csrf
            <div class="row mb-2">
                <label for="nomAjout">Nom Category</label>
                <input value="{{old("nameSubCategory") ?? $subCategory->nameSubCategory }}"  name="nameSubCategory" required type="text" class="form-control" id="nameSubCategory" placeholder="Enter nom">
            @error("nameSubCategory")
                <div class="alert alert-danger mt-1">{{$message}}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
</div>

@endsection
