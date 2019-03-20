<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="header-group col-lg-5">
                <nav class="nav-left">
                    <ul class="menu">
                        <li>
                            <a href="/" class="header-link">
                                ACCUEIL
                            </a>
                        </li>
                        <li class="produits">
                            <a href="{{ route('frontProductIndex') }}" class="header-link">
                                PRODUITS
                            </a>
                        </li>
                        <li class="produits">
                            <a href="{{ route('contactIndex') }}" class="header-link">
                                CONTACT
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-group col-lg-2">
                <h1 class="logo">
                    <a href="/" title="Logo">
                        <img src="{{ asset('img/logo/logo.png') }}" alt="logo">
                    </a>
                </h1>
            </div>

            <div class="header-group col-lg-5">
                <nav class="nav-right">
                    <ul class="menu">
                        <li>
                            <a href="/my-account"><i class="header-link fas fa-user"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('cartIndex') }}"><i class="header-link fas fa-shopping-cart"></i></a>
                            <span class="badge" >{{Session::has ('cart') ? Session::get('cart')->totalQty : ''}}</span>
                        </li>
                        <li>
                            <a href="{{ route('adminIndex') }}"><i class="header-link fas fa-cog"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
