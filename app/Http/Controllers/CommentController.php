<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;

class CommentController extends Controller
{
    //

    public function index()
    {
        //
        $comments = Comment::get();
        return view("comment.index",["comments"=>$comments]);

    }

    public function create()
    {
        //
        return view("comment.create");
    }


    public function store(Request $request)
    {
        //
        $attributes=$request->validate([
            "theComment"=>"required|min:2|max:150|unique:comments,theComment",
            "profilPicture"=>"image",
            "idProduct"=>"required"
        ]);

        // $attributes["pictureFirst"]=$request->file("pictureFirst")->store("produits");
        $attributes["profilPicture"]=Storage::disk('public')->put('commentaire',$request->profilPicture);
        // $utilisateur = auth()->user();
        // dd($utilisateur->id);
        $attributes["idUser"] = auth()->user()->id;
        $productId=$request->idProduct;
        // dd($attributes);
        Comment::create($attributes);
        session()->flash("success","Le comment a bien été ajouter");

        return  redirect("/product/$productId");

    }

    public function read(Comment $idComment)
    {
        //

        return view("comment.read",["comment" => $idComment]);
    }


    public function edit(Comment $idComment)
    {
        //
        return view("comment.edit",["comment" => $idComment]);
    }


    public function update(Request $request,Comment $idComment)
    {
        //
        $products = DB::table("products")->orderByDesc('id')->take(1)->get();
        $attributes=$request->validate([
            "theComment"=>"required|min:2|max:150|unique:comments,theComment",
            "profilPicture"=>"image",
        ]);
        foreach($products as $products)
        {
            $attributes["idProduct"] = $products->id;
        }
        $attributes["idUser"] = auth()->user()->id;

        if(isset($attributes["profilPicture"])){
            // $attributes["pictureFirst"]=$request->file("pictureFirst")->store("produits");
            $attributes["profilPicture"]=Storage::disk('public')->put('commentaire',$request->profilPicture);

        }
        //Mettre a jour dans la bdd le pays avec les nouvelles de ses attributs.
        $idComment->update($attributes);
        session()->flash("success","Le comment à bien été modifier");
        return redirect("/comment");

    }



    public function destroy(Comment $idComment)
    {
        //
        $idComment->delete();
        session()->flash("success","Le comment a bien était supprimer");
        return redirect("/comment");

    }


}


