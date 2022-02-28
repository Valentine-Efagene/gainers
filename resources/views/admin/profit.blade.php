@extends('layouts.admin_dashboard')

@section('content')
    <div class="main-container">
    </div>
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
                                        <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Click to add
                                            profit or bonus</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <form method="POST" action="{{ route('admin.profit.store') }}">
                                                @csrf
                                                <input name="id" type="hidden" value="{{ $id }}">
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">Add Profit/Bonus</h4>

                                                        <!--Edit profit/bonus starts-->
                                                        <div class="form-group">
                                                            <label>Profit</label>
                                                            <input name="profit_description"
                                                                class="form-control @error('profit_description') is-invalid @enderror"
                                                                id="profit_description" type="text"
                                                                placeholder="Enter Profit Description">
                                                            @error('profit_description')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <br><br>
                                                            <input name="profit_amount"
                                                                class="form-control @error('profit_amount') is-invalid @enderror"
                                                                id="profit_amount" required="required" type="text"
                                                                placeholder="Enter amount of Profit in USD">
                                                            @error('profit_amount')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Bonus</label>
                                                            <input name="bonus_description"
                                                                class="form-control @error('bonus_description') is-invalid @enderror"
                                                                id="bonus_description" type="text"
                                                                placeholder="Enter Bonus Description"><br><br>
                                                            @error('bonus_description')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <input name="bonus_amount"
                                                                class="form-control @error('bonus_amount') is-invalid @enderror"
                                                                id="bonus_amount" type="text"
                                                                placeholder="Enter amount of Bonus in USD">
                                                            @error('bonus_amount')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Add') }}
                                                            </button>
                                                        </div>
                                                        <!--edit profit/bonus  ENDS-->
                                                    </li>
                                                </ul>
                                            </form>
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
