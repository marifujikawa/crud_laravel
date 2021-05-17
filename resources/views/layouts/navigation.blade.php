<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Oi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Produtos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach (\App\Models\Product::all() as $product)
                        <a class="dropdown-item" href="/product/{{ $product->id }}">{{ $product->name }}</a>
                    @endforeach

                    <div class="dropdown-divider"></div>

                    <a type="button" class="dropdown-item" href="/product">Produtos</a>

                </div>
            </li>
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Acessórios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach (\App\Models\Acessory::all() as $acessory)
                        <a class="dropdown-item" href="/acessory/{{ $acessory->id }}">{{ $acessory->name }}</a>
                    @endforeach

                    <div class="dropdown-divider"></div>

                    <a type="button" class="dropdown-item" href="/acessory">Acessórios</a>

                </div>
            </li>
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sorvetes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach (\App\Models\IceCream::all() as $icecream)
                        <a class="dropdown-item" href="/icecream/{{ $icecream->id }}">{{ $icecream->name }}</a>
                    @endforeach

                    <div class="dropdown-divider"></div>

                    <a type="button" class="dropdown-item" href="/icecream">Sorvetes</a>

                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item" href="#">Adicionar Produto</button>
                    </form>
                </div>
            </li>
        </form>
    </div>
</nav>
