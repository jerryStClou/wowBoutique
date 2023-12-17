<header id="header">
    <nav>
        <div class="liens1Div">
            <a href="/home" class="logoStyle"><img src="{{ asset('imageDeposer/logo.png') }}"></a>
        </div>
        <form action="" method="" class="recherche1">
            <input type="text" name="" id="" placeholder="{{__('message.searchProduct')}}">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="liens2Div">
            @guest
            <a href="/home/compte">
                <i class="fa-solid fa-user"></i>
                Compte
            </a>
            @endguest
            @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">logout</button>
            </form>
            @endauth

            <a href="/panier">Panier
                {{-- <i class="fa-solid fa-basket-shopping"></i> --}}
                {{-- <p class="nbrPanier">5</p> --}}
            </a>
            <a href="/contact">Contact</a>
            <a href="">
                {{ Config::get('languages')[App::getLocale()] }}
            </a>
            <select name="" id="">
                @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                   <option value="{{$language}}"><a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a></option>
                @endif
                @endforeach

            </select>
            <div class="boutonsNavBar" id="boutonsNavBar">
                <div class="trait"></div>
                <div class="trait"></div>
                <div class="trait"></div>
            </div>

        </div>
        <form action="" method="" class="recherche2">
            <input type="text" name="" id="" placeholder="{{__('input.navBarInput') }}">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </nav>
    <div class="nav2">
        @foreach ($categories as $category)
           <a href="/home/categ/{{$category->id}}" id="lien1">{{$category->nameCategory}}</a>
        @endforeach
    </div>
    <!-- <div class="invisible" id="tousLesSousCateg1">
        <div class="sousCateg">
            <a href="" class="lienSousCateg">Gateaux</a>
            <a href="" class="lienSousCateg">cookie</a>
        </div>
    </div> -->






</header>

<div class="invisible" id="boutonApparitionNav">
    <div class="trait2"></div>
    <div class="trait2"></div>
    <div class="trait2"></div>
</div>
