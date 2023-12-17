{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends("template.admin.profil.templateIndexProfil")
@section("title")
index produit
@endsection
@section("content")


<div class="ensemble">

    <div class="infoProfil">
        <p>nom profil :{{$user->name}}</p>
    </div>
    <div class="lesBoutons">
        <a href="/product/create"  class="modifierProduit">créer produit</a>
        <a href="/category/create"  class="modifierCategorie">créer categorie</a>
        <a href="/subCategory/create" class="creerProduit">Créer sous catégorie</a>
    </div>

</div>
<br>
<div class="BoutonsGroupe">
    <button id="buttonProduct" class="boutonStyleProfil2">Produit</button>
    <button id="buttonCategory" class="boutonStyleProfil">category</button>
    <button id="buttonSubCategory" class="boutonStyleProfil">subCategory</button>
    <button id="buttonComment" class="boutonStyleProfil">comment</button>

</div>
<br>



@endsection
