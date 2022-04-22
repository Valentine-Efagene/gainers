@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8">
                <!--Bitcoin Wallet Starts-->
                <h3>BITCOIN WALLET</h3>
                <div class="row">
                    <div class="col-xl-6">
                    </div>
                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <h6 class="mb-0">Fill in correctly your Bitcoin Wallet ID</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-12 mb-md-0 mb-4">
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                            <h6 class="mb-0"></h6>
                                            <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                            <form id="contact-form" class="form" name="enq"
                                                enctype='multipart/form-data' method="POST"
                                                action="{{ route('withdrawal.store') }}">
                                                @csrf
                                                <div class="form-group col-8 mb-3">
                                                    <label>Wallet Type</label>
                                                    <input class="form-control @error('wallet_type') is-invalid @enderror"
                                                        id="wallet_type" name="wallet_type" required="required" type="text"
                                                        placeholder="The type of wallet (crypto-currency)">

                                                    @error('wallet_type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-8 mb-3">
                                                    <label>Wallet ID</label>
                                                    <input class="form-control @error('wallet_id') is-invalid @enderror"
                                                        id="wallet_id" name="wallet_id" required="required" type="text"
                                                        placeholder="Enter Your Wallet ID">

                                                    @error('wallet_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label> Or Upload Your Wallet QPR (jpeg, png, jpg format
                                                        only)</label><br>
                                                    <input name="wallet_qpr"
                                                        class="@error('wallet_qpr') is-invalid @enderror" id="wallet_qpr"
                                                        type="file">
                                                </div>
                                                <div class="form-group col-6 mb-3">
                                                    <label>Withdrawal Token</label>
                                                    <input name="token"
                                                        class="form-control @error('token') is-invalid @enderror" id="token"
                                                        required="required" type="text"
                                                        placeholder="Enter your Transfer token">
                                                    @error('token')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-6 mb-3">
                                                    <label>Amount: $</label>
                                                    <input name="amount"
                                                        class="form-control @error('amount') is-invalid @enderror"
                                                        id="amount" required="required" type="text"
                                                        placeholder="Enter amount You want to withdraw in USD">
                                                    @error('amount')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <br><br>

                                                <div class="col-md-6 text-right">
                                                    <button type="submit" class="btn bg-gradient-dark mb-0"
                                                        href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;
                                                        Submit Withdrawal
                                                        Request</button>
                                                </div>
                                                <hr>
                                                <div>
                                                    <h6><b><i>Please note that Processing your withdrawal might take up to
                                                                24 hours and we urge
                                                                you to be patient!</i></b></h6>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Withdrawal History</h6>
                            </div>
                            {{-- <div class="col-md-6 text-right">
                                <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            @foreach ($withdrawals as $withdrawal)
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark font-weight-bold text-sm">{{ $withdrawal->created_at }}
                                        </h6>
                                        <span class="text-xs">{{ $withdrawal->id }}</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        ${{ $withdrawal->amount }}
                                        {{-- <a class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"
                                            href="{{ $withdrawal->proof }}"><i
                                                class="fas fa-file-pdf text-lg me-1"></i>PDF</a> --}}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
