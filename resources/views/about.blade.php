@extends('layouts.app')

@section('content')
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
                                    <p style="text-align: justify;">The Gainers Bay is an innovative investment platform
                                        where investors or traders can invest their capital in the foreign exchange market;
                                        accessing the opportunity to gain from the market, without any initial skills in
                                        trading or idea about what Forex is all about.
                                    </p>


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img class="img_responsive" src="{{ asset('images/FOREX.jpeg') }}" alt="#" />
                                    </figure>
                                </div>
                            </div>
                            <p style="text-align: justify;" style="text-align: justify;">Our investors also have the
                                opportunity to get access to our crypto trading and analysis; Consultancy on what Crypto
                                asset to invest on, when
                                to hodl or went to take profit and invest in more assets. Our operation is simply on the
                                blockchain network. Payment and other transactions are all made with cryptocurrencies.
                            </p>
                            <hr>
                            <h3>WHY CHOOSE GAINERS BAY?

                            </h3>

                            <ul style="text-align: justify;">
                                <li>
                                    MINIMIZING INVESTORS' RISK OF TRADING
                                </li>
                                <p> With team of experts working together to analyze trades, the high risk of you going into
                                    the market and taking all trade risk is minimized.
                                    We pay our investors according to the terms of their chosen investment plan whether we
                                    gain or lost in our trades. Therefore, Our investors
                                    do not need to bother about loosing their money to the market.</p>
                                <li>
                                    BEST TRADING STRATEGY
                                </li>
                                <p>
                                    In order not to run at lost, we use the best trading strategies and analysis from our
                                    trading room to initiate trades; thus, 85% of our trades are usually successful.
                                    Check out our trading statistic <a href="statistic.html">here</a>.
                                </p>
                                <li>
                                    HIGH LEVEL PROFITABILITY
                                </li>
                                <p>
                                    Due to our expert diligency and ability to initiate trades and the right signal, the
                                    rate of successful trades is usually high and thus, our investors gets a good profit
                                    from their investment.
                                </p>
                                <li>
                                    FAST WITHDRAWAL AND HIGH SECURE AND EASY TO USE PLATFORM
                                </li>
                                <p>
                                    Upon approval of withdrawals, payment are made via cryptocurrency of choice of our
                                    investors. But our major payment cryptocurrencies are: Bitcoin, Litecoin and USDT.
                                    Our platform is secured and your personal data are not compromized or sold to any third
                                    party for any purpose whatsoever. Collection of our investors information is strictly
                                    for identification, payment and security to our investors investment.
                                </p>

                            </ul>
                            <P>Read more about our terms <a href="terms.html">Here</a>.</P>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
@endsection
