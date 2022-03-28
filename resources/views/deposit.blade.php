@extends('layouts.dashboard')
@inject('Plan', 'App\Models\Deposit')

@section('content')
    <!--Bitcoin Wallet Starts-->
    <h3>BITCOIN WALLET</h3>
    <div class="row">
        <div class="col-xl-6 mb-xl-0 mb-4">
            <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl"
                    style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 p-3">
                        <div class="d-flex">
                            <div class="d-flex">
                                <div class="form-group col-12 mb-3">
                                    <p class="text-white text-sm opacity-8 mb-0">Scan the Wallet QPR Code to make payment</p>
                                    <br>
                                    @isset($wallet)
                                        <img src="storage/app/public/{{ $wallet->bitcoin_wallet_qpr_code }}" alt="Wallet_QPR"
                                            width=200px height=200px>
                                        <div class="me-4">
                                            <p class="text-white text-sm opacity-8 mb-0">Or Use the Bitcoin Wallet Address Code:
                                            </p>
                                        </div>
                                        <div>
                                            <h4 class="text-white text-sm opacity-8 mb-0">{{ $wallet->bitcoin_wallet_id }}
                                            </h4>
                                        </div>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                            <div>
                                <img src="../assets/img/logo-ct.png" alt="Wallet_QPR" width=70px height=70px>
                            </div>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">Bitcoin Wallet</h6>
                            <hr class="horizontal dark my-3">
                            <h5 class="mb-0">Only Deposit Bitcoin to this Address</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-lg-0 mb-4">
            <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <h6 class="mb-0">Chose Investment Plan and Amount you paid in Dollar If you have made
                                deposit.</h6>
                        </div>
                    </div>
                </div>
                @isset($success)
                    @if ($success)
                        <div style="color: rgb(0, 255, 179)">Done</div>
                    @endif
                @endisset
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-12 mb-md-0 mb-4">
                            <div
                                class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                <h6 class="mb-0"></h6>
                                <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit Card"></i>
                                <form id="contact-form" class="form" name="enq" enctype='multipart/form-data'
                                    method="POST" action="{{ route('deposit.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-12 mb-3">
                                            <label>Choose an Investment plan</label><br>
                                            <input id="rbBasic" type="radio" name="plan" value="{{ $Plan::BASIC }}">Basic
                                            Plan ($500 -
                                            $1000)<br>
                                            <input id="rbStarter" type="radio" name="plan"
                                                value="{{ $Plan::BRONZE }}">Bronze Plan ($1001 -
                                            $2000)<br>
                                            <input id="rbStandard" type="radio" name="plan"
                                                value="{{ $Plan::SILVER }}">Silver Plan ($2001 -
                                            $3000)<br>
                                            <input id="rbSuperStandard" type="radio" name="plan"
                                                value="{{ $Plan::DIAMOND }}">Diamond Plan
                                            ($3001 - $5000<br>
                                            <input id="rbPremium" type="radio" name="plan"
                                                value="{{ $Plan::PREMIUM }}">Premium Plan ($5000+)<br>
                                            <input id="rbOther" type="radio" name="plan"
                                                value="{{ $Plan::CRYPTOCURRENCIES }}">Cryptocurrencies ($1000 -
                                            $50,000)<br>
                                            <input id="rbOther" type="radio" name="plan"
                                                value="{{ $Plan::STOCKS }}">Stocks
                                            ($1000 -
                                            $50,000)<br>
                                            <input id="rbOther" type="radio" name="plan"
                                                value="{{ $Plan::CUSTOM }}">Custom
                                            plan

                                            @error('plan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-4 mb-3">
                                        <label>Amount paid: $</label>
                                        <input name="amount" class="form-control @error('amount') is-invalid @enderror"
                                            id="amount" required="required" type="text"
                                            placeholder="Enter amount deposited in USD">

                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label>Upload Receipt of payment (jpeg, png, jpg format only)</label><br>
                                        <input name="proof" class="@error('proof') is-invalid @enderror" id="proof"
                                            value="{{ old('proof') }}" type="file" required="required"
                                            @error('proof') is-invalid @enderror>

                                        @error('proof')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div><br><br>

                                    <div class="col-md-6 text-right">
                                        <button @if (!($wallet && ($wallet->bitcoin_wallet_id || $wallet->bitcoin_wallet_qpr_code))) disabled @endif type="submit"
                                            class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                                class="fas fa-plus"></i>&nbsp;&nbsp; SUBMIT</button>
                                    </div>
                                    <hr>
                                    <div>
                                        <h6><b><i>Please note that your investment is only active when payment is confirmed.
                                                    An email will be
                                                    sent to your registered email when your investment is confirmed and
                                                    approved</i></b></h6>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <!-- Crypto Converter ⚡ Widget -->
    <crypto-converter-widget shadow symbol live background-color="#383a59" border-radius="0.60rem"
        fiat="united-states-dollar" crypto="bitcoin" amount="1" decimal-places="2"></crypto-converter-widget>
    <a href="https://currencyrate.today/" target="_blank" rel="noopener">CurrencyRate.Today</a>
    <script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script>
    <!-- /Crypto Converter ⚡ Widget -->
    <h3>BINANCE WALLET</h3>

    <!--BNB wallet-->
    <div class="row">
        <div class="col-xl-6 mb-xl-0 mb-4">
            <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl"
                    style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 p-3">
                        <div class="d-flex">
                            <div class="d-flex">
                                <div class="form-group col-12 mb-3">
                                    <p class="text-white text-sm opacity-8 mb-0">Scan the Wallet QPR Code to make payment
                                    </p><br>
                                    @isset($wallet)
                                        <img src="storage/app/public/{{ $wallet->bnb_wallet_qpr_code }}" alt="Wallet_QPR"
                                            width=200px height=200px>
                                        <div class="me-4">
                                            <p class="text-white text-sm opacity-8 mb-0">Or Use the Binance (BNB) Coin Wallet
                                                Address Code:</p>
                                        </div>
                                        <div>
                                            <h4 class="text-white text-sm opacity-8 mb-0">
                                                {{ $wallet ? $wallet->bnb_wallet_id : '' }}</h4>
                                        </div>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                            <div>
                                @isset($wallet)
                                    <img src="storage/app/public/{{ $wallet->bitcoin_wallet_qpr_code }}" alt="Wallet_QPR"
                                        width=70px height=70px>
                                @endisset
                            </div>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">Binance Coin Wallet</h6>
                            <hr class="horizontal dark my-3">
                            <h5 class="mb-0">Only Deposit Binance Coin to this Address</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-lg-0 mb-4">
            <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <h6 class="mb-0">Chose Investment Plan and Amount you paid in Dollar If you have made
                                deposit.</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-12 mb-md-0 mb-4">
                            <div
                                class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                <h6 class="mb-0"></h6>
                                <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit Card"></i>
                                <form id="contact-form" class="form" name="enq" enctype='multipart/form-data'
                                    method="POST" action="">
                                    <div class="row">
                                        <div class="form-group col-12 mb-3">
                                            <label>Choose an Investment plan</label><br>
                                            <input id="rbBasic" type="radio" name="plan" value="">Basic Plan ($500 -
                                            $1000)<br>
                                            <input id="rbStarter" type="radio" name="plan" value="">Bronze Plan ($1001 -
                                            $2000)<br>
                                            <input id="rbStandard" type="radio" name="plan" value="">Silver Plan ($2001 -
                                            $3000)<br>
                                            <input id="rbSuperStandard" type="radio" name="plan" value="">Diamond Plan
                                            ($3001 - $5000<br>
                                            <input id="rbPremium" type="radio" name="plan">Premium Plan ($5000+)<br>
                                            <input id="rbOther" type="radio" name="plan" value="">Cryptocurrencies ($1000 -
                                            $50,000)<br>
                                            <input id="rbOther" type="radio" name="plan" value="">Stocks ($1000 -
                                            $50,000)<br>
                                            <input id="rbOther" type="radio" name="plan" value="">Custom plan
                                        </div>
                                    </div>
                                    <div class="form-group col-4 mb-3">
                                        <label>Amount paid: $</label>
                                        <input name="amount" class="form-control" id="cnumber" required="required"
                                            type="text" placeholder="Enter amount deposited in USD">
                                    </div>
                                    <div>
                                        <label>Upload Receipt of payment (jpeg, png, jpg format only)</label><br>
                                        <input name="proof" id="cphoto" type="file" required="required">
                                    </div><br><br>

                                    <div class="col-md-6 text-right">
                                        <button @if (!($wallet && ($wallet->bnb_wallet_qpr_code || $wallet->bnb_wallet_id))) disabled @endif type="submit"
                                            class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                                class="fas fa-plus"></i>&nbsp;&nbsp; SUBMIT</button>
                                    </div>
                                    <!--BnB Wallet Ends-->
                                    <hr>
                                    <div>
                                        <h6><b><i>Please note that your investment is only active when payment is confirmed.
                                                    An email will be
                                                    sent to your registered email when your investment is confirmed and
                                                    approved</i></b></h6>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <h5>Contact our Customer Support if you wish to pay/invest with any Other Cryptocurrency of your Choice!</h5>
    </div>



    <div class="col-lg-4">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <h6 class="mb-0">Deposit History</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                    </div>
                </div>
            </div>
            <div class="card-body p-3 pb-0">
                <ul class="list-group">
                    @if ($deposits)
                        @foreach ($deposits as $deposit)
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">{{ $deposit->created_at }}</h6>
                                    <span class="text-xs">{{ $deposit->id }}</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    ${{ $deposit->amount }}
                                    <a target="_blank" href="storage/app/public/{{ $deposit->proof }}"
                                        class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</a>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
