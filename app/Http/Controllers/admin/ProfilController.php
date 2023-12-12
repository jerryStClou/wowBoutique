<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class ProfilController extends Controller
{
    //


    public function index()
    {
        //
        $user = Auth::user();
        // dd($user->name);
        $products = Product::get();
        $subCategories = SubCategory::get();
        $categories = Category::get();
        $nbrProduct = count($products);
        // dd(count($products));
        return view("admin.profil.index",[
            "products"=>$products,
            "user"=>$user,
            "nbrProduct"=>$nbrProduct,
            "categories"=>$categories,
            "subCategories"=>$subCategories
        ]);
    }

}
