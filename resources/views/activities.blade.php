@extends('layouts.dashboard')
@inject('Status', 'App\Models\Deposit')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Transaction Activies</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tranction</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($activities)
                                        @foreach ($activities as $activity)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ Str::title($activity->type) }}
                                                                {{ $activity->type == 'DEPOSIT' ? '(' . Str::title($activity->plan) . ' Plan) ' : '' }}:
                                                                ${{ $activity->amount }}
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">
                                                                {{ $activity->created_at }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $activity->type == 'DEPOSIT' ? 'Credt' : 'Debit' }}</p>
                                                    <p class="text-xs text-secondary mb-0">ID: {{ $activity->id }}</p>
                                                </td>
                                                @switch($activity->status)
                                                    @case($Status::PENDING)
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="badge badge-sm bg-gradient-info">{{ $activity->status }}
                                                            </span>
                                                        </td>
                                                    @break

                                                    @case($Status::APPROVED)
                                                        <td class="align-middle text-center text-sm">
                                                            <span
                                                                class="badge badge-sm bg-gradient-success">{{ $activity->status }}
                                                            </span>
                                                        </td>
                                                    @break

                                                    @case($Status::DECLINED)
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="badge badge-sm bg-gradient-warning">Denied</span>
                                                        </td>
                                                    @break

                                                    @case($Status::EXPIRED)
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="badge badge-sm bg-gradient-danger">Expired</span>
                                                        </td>
                                                    @break

                                                    @default
                                                @endswitch

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $activity->created_at }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
