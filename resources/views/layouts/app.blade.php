<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/app.js" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Theo --}}
    <!-- basic -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <!-- site metas -->
    <title>GAINERS BAY</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @if (Route::currentRouteName() != 'home' && Route::currentRouteName() != 'index')
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
    @endif

    @if (Route::currentRouteName() != 'statistics')
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
    @endif

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="" /></div>
    </div>
    <!-- end loader -->
    @if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'Register')
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                href="{{ route('home') }}">Home</a>
            <a class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                href="{{ route('about') }}">About</a>
            <a class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}"
                href="{{ route('services') }}">Services</a>
            <a class="{{ Route::currentRouteName() == 'crypto_market' ? 'active' : '' }}"
                href="{{ route('market') }}">Crypto
                Market</a>
            <a class="{{ Route::currentRouteName() == 'stock_market' ? 'active' : '' }}"
                href="{{ route('stock') }}">Stock
                Market</a>
            <a class="{{ Route::currentRouteName() == 'statistics' ? 'active' : '' }}"
                href="{{ route('statistics') }}">Statistics</a>
            <a class="{{ Route::currentRouteName() == 'mining' ? 'active' : '' }}"
                href="{{ route('mining') }}">Mining</a>
            <a class="{{ Route::currentRouteName() == 'faq' ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
            <a class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"
                href="{{ route('contact') }}">Contact</a>
            @if (Auth::guard()->check())
                <a class="{{ Route::currentRouteName() == 'logout' ? 'active' : '' }}"
                    href="{{ url('/logout') }}">Logout</a>
                <a class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                    href="{{ route('user.dashboard') }}">My Dashboard</a>
            @else
                <a class="{{ request()->segment(1) == 'login' ? 'active' : '' }}"
                    href="{{ url('/login') }}">Login</a>
            @endif
            @if (Auth::guard('admin')->check())
                <a class="{{ Route::currentRouteName() == 'admin/dashboard' ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                <a class="{{ request()->segment(1) == 'logout' ? 'active' : '' }}"
                    href="{{ route('admin.logout') }}">Log Out Admin</a>
            @endif
        </div>
    @endif
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <div class="logo">
                            @if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'Register')
                                <a href="{{ route('home') }}">Gainers Bay</a>
                            @else
                                <a href="{{ route('home') }}">Back To Home Page</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <ul class="social_icon text_align_right d_none">
                            <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                            <span style="color:aliceblue">Open Hours: Mon-Fri: 9am -5pm GMT</span>
                            <li><span style="color:aliceblue">Call: {{ env('PHONE_NO') }}</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            {{-- <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user"
                                        aria-hidden="true"></i></a></li>
                            <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search"
                                        style="cursor: pointer;" aria-hidden="true"></i></a> </li> --}}
                            @if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'Register')
                                <li>
                                    <button class="openbtn" onclick="openNav()"><img
                                            src="{{ asset('images/menu_btn.png') }}"></button>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright">
            <a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"></a>
        </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols";
                [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    },
                    {
                        "description": "Gold",
                        "proName": "TVC:GOLD"
                    },
                    {
                        "description": "Bitcoin",
                        "proName": "COINBASE:BTCUSD"
                    },
                    {
                        "description": "Apple Inc.",
                        "proName": "NASDAQ:AAPL"
                    },
                    {
                        "description": "Binance",
                        "proName": "BINANCE:BNBUSDT"
                    },
                    {
                        "description": "Solana",
                        "proName": "BINANCE:SOLUSDT"
                    },
                    {
                        "description": "Mana",
                        "proName": "BINANCE:MANAUSDT"
                    },
                    {
                        "description": "QQQ",
                        "proName": "NASDAQ:QQQ"
                    },
                    {
                        "description": "Shiba inu",
                        "proName": "BINANCE:SHIBUSDT"
                    },
                    {
                        "description": "Luna",
                        "proName": "BINANCE:LUNAUSDT"
                    }
                ],
                "showSymbolLogo";
                true,
                "colorTheme";
                "light",
                "isTransparent";
                false,
                "displayMode";
                "adaptive",
                "locale";
                "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

    {{-- Main content --}}
    @yield('content')

    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="Informa conta ">
                            <h3>Contact Us</h3>
                            <ul>
                                <li> <a href="Javascript:void(0) "> <i class="fa fa-map-marker "
                                            aria-hidden="true "></i>{{ env('LOCATION') }}
                                    </a>
                                </li>
                                <li> <a href="Javascript:void(0) "><i class="fa fa-phone "
                                            aria-hidden="true "></i>WhatsApp: {{ env('PHONE_NO') }}
                                    </a>
                                </li>
                                <li> <a href="Javascript:void(0) "> <i class="fa fa-envelope "
                                            aria-hidden="true "></i>{{ env('SUPPORT_EMAIL') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="Informa helpful">
                            <h3>Useful Link</h3>
                            <ul>

                                <li><a href="{{ route('team') }}">Team</a>
                                </li>
                                <li><a href="{{ route('mining') }}">Mining</a>
                                </li>
                                <li><a href="{{ route('terms') }}">Terms and Condition</a>
                                </li>
                                <li><a href="{{ route('terms') }}">Privacy Policies</a>
                                </li>
                                <li><a href="{{ route('terms') }}">Legal</a>
                                </li>
                                <li><a href="{{ route('market') }}">Cryptocurrency Market Updates</a>
                                </li>
                                <li><a href="https://accounts.binance.com/en/register">Binance Exchange</a>
                                </li>
                                <li><a href="https://www.coinbase.com/signup">Coinbase</a>
                                </li>
                                <li><a href="https://www.coinmama.com/signup">Coinmama</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class="Informa ">
                            <h3>Newsletter</h3>
                            <form class="newslatter_form ">
                                <input class="ente " placeholder="Enter your email " type="text"
                                    name="Enter your email">
                                <button class="subs_btn">Subscribe</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="copyright text_align_center">
                    <div class="container ">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="copyright text-center text-sm text-muted text-lg-left">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>,
                                    All Right Reserve <i class="fa fa-heart"></i>
                                    <a href="{{ route('home') }}" class="font-weight-bold">Gainers Bay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/622249941ffac05b1d7cfee0/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
