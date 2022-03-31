@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">BALANCE</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $balance }}
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ACTIVE EQUITY</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $active_equity }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ACTIVE PROFIT</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $active_profit }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">TOTAL WITHDRAWAL</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $total_withdrawal }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">Crypto Converter</p>

                                    <!-- Crypto Converter ⚡ Widget -->
                                    <crypto-converter-widget shadow symbol live background-color="#383a59"
                                        border-radius="0.60rem" fiat="united-states-dollar" crypto="bitcoin" amount="1"
                                        decimal-places="2"></crypto-converter-widget>
                                    <a href="https://currencyrate.today/" target="_blank"
                                        rel="noopener">CurrencyRate.Today</a>
                                    <script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script>
                                    <!-- /Crypto Converter ⚡ Widget -->


                                    <!--Space for Crypto calculator-->
                                </div>
                            </div>
                            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                <div class="bg-gradient-primary border-radius-lg h-100">
                                    <p class="mb-1 pt-2 text-bold">Calculator</p>

                                    <!--Space for Calculator-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card h-100 p-3">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                        style="background-image: url('{{ 'asset/dashboard/img/logo-ct.png' }}')">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">Your Accounts</h5>
                            <p class="text-white">Balance: <i>Your Accoount Balance is your total capital and earnings
                                    from expired plans. This is the only withdrawable Amount
                                    on your account.
                                </i></p>
                            <p class="text-white">Active Equity: <i>This is total of the most recent amount invested in
                                    all currenct active plans. It can not be withdrawn until the
                                    current program expired and hence it is added to the Balance after expiration of the
                                    plan alongside the profit generated from it.
                                </i></p>
                            <p class="text-white">Active Profit: <i>This is the current profit on a running plan. It is
                                    added to the Balance once the plan expires.
                                </i></p>
                            <p class="text-white">Withdrawal: <i>Total amount that has been withdrawn from your Balance
                                    Account.
                                </i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Traders Chart and Statistics</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">Traders Statistics are gotten from the numbers of
                                        trades they manage and the percentage of success on every trades. </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Traders Name</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Investors</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Your
                                            Trader/Manager</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Average ROI</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Success Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($traders)
                                        @foreach ($traders as $trader)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $trader->name }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        @if ($trader->user)
                                                            <p>{{ $trader->user->count() }}</p>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        @if (Auth::user() && Auth::user()->trader)
                                                            @if ($trader->id == Auth::user()->trader->id)
                                                                <p>Your Trader</p>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold">{{ $trader->roi }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="progress-wrapper w-75 mx-auto">
                                                        <div class="progress-info">
                                                            <div class="progress-percentage">
                                                                <span
                                                                    class="text-xs font-weight-bold">{{ $trader->success_rate }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info w-100" role="progressbar"
                                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <h6>Your Last 5 Transactions activities on your account</h6>

                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side">
                            @isset($transactions)
                                @foreach ($transactions as $transaction)
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="ni ni-bell-55 text-success text-gradient"></i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">
                                                @if ($transaction->type == 'WITHDRAWAL')
                                                    {{ Str::title($transaction->type) }} of ${{ $transaction->amount }}
                                                    @if ($transaction->wallet_id)
                                                        to Wallet Address: {{ $transaction->wallet_id }}
                                                    @endif
                                                @elseif($transaction->type == 'DEPOSIT')
                                                    {{ Str::title($transaction->type) }} of ${{ $transaction->amount }}
                                                @elseif($transaction->type == 'REFERRAL')
                                                    {{ Str::title($transaction->type) }} of ${{ $transaction->amount }}
                                                @elseif($transaction->type == 'BONUS')
                                                    {{ Str::title($transaction->type) }} of ${{ $transaction->amount }}
                                                    ({{ $transaction->description }})
                                                @elseif($transaction->type == 'PROFIT')
                                                    {{ Str::title($transaction->type) }} of ${{ $transaction->amount }}
                                                    @if ($transaction->description)
                                                        ({{ $transaction->description }})
                                                    @endif
                                                @endif
                                            </h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                {{ $transaction->created_at }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
