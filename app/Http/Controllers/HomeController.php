<?php

namespace App\Http\Controllers;

// use App\Mail\contact;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function home()
    {
        $categories = Category::take(4)->get();
        $produitElec = Product::where("idCategory",2)->take(3)->get();
        $produitVetement = Product::where("idCategory","4")->inRandomOrder()->take(3)->get();
        return view("home.home",["produitVetement"=>$produitVetement,"produitElec"=>$produitElec,"categories"=>$categories]);
    }

    public function compte()
    {
        return view("compte.compte");
    }




    public function homeCateg(Category $idHomeCateg)
    {
        $categories = Category::take(4)->get();
        $productsCateg = Product::where("idCategory",$idHomeCateg->id)->get();
        // dd($productsCateg);
        return view("home.homeCateg",["categories"=>$categories,"productsCateg"=>$productsCateg]);
    }






}
