@extends("template.admin.category.templateCreateCategory")
@section("title")
read category
@endsection
@section("content")
<p>{{Str::ucfirst($category->id)}}</p>
<p>{{Str::ucfirst($category->nameCategory)}}</p>
@endsection
