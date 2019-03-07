<header>
    <div class="container-fluid">
        <a href="/" class="logo" title="Logo"><img src="{{ asset('img/logo/logo.png') }}" alt="logo"></a>
        <h1>
            <a href="/" class="header-texte">LARAVEL E-COMMERCE</a>
        </h1>
        <nav class="nav">
            <ul class="menu">
                <li class="produits">

                    <a href="{{ route('frontProductIndex') }}" class="header-texte">PRODUITS</a>

                </li>

                <li>
                    <a href="/my-account"><i class="fas fa-user"></i></a>
                </li>

                <li>
                    <a href="{{ route('cartIndex') }}"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li>
                    <a href="{{ route('adminIndex') }}"><i class="fas fa-cog"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
