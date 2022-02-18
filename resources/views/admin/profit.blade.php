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
                                        <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Click to add
                                            profit or bonus</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <form>
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">Add Profit/Bonus</h4>

                                                        <!--Edit profit/bonus starts-->
                                                        <div class="form-group">
                                                            <label>Profit</label>
                                                            <input name="amount" class="form-control" id="cnumber"
                                                                type="text" placeholder="Enter Profit Description"><br><br>
                                                            <input name="amount" class="form-control" id="cnumber"
                                                                required="required" type="text"
                                                                placeholder="Enter amount of Profit in USD">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Bonus</label>
                                                            <input name="amount" class="form-control" id="cnumber"
                                                                type="text" placeholder="Enter Bonus Description"><br><br>
                                                            <input name="amount" class="form-control" id="cnumber"
                                                                type="text" placeholder="Enter amount of Bonus in USD">
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
