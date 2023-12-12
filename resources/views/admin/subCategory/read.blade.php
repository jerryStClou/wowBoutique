@extends("template.admin.category.templateCreateCategory")
@section("title")
read sub category
@endsection
@section("content")
<p>{{Str::ucfirst($subCategory->id)}}</p>
<p>{{Str::ucfirst($subCategory->nameSubCategory)}}</p>
@endsection
