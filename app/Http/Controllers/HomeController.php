<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view("home.home",["pictureProducts" => $pictureProducts]);
    }

}
