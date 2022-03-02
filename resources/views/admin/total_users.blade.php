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
                            <div class="weight-600 font-30 text-blue">Total users</div>
                        </h4>
                        <p class="font-18 max-width-600"></p>
                    </div>
                </div>
            </div>

            <div class="pd-ltr-20">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Total User</h2>
                    <!--Every Admin can Edit Client editable info: Number of new request should be beside the Approval Withdrawl heading
                                                                                                         in red bold font. New withdrawal request should be latest at the top. Also they should be highlighted in dark and bold font unlike the request already attended to.-->
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>User Name/ID</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Assigned Withdrawal token</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        @isset($users)
                            <tbody>
                                @foreach ($users as $user)
                                    <!--New withdrawal request should be in bold font.-->
                                    <tr>
                                        <td class="table-plus">{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->country }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ 234343 }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="{{ route('admin.token') }}"><i
                                                            class="dw dw-edit2"></i>Assign
                                                        new Withdrawal token/password/username</a>
                                                    <a class="dropdown-item" href=""><i class="dw dw-edit2"></i>Add bonus to
                                                        user</a>
                                                    <a class="dropdown-item" href=""><i class="dw dw-edit2"></i>Assign
                                                        Trader</a>
                                                    <a class="dropdown-item" href=""><i class="dw dw-edit2"></i>Message
                                                        User</a>
                                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{ $users->links() }}
                        @endisset
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--End of Statement-->
@endsection
