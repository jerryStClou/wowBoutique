<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameProduct',
        'description',
        'prix',
        'pictureFirst',
        'quantityProduct',
        'idCategory',
        'idUser'
    ];


    public function calcNote()
    {
        $moyenne = 0;
        if (count($this->notes) != 0) {
            foreach ($this->notes as $uneNote) {
                $moyenne += $uneNote->pivot->vote;
            }
            $moyenne = $moyenne / count($this->notes);
        }
        else{
            $moyenne=2.5;
        }
        return $moyenne;
    }

    // Un produit ne peut avoir qu'une seule catgerie donc il faut mettre belongsTo()

    public function categories(){
    return $this->belongsTo(Category::class,'idCategory');
    }
    public function user(){
        return $this->belongsTo(User::class,'idUser');
    }
    public function comments(){
        return $this->hasMany(Comment::class,"idProduct");
    }

    //Produit est en relation avec note une classe associative alors on doit mettre belongsToMany()
    public function notes(){
        return $this->belongsToMany(User::class,"notes","idUser","idProduct")->using(Note::class)->withPivot("theNote")->withTimestamps();
    }


}
