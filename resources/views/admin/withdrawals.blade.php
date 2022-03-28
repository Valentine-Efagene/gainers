@extends('layouts.admin_dashboard')

@section('content')
    <!--Welcome Note to user-->
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="vendors/images/banner-img.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            <div class="weight-600 font-30 text-blue">Withdrawals</div>
                        </h4>
                        <p class="font-18 max-width-600"></p>
                    </div>
                </div>
            </div>

            <div class="pd-ltr-20">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Approve Withdrawals (1 New)</h2>
                    <!--Every Admin can Edit Client editable info: Number of new request should be beside the Approval Withdrawl heading
                                                        in red bold font. New withdrawal request should be latest at the top. Also they should be highlighted in dark and bold font unlike the request already attended to.-->
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>User ID</th>
                                <th>Wallet Address Type</th>
                                <th>Wallet Address Code</th>
                                <th>Address QPR</th>
                                <th>Inputted Withdrawal Token</th>
                                <th>Original Withdrawal Token</th>
                                <!--Check the user's initial token if matched with the one inputted for withdrawal. If matched, Output: Matched, if not tick Invalid Token-->
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($withdrawals)
                                @foreach ($withdrawals as $withdrawal)
                                    <tr>
                                        <!--New withdrawal request should be in bold font.-->
                                        <td class="table-plus">{{ $withdrawal->user->name }}</td>
                                        <td>{{ $withdrawal->user_id }}</td>
                                        <td>{{ $withdrawal->wallet_type }}</td>
                                        <td>{{ $withdrawal->wallet_id }}</td>
                                        <td>{{ $withdrawal->wallet_qpr }}</td>
                                        <td>{{ $withdrawal->token }}</td>
                                        <td>{{ $withdrawal->user->token->token }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href=""><i class="dw dw-edit2"></i>pending</a>
                                                    <a class="dropdown-item" href=""><i class="dw dw-edit2"></i>Approve</a>
                                                    <a class="dropdown-item" href=""><i class="dw dw-edit2"></i>Decline</a>
                                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--End of Statement-->
@endsection
