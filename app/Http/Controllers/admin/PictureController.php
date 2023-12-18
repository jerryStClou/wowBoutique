<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PictureProduct;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    //
    public function index()
    {
        //
        $pictureProduct = PictureProduct::get();
        return view("admin.pictureProduct.index",["pictureProduct"=>$pictureProduct]);
    }

    public function create()
    {
        //
        return view("admin.pictureProduct.create");
    }


    public function store(Request $request)
    {
        //
        $product = DB::table("products")->orderByDesc('id')->take(1)->get();
        $attributes=$request->validate([
            "theImage"=>"image",
        ]);
        $productId = 0;
        // $attributes["pictureFirst"]=$request->file("pictureFirst")->store("produits");
        $attributes["theImage"]=Storage::disk('public')->put('pictureProduct',$request->theImage);
        foreach($product as $product)
        {
            $attributes["idProduct"] = $product->id;
            $productId = $product->id;
        }
        // dd($productId);
        PictureProduct::create($attributes);
        session()->flash("success","Le produit a bien été ajouter");

        return  redirect("/profil");

    }

    public function allPictureProduit(Product $idPictureProduct)
    {
        $productId = $idPictureProduct->id;
        // dd($productId);
        $pictureProducts = PictureProduct::where("idProduct",$productId)->get();
        // foreach($pictureProducts as $pictureProduct)
        // {
        //     dd($pictureProduct);
        // }
        return view("admin.pictureProduct.all",["pictureProducts" => $pictureProducts]);

    }

    public function read(PictureProduct $idPictureProduct)
    {
        //

        return view("admin.pictureProduct.read",["pictureProduct" => $idPictureProduct]);
    }

    public function edit(PictureProduct $idPictureProduct)
    {
        //
        return view("admin.pictureProduct.edit",["pictureProduct" => $idPictureProduct]);
    }

    public function update(Request $request,PictureProduct $idPictureProduct)
    {
        //
        // $product = DB::table("products")->orderByDesc('id')->take(1)->get();
        $attributes=$request->validate([
            "theImage"=>"image",
            "idProduct"=>"required"
        ]);

        $productId = 0;
        $productId = $attributes["idProduct"];
        // dd($productId);
        // foreach($product as $product)
        // {
        //     $productId = $attributes["idProduct"];
        // }


        if(isset($attributes["theImage"])){
            // $attributes["pictureFirst"]=$request->file("pictureFirst")->store("produits");
            $attributes["theImage"]=Storage::disk('public')->put('pictureProduct',$request->theImage);

        }
        //Mettre a jour dans la bdd le pays avec les nouvelles de ses attributs.
        $idPictureProduct->update($attributes);
        session()->flash("success","Le pays a bien était modifier");
        return redirect("/profil");


    }


    public function destroy(PictureProduct $idPictureProduct)
    {
        //
        $idPictureProduct->delete();
        session()->flash("success","Le pays a bien était supprimer");
        return redirect("/pictureProduct");

    }


}
