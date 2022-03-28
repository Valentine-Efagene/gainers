@extends('layouts.admin_dashboard')

@section('content')
    <div class="main-container"></div>
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 mb-30">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Click to
                                            Update Wallets</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <ul class="profile-edit-list row">
                                                @foreach ($wallets as $wallet)
                                                    <li class="weight-500 col-md-6">
                                                        <form enctype='multipart/form-data' method="POST"
                                                            action="{{ route('admin.wallet.update') }}">
                                                            @csrf
                                                            <h4 class="text-blue h5 mb-20">Edit/Update {{ $wallet->name }}
                                                                Wallet</h4>

                                                            <!--BITCOIN WALLET UPDATE STARTS-->
                                                            <input
                                                                class="form-control form-control-lg @error('id') is-invalid @enderror"
                                                                type="text" name="id" id="id" value={{ $wallet->id }}>
                                                            />

                                                            <div class="form-group">
                                                                <label>NAME</label>
                                                                <input
                                                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                                    type="text" name="name" id="name"
                                                                    value={{ $wallet->address }}>
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label>ACRONYM</label>
                                                                <input
                                                                    class="form-control form-control-lg @error('acronym') is-invalid @enderror"
                                                                    type="text" name="acronym" id="acronym"
                                                                    value={{ $wallet->address }}>
                                                                @error('acronym')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label>WALLET ID</label>
                                                                <input
                                                                    class="form-control form-control-lg @error('address') is-invalid @enderror"
                                                                    type="text" name="address" id="address"
                                                                    value={{ $wallet->address }}>
                                                                @error('address')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">

                                                                <label>UPLOAD WALLET QPR CODE</label><br>
                                                                <input name="qr_code"
                                                                    class="@error('qr_code') is-invalid @enderror"
                                                                    id="qr_code" value="{{ $wallet->qr_code }}"
                                                                    type="file">
                                                                @error('qr_code')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror

                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Upload/Update {{ $wallet->name }} Wallet">
                                                            </div>

                                                            <!--BITCOIN WALLET ENDS-->
                                                        </form>
                                                    </li>
                                                @endforeach
                                                <li class="weight-500 col-md-6">
                                                    <form enctype='multipart/form-data' method="POST"
                                                        action="{{ route('admin.wallet.store') }}">
                                                        @csrf
                                                        <h4 class="text-blue h5 mb-20">Add Wallet</h4>
                                                        <!--WALLET CREATION STARTS-->
                                                        <div class="form-group">
                                                            <label>NAME</label>
                                                            <input
                                                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                                type="text" name="name" id="name"
                                                                value={{ $wallet->address }}>
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label>ACRONYM</label>
                                                            <input
                                                                class="form-control form-control-lg @error('acronym') is-invalid @enderror"
                                                                type="text" name="acronym" id="acronym"
                                                                value={{ $wallet->address }}>
                                                            @error('acronym')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>WALLET ID</label>
                                                            <input
                                                                class="form-control form-control-lg @error('address') is-invalid @enderror"
                                                                type="text" name="bitcoin_wallet_id" id="address">
                                                            @error('address')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">

                                                            <label>UPLOAD WALLET QPR CODE</label><br>
                                                            <input name="qr_code"
                                                                class="@error('qr_code') is-invalid @enderror" id="qr_code"
                                                                value="{{ $wallet->qr_code }}" type="file">
                                                            @error('qr_code')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary" value="Add Wallet">
                                                        </div>
                                                    </form>
                                                    <!--WALLET ENDS-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Setting Tab End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
