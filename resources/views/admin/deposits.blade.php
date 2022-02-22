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
                            <div class="weight-600 font-30 text-blue">Deposits</div>
                        </h4>
                        <p class="font-18 max-width-600"></p>
                    </div>
                </div>
            </div>

            <div class="pd-ltr-20">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Active Deposits</h2>
                    <!--Recent Deposits should be up-->
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>User ID</th>
                                <th>Investment Plan</th>
                                <th>Amount</th>
                                <th>Deposited Cryptocurrency</th>
                                <th>Deposit Receipt</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        @isset($deposits)
                            <tbody>
                                @foreach ($deposits as $deposit)
                                    <tr>
                                        <td class="table-plus">{{ $deposit->user->name }}
                                        </td>
                                        <td>{{ $deposit->user_id }}
                                        </td>
                                        <td>{{ $deposit->plan }}</td>
                                        <td>{{ $deposit->amount }}</td>
                                        <td>{{ $deposit->plan }}</td>
                                        <td><a href="../storage/app/public/uploads/{{ $deposit['proof'] }}"><i
                                                    class="fa-solid fa-receipt fa-2x" style="color: goldenrod"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href=""><i class="dw dw-edit2"></i>Decline
                                                        Investment</a>
                                                    <a class="dropdown-item" href="profit.html"><i
                                                            class="dw dw-edit2"></i>Add
                                                        Profit</a>
                                                    <a class="dropdown-item" href=""><i class="dw dw-edit2"></i>Approve
                                                        Investment</a>
                                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>Delete
                                                        Investment</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{ $deposits->links() }}
                        @endisset
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--End of Statement-->
@endsection
