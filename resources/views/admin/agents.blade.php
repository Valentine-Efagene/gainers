@extends('layouts.admin_dashboard')

@section('content')
    <!--Welcome Note to agent-->
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="vendors/images/banner-img.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            <div class="weight-600 font-30 text-blue">Agents</div>
                        </h4>
                        <p class="font-18 max-width-600"></p>
                    </div>
                </div>
            </div>

            <div class="pd-ltr-20">
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Agents</h2>
                    <a href={{ route('admin.agents.add') }}><button class="btn btn-primary mb-3 ml-3">Add New
                            Agent</button></a>
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Account Number</th>
                                <th>Account Name</th>
                                <th>Bank</th>
                                <th>Phone</th>
                                <th>Western Union Link</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        @isset($agents)
                            <tbody>
                                @foreach ($agents as $agent)
                                    <!--New withdrawal request should be in bold font.-->
                                    <tr>
                                        <td class="table-plus">{{ $agent->name }}</td>
                                        <td>{{ $agent->account_number }}</td>
                                        <td>{{ $agent->account_name }}</td>
                                        <td>{{ $agent->bank }}</td>
                                        <td>{{ $agent->phone_number }}</td>
                                        <td>{{ $agent->western_union_link }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.agents.edit', ['id' => $agent->id]) }}"><i
                                                            class="dw dw-edit2"></i>
                                                        Edit</a>
                                                    <button class="dropdown-item"
                                                        href={{ route('admin.agents.delete', ['id' => $agent->id]) }}><i
                                                            class="dw dw-delete-3"></i>Delete</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{ $agents->links() }}
                        @endisset
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--End of Statement-->
@endsection
