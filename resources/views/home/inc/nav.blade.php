<div id="mainmenu-area">
    <div class="header-area header7 header-absolute header-6 header-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 align-self-center w-50">
                    <a href="{{ route('home.index') }}" class="header-logo">
                        <img src="{{ asset('assets/home/image/logo2.png') }}" alt="" class="logo-1">
                        <img src="{{ asset('assets/home/image/logo.png') }}" alt="" class="logo-2">
                    </a>
                </div>
                <div class="col-lg-7 align-self-center w-50 t-right">
                    <button class="toggle">
                        <span></span>
                    </button>
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="{{ route('home.index') }}">Home +</a>
                                    <ul>
                                        <li><a class="nav-link" href="{{ route('home.sobre') }}">Sobre a
                                                Exôdo</a></li>
                                        <li>
                                            <a href="{{ route('home.funciona') }}">Como funciona</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.seguranca') }}">Segurança</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.vantagens') }}">Vantagens</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.encontre') }}">Encontre um escritório</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.trabalhe') }}">Trabalhe conosco</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.ouvidoria') }}">Ouvidoria</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="#">Aprenda +</a>
                                    <ul>
                                        {{-- <li><a href="{{ route('home.lucas') }}" class="active">Lucas</a></li> --}}
                                        <li><a href="{{ route('home.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('home.artigos') }}">Artigos</a></li>
                                        <li><a href="{{ route('home.analises') }}">Análises</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Produtos +</a>
                                    <ul>
                                        <li><a href="">Bot Exôdo</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('home.contatos') }}">Atendimento</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}">Minha conta</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 align-self-center">
                    <div class="header-leg">
                        <img src="{{ asset('assets/home/image/bra.png') }}" alt="">
                        <select>
                            <option>BRA</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>