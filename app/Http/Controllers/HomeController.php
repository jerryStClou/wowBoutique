<?php

namespace App\Http\Controllers;

// use App\Mail\contact;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function home()
    {
        $produitElec = Product::where("idCategory",2)->take(3)->get();
        $produitVetement = Product::where("idCategory","4")->inRandomOrder()->take(3)->get();
        return view("home.home",["produitVetement"=>$produitVetement,"produitElec"=>$produitElec]);
    }

    public function compte()
    {
        return view("compte.compte");
    }

}
