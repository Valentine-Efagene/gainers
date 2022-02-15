@extends('layouts.app')

@section('content')
    <!-- testimonial -->
    <div class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="border_testi">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage text_align_center">
                                    <h2>STOCKS MARKET</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row d_flex">
                            <div class="col-md-10 offset-md-1">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/"
                                            rel="noopener" target="_blank"><span class="blue-text">Financial
                                                Markets</span></a> by TradingView</div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                                        {
                                            "width": "1200",
                                            "height": "700",
                                            "symbolsGroups": [{
                                                    "name": "Indices",
                                                    "originalName": "Indices",
                                                    "symbols": [{
                                                            "name": "FOREXCOM:SPXUSD",
                                                            "displayName": "S&P 500"
                                                        },
                                                        {
                                                            "name": "FOREXCOM:NSXUSD",
                                                            "displayName": "US 100"
                                                        },
                                                        {
                                                            "name": "FOREXCOM:DJI",
                                                            "displayName": "Dow 30"
                                                        },
                                                        {
                                                            "name": "INDEX:NKY",
                                                            "displayName": "Nikkei 225"
                                                        },
                                                        {
                                                            "name": "INDEX:DEU40",
                                                            "displayName": "DAX Index"
                                                        },
                                                        {
                                                            "name": "FOREXCOM:UKXGBP",
                                                            "displayName": "UK 100"
                                                        }
                                                    ]
                                                },
                                                {
                                                    "name": "Futures",
                                                    "originalName": "Futures",
                                                    "symbols": [{
                                                            "name": "CME_MINI:ES1!",
                                                            "displayName": "S&P 500"
                                                        },
                                                        {
                                                            "name": "CME:6E1!",
                                                            "displayName": "Euro"
                                                        },
                                                        {
                                                            "name": "COMEX:GC1!",
                                                            "displayName": "Gold"
                                                        },
                                                        {
                                                            "name": "NYMEX:CL1!",
                                                            "displayName": "Crude Oil"
                                                        },
                                                        {
                                                            "name": "NYMEX:NG1!",
                                                            "displayName": "Natural Gas"
                                                        },
                                                        {
                                                            "name": "CBOT:ZC1!",
                                                            "displayName": "Corn"
                                                        }
                                                    ]
                                                },
                                                {
                                                    "name": "Bonds",
                                                    "originalName": "Bonds",
                                                    "symbols": [{
                                                            "name": "CME:GE1!",
                                                            "displayName": "Eurodollar"
                                                        },
                                                        {
                                                            "name": "CBOT:ZB1!",
                                                            "displayName": "T-Bond"
                                                        },
                                                        {
                                                            "name": "CBOT:UB1!",
                                                            "displayName": "Ultra T-Bond"
                                                        },
                                                        {
                                                            "name": "EUREX:FGBL1!",
                                                            "displayName": "Euro Bund"
                                                        },
                                                        {
                                                            "name": "EUREX:FBTP1!",
                                                            "displayName": "Euro BTP"
                                                        },
                                                        {
                                                            "name": "EUREX:FGBM1!",
                                                            "displayName": "Euro BOBL"
                                                        }
                                                    ]
                                                },
                                                {
                                                    "name": "Forex",
                                                    "originalName": "Forex",
                                                    "symbols": [{
                                                            "name": "FX:EURUSD"
                                                        },
                                                        {
                                                            "name": "FX:GBPUSD"
                                                        },
                                                        {
                                                            "name": "FX:USDJPY"
                                                        },
                                                        {
                                                            "name": "FX:USDCHF"
                                                        },
                                                        {
                                                            "name": "FX:AUDUSD"
                                                        },
                                                        {
                                                            "name": "FX:USDCAD"
                                                        }
                                                    ]
                                                }
                                            ],
                                            "showSymbolLogo": true,
                                            "colorTheme": "light",
                                            "isTransparent": false,
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
