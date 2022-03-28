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
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Click to add
                                        Success</a>
                                </li>
                            </ul>
                            <div class="tab height-100-p">
                                <div class="tab-content">
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <form method="POST" action="{{ route('admin.success.store') }}">
                                                @csrf
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">Add Success</h4>

                                                        <!--Edit bonus starts-->
                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <input name="date"
                                                                class="form-control @error('date') is-invalid @enderror"
                                                                id="date" type="date" placeholder="Enter date"><br><br>
                                                            @error('date')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <input name="success_rate" required
                                                                class="form-control @error('success_rate') is-invalid @enderror"
                                                                id="success_rate" type="text"
                                                                placeholder="Enter Success Rate in percentage">
                                                            @error('success_rate')
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
