<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PictureController;
use App\Http\Controllers\admin\subCategoryController;
use App\Http\Controllers\admin\ProfilController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PanierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('pageVierge');
});

// Route::get("/urlContact", [HomeController::class, "formulaireContact"]);
// Route::post("/urlContact", [HomeController::class, "traitementContact"]);



Route::get("/home", [HomeController::class, "home"]);
Route::get("/home/compte", [HomeController::class, "compte"]);
Route::get("/home/categ/{idHomeCateg}", [HomeController::class, "homeCateg"]);



// -----------------------------------------Route Contact -----------------------------------------------------------
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');



// ----------------------------------------Route Category -------------------------------------------------------

Route::get('/category', [CategoryController::class, "index"]);

Route::get('/category/create', [CategoryController::class, "create"]);

Route::post('/category', [CategoryController::class, "store"]);

Route::get('/category/allCateg', [CategoryController::class, "allCateg"]);

Route::get('/category/allCategP', [CategoryController::class, "allCategP"]);

Route::get('/category/{idCategory}', [CategoryController::class, "read"]);

Route::get('/category/{idCategory}/edit', [CategoryController::class, "edit"]);

Route::put('/category/{idCategory}', [CategoryController::class, "update"]);

Route::delete('/category/{idCategory}', [CategoryController::class, "destroy"]);




// ---------------------------------Route Product--------------------------------------------------
Route::get('/product', [ProductController::class, "index"]);

Route::get('/product/create', [ProductController::class, "create"]);

Route::post('/product', [ProductController::class, "store"]);

Route::get('/product/{idProduct}', [ProductController::class, "read"]);

Route::get('/product/{idProduct}/edit', [ProductController::class, "edit"]);

Route::put('/product/{idProduct}', [ProductController::class, "update"]);

Route::delete('/product/{idProduct}', [ProductController::class, "destroy"]);




// ---------------------------------Route PictureProduct--------------------------------------------------
Route::get('/pictureProduct', [PictureController::class, "index"]);

Route::get('/pictureProduct/create', [PictureController::class, "create"]);

Route::post('/pictureProduct', [PictureController::class, "store"]);

Route::get('/allPictureProduct/{idPictureProduct}', [PictureController::class, "allPictureProduit"]);

Route::get('/pictureProduct/{idPictureProduct}', [PictureController::class, "read"]);

Route::get('/pictureProduct/{idPictureProduct}/edit', [PictureController::class, "edit"]);

Route::put('/pictureProduct/{idPictureProduct}', [PictureController::class, "update"]);

Route::delete('/pictureProduct/{idPictureProduct}', [PictureController::class, "destroy"]);





// ---------------------------------Route subCategory--------------------------------------------------
Route::get('/subCategory', [SubCategoryController::class, "index"]);

Route::get('/subCategory/create', [SubCategoryController::class, "create"]);

Route::post('/subCategory', [SubCategoryController::class, "store"]);

Route::get('/subCategory/{idSubCategory}', [SubCategoryController::class, "read"]);

Route::get('/subCategory/{idSubCategory}/edit', [SubCategoryController::class, "edit"]);

Route::put('/subCategory/{idSubCategory}', [SubCategoryController::class, "update"]);

Route::delete('/subCategory/{idSubCategory}', [SubCategoryController::class, "destroy"]);




Route::middleware("auth")->group(
    function () {
// ---------------------------------Route Comment--------------------------------------------------
Route::get('/comment', [CommentController::class, "index"]);

Route::get('/comment/create', [CommentController::class, "create"]);

Route::post('/comment', [CommentController::class, "store"]);

Route::get('/comment/{idComment}', [CommentController::class, "read"]);

Route::get('/comment/{idComment}/edit', [CommentController::class, "edit"]);

Route::put('/comment/{idComment}', [CommentController::class, "update"]);

Route::delete('/comment/{idComment}', [CommentController::class, "destroy"]);


    }
);




// ---------------------------------Route Panier--------------------------------------------------
Route::get('/panier', [PanierController::class, "index"]);
Route::post('/panier', [PanierController::class, "store"]);
Route::put('/panier/{idPanier}', [PanierController::class, "update"]);
Route::delete('/panier/{idPanier}', [PanierController::class, "destroy"]);
Route::delete("/panier", [PanierController::class, "vider"]);

// ---------------------------------Route Profil--------------------------------------------------
Route::middleware("EstAdmin")->group(
    function () {
     Route::get('/profil', [ProfilController::class, "index"]);

});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/dashboard', [ProfilController::class, "dashboard"])->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
