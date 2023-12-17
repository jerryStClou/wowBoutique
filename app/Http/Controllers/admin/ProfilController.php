<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Comment;

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
        $comments = Comment::join('products', 'comments.idProduct', '=', 'products.id')
            ->join('users', 'comments.idUser', '=', 'users.id')
            ->select('nameProduct', 'pictureFirst', 'name', 'theComment', 'profilPicture', 'comments.id')
            ->get();
            // dd($comments);
        $nbrProduct = count($products);
        // dd(count($products));
        return view("admin.profil.index",[
            "products"=>$products,
            "user"=>$user,
            "nbrProduct"=>$nbrProduct,
            "categories"=>$categories,
            "subCategories"=>$subCategories,
            "comments"=>$comments
        ]);
    }

    public function dashboard()
    {
        // return view("dashboard",["user"=>$user]);
        return redirect("/home");
    }

}
