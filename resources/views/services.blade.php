@extends('layouts.app')

@section('content')
    <!-- wallet -->
    <div class="wallet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="{{ asset('images/wa1.svg') }}" alt="#" /></i>
                        <h3>FOREX SIGNALS</h3>
                        <p>Subscribing to our Forex Signal plans, we also provide signals to our investors who wish to trade
                            personally.</p>
                        <p>We provide forex signal plans with probability of success ranging from 0.60 to 0.85</p>
                        <h3 style="border-style: solid;"><a href="signup.html">Subscribe to our Forex Signal</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="{{ asset('images/wa2.svg') }}" alt="#" /></i>
                        <h3>BITCOIN AND OTHER ALTCOINS INVESTMENT</h3>
                        <p>It also in our earnest desire to guide our investors on which crypto currency to invest their
                            money on.</p>
                        <h3 style="border-style: solid;"><a href="signup.html">Get Started</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="{{ asset('images/wa3.svg') }}" alt="#" /></i>
                        <h3>Forex trading account Management</h3>
                        <p>Our major concern is to trade for our investors and make sure all risk are minimized with our
                            expert analysis on trades.</p>
                        <h3 style="border-style: solid;"><a href="signup.html">Get Started</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="{{ asset('images/wa4.svg') }}" alt="#" /></i>
                        <h3>GENERAL CRYPTO CURRENCY CONSULTANCY</h3>
                        <p>There are many investors who find it hard to venture into the digital money world. It risky, but
                            with our guidance and mentorship, they are successful.</p>
                        <h3 style="border-style: solid;"><a href="signup.html">Subscribe here</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wallet -->
@endsection
