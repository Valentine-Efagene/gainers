@extends('layouts.admin_dashboard')

@section('content')
    <div class="main-container"></div>
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 mb-30">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="p-3 card-box profile-setting height-100-p overflow-hidden">
                        <form action="{{ route('admin.agents.store') }}" method="post">
                            @csrf
                            <h4 class="text-blue h5 mb-20">ADD AGENT</h4>

                            <!--Edit agent4 starts-->
                            <div class="form-group">
                                <label>AGENT NAME</label>
                                <input name="name" id="name"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror" type="text">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>ACCOUNT NUMBER</label>
                                <input name="account_number" id="account_number"
                                    class="form-control form-control-lg @error('account_number') is-invalid @enderror"
                                    type="text">
                                @error('account_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>ACCOUNT NAME</label>
                                <input name="account_name" id="bank"
                                    class="form-control form-control-lg @error('bank') is-invalid @enderror" type="text">
                                @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>BANK</label>
                                <input name="bank" id="bank"
                                    class="form-control form-control-lg @error('bank') is-invalid @enderror" type="text">
                                @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>PHONE NUMBER</label>
                                <input name="phone_number" id="phone_number"
                                    class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                    type="tel">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>WESTERN UNION LINK</label>
                                <input name="wester_union_link" id="wester_union_link"
                                    class="form-control form-control-lg @error('success_rate') is-invalid @enderror"
                                    type="tel">
                                @error('wester_union_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" class="btn btn-primary" value="ADD AGENT">
                            </div>
                            <!--edit agent  ENDS-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
