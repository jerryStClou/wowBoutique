<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

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
        // $category = DB::table("categories")->orderByDesc('id')->take(1)->get();
        $attributes=$request->validate([
            "nameProduct"=>"required|min:2|max:150|unique:products,nameProduct",
            "description"=>"required",
            "prix"=>"required",
            "pictureFirst"=>"image",
            "quantityProduct" => "required",
            "idCategory"=>"required"
        ]);

        // $attributes["pictureFirst"]=$request->file("pictureFirst")->store("produits");
        $attributes["pictureFirst"]=Storage::disk('public')->put('product',$request->pictureFirst);
        // foreach($category as $category)
        // {
        //     $attributes["idCategory"] = $category->id;
        // }
        $user = Auth::user();
        // dd($user);
        $attributes["idUser"] = $user->id;
        // dd($attributes);
        Product::create($attributes);
        session()->flash("success","Le produit a bien été ajouter");

        return  redirect("/profil");

    }

    public function read(Product $idProduct)
    {
        //
        $categoryId=$idProduct->idCategory;
        $comments = Comment::where("idProduct",$idProduct->id)->get();
        $productsCateg=Product::where("idCategory",$categoryId)->get();
        return view("admin.product.read",["product" => $idProduct,"comments"=>$comments,"productsCateg"=>$productsCateg]);
    }

    public function edit(Product $idProduct)
    {

        return view("admin.produit.edit",["product" => $idProduct]);
    }

    public function update(Request $request,Product $idProduct)
    {
        $attributes=$request->validate([
            "nameProduct"=>"required|min:2|max:150|unique:products,nameProduct",
            "description"=>"required",
            "prix"=>"required",
            "pictureFirst"=>"image",
            "quantityProduct" => "required",
            "idCategory"=>"required",
            "idUser"=>"required"
        ]);

        $productId = $idProduct->id;

        if(isset($attributes["pictureFirst"])){
            $attributes["pictureFirst"]=Storage::disk('public')->put('product',$request->pictureFirst);

        }
        $idProduct->update($attributes);
        session()->flash("success","Le produit a bien était modifier");
        return redirect("/profil");
    }


    public function destroy(Product $idProduct)
    {
        $idProduct->delete();
        session()->flash("success","Le produit a bien était supprimer");
        return redirect("/product");
    }




}
