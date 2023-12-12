<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index()
    {
        //
        $products = Product::get();
        return view("admin.profil.index",["products"=>$products]);
    }

    public function create()
    {
        //
        return view("admin.produit.create");
    }

    public function store(Request $request)
    {
        //
        $category = DB::table("categories")->orderByDesc('id')->take(1)->get();
        $attributes=$request->validate([
            "nameProduct"=>"required|min:2|max:150|unique:products,nameProduct",
            "description"=>"required",
            "prix"=>"required",
            "pictureFirst"=>"image",
            "quantityProduct" => "required",
        ]);

        // $attributes["pictureFirst"]=$request->file("pictureFirst")->store("produits");
        $attributes["pictureFirst"]=Storage::disk('public')->put('product',$request->pictureFirst);
        foreach($category as $category)
        {
            $attributes["idCategory"] = $category->id;
        }
        $user = Auth::user();
        $attributes["idUser"] = $user->id;
        Product::create($attributes);
        session()->flash("success","Le produit a bien été ajouter");

        return  redirect("/pictureProduct/create");

    }

    public function read(Product $idProduct)
    {
        //

        return view("admin.produit.read",["product" => $idProduct]);
    }

    public function edit(Product $idProduct)
    {
        //
        return view("admin.produit.edit",["product" => $idProduct]);
    }

    public function update(Request $request,Product $idProduct)
    {
        //
        // $category = DB::table("categories")->orderByDesc('id')->take(1)->get();
        $attributes=$request->validate([
            "nameProduct"=>"required|min:2|max:150|unique:products,nameProduct",
            "description"=>"required",
            "prix"=>"required",
            "pictureFirst"=>"image",
            "quantityProduct" => "required",
            "idCategory"=>"required",
            "idUser"=>"required"
        ]);

        // foreach($category as $category)
        // {
        //     $attributes["idCategory"] = $category->id;
        // }

        $productId = $idProduct->id;
        // dd($productId);

        if(isset($attributes["pictureFirst"])){
            // $attributes["pictureFirst"]=$request->file("pictureFirst")->store("produits");
            $attributes["pictureFirst"]=Storage::disk('public')->put('product',$request->pictureFirst);

        }
        //Mettre a jour dans la bdd le pays avec les nouvelles de ses attributs.
        $idProduct->update($attributes);
        session()->flash("success","Le pays a bien était modifier");
        return redirect("/allPictureProduct/$productId");


    }


    public function destroy(Product $idProduct)
    {
        //
        $idProduct->delete();
        session()->flash("success","Le pays a bien était supprimer");
        return redirect("/product");

    }




}
