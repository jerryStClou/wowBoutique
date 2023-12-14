<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PanierController extends Controller
{
    //
    public function index()
    {
        //$panier recuperer tout les informations dans CartFacade
        $panier = CartFacade::getContent();
        $products = Product::get();
        // dd($products[(count($products))-1]["pictureFirst"]);
        $tableaux = [["image"]];
        for($i;$i<count($products);$i++)
        {
            $tableaux[$i][$products[(count($products))-1]["id"]] = $products[(count($products))-1]["pictureFirst"];
            dd($tableaux[0]);
        }




    return view("client.panier.index",["panier" => $panier,"tableaux"=>$tableaux]);
    }

    public function store(Request $request)
    {


        // $attributs = $request->validate([
        //     "idProduct" => "required|exists:products,id",
        // ]);
        // $product = Product::where("id",$request->idProduct)->get();
        $product = Product::where('id', '=', $request->idProduct)->get();
        foreach($product as $product)
        {
            // dd($product->id);
            CartFacade::add(array(
                'id' => $product->id,
                'name' => $product->nameProduct,
                'price' => $product->prix,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => $product
            ));
        }
        return redirect("/panier");
    }


    public function update(Request $request, Product $idPanier)
    {
        $request->validate([
            "quantityPanier" => "required|numeric|min:0|max:20"
        ]);

        CartFacade::update($idPanier->id, ["quantity" => [
            "value" => $request->quantityPanier,
            "relative" => false
        ]]);
        session()->flash("success","Modification de votre panier");
        return redirect("/panier");
    }


    public function destroy(Product $idPanier){
        CartFacade::remove($idPanier->id);
        session()->flash("success","Une destination supprimer");
        return redirect("/panier");
    }


    public function vider(){
        CartFacade::clear();
        session()->flash("success","Votre panier est vider");
        return redirect("/panier");
    }

}
