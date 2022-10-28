@extends('layouts.admin_dashboard')

@section('content')
    <div class="main-container"></div>
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 mb-30">
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="p-3 profile-setting card-box height-100-p overflow-hidden">
                        <form action="{{ route('admin.agent.update') }}" method="post" class="col-md-12">
                            @csrf
                            <h4 class="text-blue h5 mb-20">Edit/Update
                                Agent {{ $agent->id }}</h4>
                            <!--Edit agent1 starts-->
                            <input type="text" hidden readonly name="id" id="id" value="{{ $agent->id }}">
                            <div class="form-group">
                                <label>AGENT NAME</label>
                                <input name="name" id="name"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    value="{{ $agent->name }}" type="text">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>INVESTORS</label>
                                @isset($agent->users)
                                    <ul>
                                        @foreach ($agent->users as $user)
                                            <li>{{ $user->name }}</li>
                                        @endforeach
                                    </ul>
                                @endisset
                            </div>
                            <div class="form-group">
                                <label>ACCOUNT NUMBER</label>
                                <input name="account_number" id="account_number" value="{{ $agent->account_number }}"
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
                                <input name="account_name" id="account_name" value="{{ $agent->account_name }}"
                                    class="form-control form-control-lg @error('account_name') is-invalid @enderror"
                                    type="text">
                                @error('account_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>BANK</label>
                                <input name="bank" id="bank" value="{{ $agent->bank }}"
                                    class="form-control form-control-lg @error('bank') is-invalid @enderror" type="text">
                                @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>PHONE NUMBER</label>
                                <input name="phone_number" id="phone_number" value="{{ $agent->phone_number }}"
                                    class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                    type="text">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>WESTERN UNION LINK</label>
                                <input name="wester_union_link" id="wester_union_link"
                                    value="{{ $agent->wester_union_link }}"
                                    class="form-control form-control-lg @error('wester_union_link') is-invalid @enderror"
                                    type="text">
                                @error('wester_union_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" class="btn btn-primary"
                                    value="Upload/Update Agent {{ $agent->id }}">
                            </div>
                            <!--edit agent1  ENDS-->
                        </form>
                    </div>
                    <!-- Setting Tab End -->
                </div>
            </div>
        </div>
    </div>
@endsection
