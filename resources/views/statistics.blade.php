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
                                    @if ($latest_date)
                                        As at
                                        {{ \Carbon\Carbon::createFromTimestamp(strtotime($latest_date))->format('d-m-Y') }}
                                    @endif
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('../admin/asset/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/apexcharts-setting.js') }}"></script>
    <!--Charts end-->
@endsection
