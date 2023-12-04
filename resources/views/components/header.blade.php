<header class="d-flex justify-content-between align-items-center {{ $currentUrl == LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), '/') ? 'home-header' : '' }} ">
        <div class="container-xl d-flex justify-content-between align-items-center">
            <a href="/" id="logo"></a>
            <button id="burger" onclick="toggleMenu()" class="d-flex d-lg-none flex-column justify-content-between">
                <span></span>
            </button>
            <nav id="menu">
                <ul id="main-menu">
                    <li class="{{ $currentUrl == LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.about') ? 'selected' : '' }}">
                        <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.about') }}">Sobre OdourCollect</a>
                    </li>
                    <li class="{{ $currentUrl == LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.map') ? 'selected' : '' }}">
                        <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.map') }}">Mapa</a>
                    </li>
                    <li class="submenu">
                        Recursos
                        <ul>
                            <li class="{{ $currentUrl == LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.odourobservatory') ? 'selected' : '' }}">
                                <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.odourobservatory') }}">OdourObservatory</a>
                            </li>
                            <li class="{{ $currentUrl == LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.dnoses') ? 'selected' : '' }}">
                                <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.dnoses') }}">D-NOSES</a>
                            </li>
                            <li class="{{ $currentUrl == LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.sfc') ? 'selected' : '' }}">
                                <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.sfc') }}">Science for Change</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ $currentUrl == LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.blog') ? 'selected' : '' }}">
                        <a href="{{LaravelLocalization::getURLFromRouteNameTranslated(App::currentLocale(), 'routes.blog')}}">Blog</a>
                    </li>

                    @if (count($localizations) > 1)
                        
                        <li id="lang-menu" class="submenu">
                            @foreach ($localizations as $localeCode => $locale)
                                @if( $localeCode == LaravelLocalization::getCurrentLocale() ) {{$locale['native']}} @endif
                            @endforeach
                            <ul>
                            @foreach ($localizations as $localeCode => $locale)
                                @if( $localeCode != LaravelLocalization::getCurrentLocale() )
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}">{{$locale['native']}}</a> 
                                    </li>
                                @endif
                            @endforeach    
                            </ul>
                        </li>

                    @endif

                </ul>
            </nav>
        </div>
    </header>