@extends('layouts.app')

@section('content')
    <div class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="border_testi">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage text_align_center">
                                    <h2>CRYPTOCURRENCY MARKET</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row d_flex">
                            <div class="col-md-10 offset-md-1">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"><a
                                            href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/"
                                            rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency
                                                Markets</span></a> by TradingView</div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                        {
                                            "width": "1200",
                                            "height": "700",
                                            "defaultColumn": "overview",
                                            "screener_type": "crypto_mkt",
                                            "displayCurrency": "USD",
                                            "colorTheme": "light",
                                            "locale": "en"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonial -->
@endsection
