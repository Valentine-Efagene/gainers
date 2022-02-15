@extends('layouts.app')

@section('content')
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class=" col-md-10 offset-md-1">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-6 ">
                                <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Phone number" type="type" name="Phone number">
                            </div>
                            <div class="col-md-6">
                                <textarea class="textarea" placeholder="Message" type="type"
                                    Message="Name"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                                            aria-hidden="true "></i>London, England
                                    </a>
                                </li>
                                <li> <a href="Javascript:void(0) "><i class="fa fa-phone "
                                            aria-hidden="true "></i>WhatsApp: +44 7868759514
                                    </a>
                                </li>
                                <li> <a href="Javascript:void(0) "> <i class="fa fa-envelope "
                                            aria-hidden="true "></i>support@gainersbay.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 "">
                      <div class=" Informa helpful">
                        <h3>Useful Link</h3>
                        <ul>

                            <li><a href="team.html">Team</a>
                            </li>
                            <li><a href="terms.html">Terms and Condition</a>
                            </li>
                            <li><a href="terms.html">Privacy Policies</a>
                            </li>
                            <li><a href="legal.html">Legal</a>
                            </li>
                            <li><a href="market.html">Cryptocurrency Market Updates</a>
                            </li>
                            <li><a href="#">Binance Exchange</a>
                            </li>
                            <li><a href="#">Coinbase</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="Informa ">
                        <h3>Newsletter</h3>
                        <form class="newslatter_form ">
                            <input class="ente " placeholder="Enter your email " type="text "
                                name="Enter your email ">
                            <button class="subs_btn ">Subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="copyright text_align_center ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <p>gainers bay © 2021 All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
