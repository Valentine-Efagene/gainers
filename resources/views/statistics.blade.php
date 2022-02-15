@extends('layouts.app')

@section('content')
    <!--Charts-->
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>CHECK OUT OUR TRADING STATISTICS</h4>
                            </div>
                        </div><br><br>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <h4 class="btn btn-primary" role="button">
                                    As at April 2021
                                </h4>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white pd-20 card-box mb-30">
                    <h4 class="h4 text-blue">Yearly Trading Success</h4>
                    <div id="chart1"></div>
                    <!--This chart is in the javascript located in apexcharts in case you need to work on the data-->
                </div><br><br>
            </div>
        </div>
    </div>
    <!--Charts end-->
@endsection
