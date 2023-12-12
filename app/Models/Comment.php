<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'theComment',
        'profilPicture',
        'idUser',
        'idProduct'
    ];
    public function users(){
        return $this->belongsTo(User::class,"idUser");
    }

    public function products(){
        return $this->belongsTo(Product::class,"idProduct");
    }
}
