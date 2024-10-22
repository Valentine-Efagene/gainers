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
                    <!--Every Admin can Edit Client editable info: Number of new request should be beside the Approval Withdrawal heading                                                                                                                                                                                                                                     in red bold font. New withdrawal request should be latest at the top. Also they should be highlighted in dark and bold font unlike the request already attended to.-->
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>User Name/ID</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Assigned Withdrawal token</th>
                                <th>Assigned Trader</th>
                                <th>Assigned Agent 1</th>
                                <th>Assigned Agent 2</th>
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
                                        <td>{{ $user->token ? $user->token->token : '' }}</td>
                                        <td>
                                            <form action="{{ route('admin.traders.set') }}" method="post">
                                                @csrf
                                                <input type="text" name="user_id" readonly hidden id="user_id"
                                                    value="{{ $user->id }}">
                                                <select class="form-select" name="trader_id" id="trader_id"
                                                    onchange='this.form.submit()' aria-label="Trader Select">
                                                    @if ($user->trader_id)
                                                        <option value="{{ $user->trader_id }}" selected>
                                                            {{ $user->trader->name }}</option>
                                                    @else
                                                        <option selected>
                                                            Assign Trader
                                                        </option>
                                                    @endif
                                                    @foreach ($traders as $trader)
                                                        <option value="{{ $trader->id }}">{{ $trader->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <noscript><input hidden type="submit" value="Submit"></noscript>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.agents.set') }}" method="post">
                                                @csrf
                                                <input type="text" name="user_id" readonly hidden id="user_id"
                                                    value="{{ $user->id }}">
                                                <select class="form-select" name="agent_id" id="agent_id"
                                                    onchange='this.form.submit()' aria-label="Agent Select">
                                                    @if (count($user->agents) > 0)
                                                        <option value="{{ $user->agents[0]->id }}" selected>
                                                            {{ $user->agents[0]->name }}</option>
                                                    @else
                                                        <option selected>
                                                            Assign Agent
                                                        </option>
                                                    @endif
                                                    @foreach ($agents as $agent)
                                                        <option value="{{ $agent->id }}">{{ $agent->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <noscript><input hidden type="submit" value="Submit"></noscript>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.agents.set') }}" method="post">
                                                @csrf
                                                <input type="text" name="user_id" readonly hidden id="user_id"
                                                    value="{{ $user->id }}">
                                                <select class="form-select" name="agent_id" id="agent_id"
                                                    onchange='this.form.submit()' aria-label="Agent Select">
                                                    @if (count($user->agents) > 1)
                                                        <option value="{{ $user->agents[1]->id }}" selected>
                                                            {{ $user->agents[1]->name }}</option>
                                                    @else
                                                        <option selected>
                                                            Assign Agent
                                                        </option>
                                                    @endif
                                                    @foreach ($agents as $agent)
                                                        <option value="{{ $agent->id }}">{{ $agent->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <noscript><input hidden type="submit" value="Submit"></noscript>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.token', ['id' => $user->id]) }}"><i
                                                            class="dw dw-edit2"></i>Assign
                                                        new Withdrawal token/password/username</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.bonus.create', ['id' => $user->id]) }}"><i
                                                            class="dw dw-edit2"></i>Add bonus to
                                                        user</a>
                                                    <a target="_blank" class="dropdown-item"
                                                        href="{{ env('WEBMAIL_LINK') }}"><i class="dw dw-edit2"></i>Message
                                                        User</a>
                                                    <form method="POST" action="{{ route('admin.users.delete') }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input name="id" type="hidden" value="{{ $user->id }}">
                                                        <button class="dropdown-item" href=""><i
                                                                class="dw dw-delete-3"></i>Delete</button>
                                                    </form>
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
