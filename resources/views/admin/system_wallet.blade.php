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
                                            <form>
                                                <ul class="profile-edit-list row">
                                                    <li class="weight-500 col-md-6">
                                                        <h4 class="text-blue h5 mb-20">Edit/Update Wallets</h4>

                                                        <!--BITCOIN WALLET UPDATE STARTS-->
                                                        <div class="form-group">
                                                            <label>BITCOIN WALLET ID</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>

                                                        <div class="form-group">

                                                            <label>UPLOAD BITCOIN WALLET QPR CODE</label><br>
                                                            <input name="proof" id="cphoto" type="file">

                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary"
                                                                value="Upload/Update Bitcoin Wallet">
                                                        </div>

                                                        <!--BITCOIN WALLET ENDS-->

                                                        <!--BNB WALLET UPDATE STARTS-->
                                                        <BR><BR>
                                                        <div class="form-group">
                                                            <label>BNB WALLET ID</label>
                                                            <input class="form-control form-control-lg" type="text">
                                                        </div>

                                                        <div class="form-group">

                                                            <label>UPLOAD BNB WALLET QPR CODE</label><br>
                                                            <input name="proof" id="cphoto" type="file">

                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <input type="submit" class="btn btn-primary"
                                                                value="Upload/Update BNB Wallet">
                                                        </div>
                                                        <!--BNB WALLET ENDS-->
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
