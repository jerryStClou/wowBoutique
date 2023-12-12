<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function index()
    {
        //
        $categories = Category::get();
        return view("admin.category.index",["categories"=>$categories]);
    }

    public function create()
    {
        //
        return view("admin.category.create");
    }

    public function store(Request $request)
    {
        //
        $attributes=$request->validate([
            "nameCategory"=>"required|min:2|max:150|unique:categories,nameCategory",
        ]);


        Category::create($attributes);
        session()->flash("success","Le produit a bien été ajouter");

        return  redirect("/subCategory/create");

    }

    public function read(Category $idCategory)
    {
        //

        return view("admin.category.read",["category" => $idCategory]);
    }

    public function edit(Category $idCategory)
    {
        //
        return view("admin.category.edit",["category" => $idCategory]);
    }

    public function update(Request $request,Category $idCategory)
    {
        //
        $attributes=$request->validate([
            "nameCategory"=>"required|min:2|max:150|unique:categories,nameCategory",
        ]);

        $idCategory->update($attributes);
        session()->flash("success","Le pays a bien était modifier");
        return redirect("/category");


    }


    public function destroy(Category $idCategory)
    {
        //
        $idCategory->delete();
        session()->flash("success","Le pays a bien était supprimer");
        return redirect("/category");

    }

}
