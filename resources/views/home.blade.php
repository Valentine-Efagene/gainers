@extends('layouts.app')

@section('content')
    <!-- start slider section -->
    <div id="top_section" class=" banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="{{ asset('images/c.png') }}"
                                                            alt="GAINERS BAY" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Earning passively and regularly</h1>
                                                    <p>Helping you trade on the Foreign Exchange market risk free.
                                                    </p>
                                                    <a class="register" href="{{ route('register') }}">Create Account
                                                    </a>
                                                    <a class="login" href="{{ route('login') }}">Login
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive"
                                                            src="{{ asset('images/about2.png') }}" alt="#" />
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Crypto Trading and Account Management</h1>
                                                    <p>Giving personal guide on which Crypto Assets to invest on at the
                                                        right time.
                                                    </p>
                                                    <a class="register" href="{{ route('register') }}">Create Account</a>
                                                    <a class="login" href="{{ route('login') }}">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive"
                                                            src="{{ asset('images/stock.png') }}" alt="#" />
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Stock Investment</h1>
                                                    <p>With list of our choice of stock, you can chose to invest into
                                                        company stocks across U.S and the world.
                                                    </p>
                                                    <a class="register" href="{{ route('register') }}">Create Account</a>
                                                    <a class="login" href="{{ route('login') }}">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive"
                                                            src="{{ asset('images/bonus.png') }}" alt="#" />
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Sign Up Bonus</h1>
                                                    <p>Get Bonus up to 500 Dollar when you sign up and Invest
                                                    </p>
                                                    <a class="register" href="{{ route('register') }}">Create Account</a>
                                                    <a class="login" href="{{ route('login') }}">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive"
                                                            src="{{ asset('images/invest2.png') }}" alt="#" />
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1> You are a step away from earning extra with a little investment
                                                    </h1>
                                                    <p>Our Investment plans are as popular demands with the best and sincere
                                                        ROI
                                                    </p>
                                                    <a class="register" href="{{ route('register') }}">Create Account</a>
                                                    <a class="login" href="{{ route('login') }}">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
    <!-- wallet -->
    <div class="wallet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="{{ asset('images/wa1.svg') }}" alt="#" /></i>
                        <h3>FOREX SIGNALS</h3>
                        <p>Subscribing to our Forex Signal plans, we also provide signals to our investors who wish to trade
                            personally.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="{{ asset('images/wa2.svg') }}" alt="#" /></i>
                        <h3>BITCOIN AND OTHER ALTCOINS INVESTMENT</h3>
                        <p>It also in our earnest desire to guide our investors on which crypto currency to invest their
                            money on.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="{{ asset('images/wa3.svg') }}" alt="#" /></i>
                        <h3>Forex trading, Stocks Investment and account Management</h3>
                        <p>Our major concern is to trade for our investors and make sure all risk are minimized with our
                            expert analysis on trades.
                            Get a Share into the Stock market; investing in the future</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="{{ asset('images/wa4.svg') }}" alt="#" /></i>
                        <h3>GENERAL CRYPTO CURRENCY CONSULTANCY</h3>
                        <p>There are many investors who find it hard to venture into the digital money world. It risky, but
                            with our guidance and mentorship, they are successful.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wallet -->

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div id="tradingview_1b7da"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE"
                rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Chart</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget({
                "width": 1500,
                "height": 700,
                "symbol": "BINANCE:BTCUSDT",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "container_id": "tradingview_1b7da"
            });
        </script>
    </div>
    <!-- TradingView Widget END -->

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_border">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="titlepage text_align_left">
                                    <h2>About Us</h2>
                                </div>
                                <div class="about_text">
                                    <p>GAINERS BAY is a forex trading account-managing and crypto currencies investment
                                        platform. Giving Investors the best ROI and guidance on crypto trading...</p>
                                    <p>We gain on the bull market as well as on the bear market!</p>
                                    <a class="read_more" href="{{ route('about') }}">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img class="img_responsive" src="{{ asset('images/bulls.png') }}"
                                            alt="gainers bay" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    
    <!-- Recent Deposits -->
    <div id="about" class="about">
        <div class="container">
            <div class="titlepage text_align_center my-5">
                <h2>RECENT DEPOSITS</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                            <table class="table table-striped table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Amount</th>
                                  </tr>
                                </thead>
                                @if ($recent_deposits)
                                <tbody>
                                    @foreach ($recent_deposits as $recent_deposit)
                                    <tr>
                                        <th scope="col">{{$recent_deposit['name']}}</th>
                                        <th scope="col">{{$recent_deposit['payment_method']}}</th>
                                        $<th scope="col">{{$recent_deposit['amount']}}</th>
                                      </tr>
                                    @endforeach
                                </tbody>
                                @endif
                              </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end Deposits -->
    
    <!-- Recent Withdrawals -->
    <div id="about" class="about">
        <div class="container">
            <div class="titlepage text_align_center my-5">
                <h2>RECENT WITHDRAWALS</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                            <table class="table table-striped table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Amount</th>
                                  </tr>
                                </thead>
                                @if ($recent_withdrawals)
                                <tbody>
                                    @foreach ($recent_withdrawals as $recent_withdrawal)
                                    <tr>
                                        <th scope="col">{{$recent_withdrawal['name']}}</th>
                                        <th scope="col">{{$recent_withdrawal['payment_method']}}</th>
                                        <th scope="col">${{$recent_withdrawal['amount']}}</th>
                                      </tr>
                                    @endforeach
                                </tbody>
                                @endif
                              </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end Deposits -->

    <!-- Investment Plans -->
    <div class="works">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>INVESTMENT PLANS</h2>
                    </div>

                    <div class="wallet">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div id="wa_hover" class="wallet_box text_align_center">
                                        <i><img src="{{ asset('images/wa1.svg') }}" alt="#" /></i>
                                        <h3>BASIC</h3>
                                        <p>The Basic plan has an investment capital of $500 to $1000 and ROI of 4X within
                                            the Period of 7 days.</p>
                                        <h3 style="border-style: solid;"><a href="{{ route('register') }}">Get
                                                Started</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="wa_hover" class="wallet_box text_align_center">
                                        <i><img src="{{ asset('images/wa2.svg') }}" alt="#" /></i>
                                        <h3>BRONZE</h3>
                                        <p>The Bronze plan has an investment capital of $1001 to $2000 and ROI of 6X within
                                            the Period of 7 days.</p>
                                        <h3 style="border-style: solid;"><a href="{{ route('register') }}">Get
                                                Started</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="wa_hover" class="wallet_box text_align_center">
                                        <i><img src="{{ asset('images/wa3.svg') }}" alt="#" /></i>
                                        <h3>SILVER</h3>
                                        <p>The Silver Plan has an investment capital of $2001 to $3000 and ROI of 8x within
                                            the Period of 7 days.</p>
                                        <h3 style="border-style: solid;"><a href="{{ route('register') }}">Get
                                                Started</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="wa_hover" class="wallet_box text_align_center">
                                        <i><img src="{{ asset('images/wa4.svg') }}" alt="#" /></i>
                                        <h3>DIAMOND</h3>
                                        <p>The Diamond Plan has an investment capital of $3001 to $5000 and ROI of 8x within
                                            the Period of 9 days.</p>
                                        <h3 style="border-style: solid;"><a href="{{ route('register') }}">Get
                                                Started</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="wa_hover" class="wallet_box text_align_center">
                                        <i><img src="{{ asset('images/wa4.svg') }}" alt="#" /></i>
                                        <h3>PREMIUM</h3>
                                        <p>The PREMIUM Plan has an investment capital of $5001 to investor's choice and ROI
                                            of 12x within the Period of 10 days.</p>
                                        <h3 style="border-style: solid;"><a href="{{ route('register') }}">Get
                                                Started</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="wa_hover" class="wallet_box text_align_center">
                                        <i><img src="{{ asset('images/wa4.svg') }}" alt="#" /></i>
                                        <h3>CRYPTO</h3>
                                        <p>The Crypto Plan has an investment capital of $1000 to $50,000 and ROI of 14x
                                            within the Period of 21 days.</p>
                                        <h3 style="border-style: solid;"><a href="{{ route('register') }}">Get
                                                Started</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div id="wa_hover" class="wallet_box text_align_center">
                                        <i><img src="{{ asset('images/wa4.svg') }}" alt="#" /></i>
                                        <h3>STOCKS</h3>
                                        <p>The Stock market Plan has an investment capital of $1000 to $50,000 and ROI of
                                            14x within the Period of 6 months.</p>
                                        <h3 style="border-style: solid;"><a href="{{ route('register') }}">Get
                                                Started</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Investment plans -->
    <!-- testimonial -->
    <div class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="border_testi">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage text_align_center">
                                    <h2>Testimonial</h2>
                                    <p>Please submit a reiew to review@gainersbay.com if you wish that we add your review to
                                        the list of reviews. Thanks</p>
                                </div>
                            </div>
                        </div>
                        <div class="row d_flex">
                            <div class="col-md-10 offset-md-1">
                                <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#testimo" data-slide-to="0" class="active"></li>
                                        <li data-target="#testimo" data-slide-to="1"></li>
                                        <li data-target="#testimo" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="{{ asset('images/otter.jpg') }}"
                                                                        alt="#" /></i>
                                                                <h3>Philip</h3>
                                                                <span>London</span>
                                                                <img src="{{ asset('images/icon.png') }}" alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>Thanks to Chris for Trading for me. I will like to
                                                                    recommend to anyone who would like to earn alongside
                                                                    their
                                                                    regular job to invest. It helps a long way. Thumps UP!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="{{ asset('images/woman1.jpg') }}"
                                                                        alt="#" /></i>
                                                                <h3>Rosa Nuenez</h3>
                                                                <span>Chile</span>
                                                                <img src="{{ asset('images/icon.png') }}" alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>Hola! I was never use to investing in forex or any form
                                                                    of online investment until I saw Gainers Bau on
                                                                    Twitter about investing in a $500 plan. I thought it was
                                                                    a bit unrealistic to invest in forex with $500 and make
                                                                    good money out of it.
                                                                    However,
                                                                    I was glad when I saw the Email sent that my crypto
                                                                    wallet has been creditted with over $3000. It a lot on
                                                                    my side.
                                                                    I trust doubted gainers bay at first but got proven
                                                                    wrong. I recommend you try it out.
                                                                    I investing more soon! Thanks GAINERS BAY!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="{{ asset('images/clint.jpg') }}"
                                                                        alt="#" /></i>
                                                                <h3>Jesse</h3>
                                                                <span>LA, United States</span>
                                                                <img src="{{ asset('images/icon.png') }}" alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>Eventually, I can confidently invest in a legit platform
                                                                    and relax. Thanks for the first payment.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="{{ asset('images/guy1.jpg') }}"
                                                                        alt="#" /></i>
                                                                <h3>Aahil</h3>
                                                                <span>India</span>
                                                                <img src="{{ asset('images/icon.png') }}" alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>It is interesting and heart warming being able to pay
                                                                    one's bill without much stress. Thanks Gainers Bay for
                                                                    keeping to your word!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonial -->
@endsection
