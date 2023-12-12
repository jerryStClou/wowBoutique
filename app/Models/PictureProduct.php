<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PictureProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'theImage',
        'idProduct',
    ];

    public function products(){
        return $this->belongsTo(Product::class,"idProduct");
    }
}
