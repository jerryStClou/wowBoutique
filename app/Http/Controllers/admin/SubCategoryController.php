<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    //


    public function index()
    {
        //
        $subCategories = SubCategory::get();
        return view("admin.subCategory.index",["subCategories"=>$subCategories]);
    }


    public function create()
    {
        //
        return view("admin.Subcategory.create");
    }


    public function store(Request $request)
    {
        //
        // $category = DB::table("categories")->orderByDesc('id')->take(1)->get();
        $attributes=$request->validate([
            "nameSubCategory"=>"required|min:2|max:150|unique:sub_categories,nameSubCategory",
            "idCategory"=>"required"
        ]);
        // foreach($category as $category)
        // {
        //     $attributes["idCategory"] = $category->id;
        // }
        // dd($attributes);
        SubCategory::create($attributes);
        session()->flash("success","Le produit a bien été ajouter");

        return  redirect("/category/allCategP");

    }

    public function read(SubCategory $idSubCategory)
    {
        //

        return view("admin.subCategory.read",["subCategory" => $idSubCategory]);
    }

    public function edit(SubCategory $idSubCategory)
    {
        //
        return view("admin.subCategory.edit",["subCategory" => $idSubCategory]);
    }

    public function update(Request $request,SubCategory $idSubCategory)
    {
        //
        $category = DB::table("categories")->orderByDesc('id')->take(1)->get();
        $attributes=$request->validate([
            "nameSubCategory"=>"required|min:2|max:150|unique:sub_categories,nameSubCategory",
        ]);
        foreach($category as $category)
        {
            $attributes["idCategory"] = $category->id;
        }
        $idSubCategory->update($attributes);
        session()->flash("success","Le pays a bien était modifier");
        return redirect("/subCategory");


    }



    public function destroy(SubCategory $idSubCategory)
    {
        //
        $idSubCategory->delete();
        session()->flash("success","Le pays a bien était supprimer");
        return redirect("/subCategory");

    }


}
