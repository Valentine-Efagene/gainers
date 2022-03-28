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
                                            Update Traders/Statistics</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">

                                            <ul class="profile-edit-list row">
                                                @foreach ($traders as $trader)
                                                    <form action="{{ route('admin.trader.update') }}" method="post">
                                                        @csrf
                                                        <li class="weight-500 col-md-6">
                                                            <h4 class="text-blue h5 mb-20">Edit/Update
                                                                Trader {{ $trader->id }}</h4>
                                                            <!--Edit trader1 starts-->
                                                            <input type="text" hidden readonly name="id" id="id"
                                                                value="{{ $trader->id }}">
                                                            <div class="form-group">
                                                                <label>TRADER NAME</label>
                                                                <input name="name" id="name"
                                                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                                    value="{{ $trader->name }}" type="text">
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>INVESTORS</label>
                                                                @isset($trader->user)
                                                                    <ul>
                                                                        @foreach ($trader->user as $user)
                                                                            <li>{{ $user->name }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endisset
                                                            </div>
                                                            <div class="form-group">
                                                                <label>AVERAGE ROI</label>
                                                                <input name="roi" id="roi" value="{{ $trader->roi }}"
                                                                    class="form-control form-control-lg @error('roi') is-invalid @enderror"
                                                                    type="text">
                                                                @error('roi')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>SUCCESS RATE</label>
                                                                <input name="success_rate" id="success_rate"
                                                                    value="{{ $trader->success_rate }}"
                                                                    class="form-control form-control-lg @error('success_rate') is-invalid @enderror"
                                                                    type="text">
                                                                @error('success_rate')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Upload/Update Trader {{ $trader->id }}">
                                                            </div>
                                                            <!--edit trader1  ENDS-->
                                                        </li>
                                                    </form>
                                                @endforeach
                                                <li class="weight-500 col-md-6">
                                                    <form action="{{ route('admin.trader.store') }}" method="post">
                                                        @csrf
                                                        <h4 class="text-blue h5 mb-20">ADD TRADER</h4>

                                                        <!--Edit trader4 starts-->
                                                        <div class="form-group">
                                                            <label>TRADER NAME</label>
                                                            <input name="name" id="name"
                                                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                                type="text">
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        {{-- <div class="form-group">
                                                            <label>INVESTORS</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div> --}}
                                                        <div class="form-group">
                                                            <label>AVERAGE ROI</label>
                                                            <input name="roi" id="roi"
                                                                class="form-control form-control-lg @error('roi') is-invalid @enderror"
                                                                type="text">
                                                            @error('roi')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>SUCCESS RATE</label>
                                                            <input name="success_rate" id="success_rate"
                                                                class="form-control form-control-lg @error('success_rate') is-invalid @enderror"
                                                                type="text">
                                                            @error('success_rate')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary" value="ADD TRADER">
                                                        </div>
                                                        <!--edit trader  ENDS-->
                                                    </form>
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
