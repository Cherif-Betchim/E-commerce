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
                        <li class="produits dropdown">
                            <a href="#" class="header-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                PRODUITS
                            </a>
                            <div class="dropdown-menu">
                                @php
                                $categories = App\Category::all();
                                @endphp
                                @foreach($categories as $category)
                                    <a class="dropdown-item" href="{{ route('frontCategoryShow', ['category' => $category]) }}">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('frontProductIndex') }}">Tous les produits</a>
                            </div>
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

                        </li>
                        <li>
                            <a href="{{ route('cartIndex') }}" class="header-link"><i class="fas fa-shopping-cart"></i></a>
                            <span class="badge" >{{Session::has ('cart') ? Session::get('cart')->totalQty : ''}}</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="header-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user"></i> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @auth
                                    <a class="dropdown-item" href="/my-account">{{ Auth::user()->name }}</a>
                                    <div class="dropdown-divider"></div>
                                @endauth
                                @guest
                                    <a class="dropdown-item" href="{{ route('login') }}">Se connecter</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Créer un compte</a>
                                @endguest
                                @auth
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endauth
                            </div>
                        </li>
                        @auth
                            <li>
                                <a href="{{ route('adminIndex') }}" class="header-link"><i class="fas fa-cog"></i></a>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
