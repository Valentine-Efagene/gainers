@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('{{ asset('dashboard/img/curved-images/curved0.jpg') }}'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        @if (Auth::user()->profile_photo)
                            <img src="storage/app/public/{{ Auth::user()->profile_photo }}" alt="..."
                                class="w-100 border-radius-lg shadow-sm">
                        @endif
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ Auth::user()->name }}
                        </h5>
                    </div>
                </div>
                <div class="col-sm-4 col-8 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">

            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="javascript:;">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            Your Information is only needed for investment and Withdrawal purposes
                        </p>
                        <hr class="horizontal gray-light my-4">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                    Name:</strong> &nbsp; {{ Auth::user()->name }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Mobile:</strong> &nbsp; {{ Auth::user()->phone_number }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                                &nbsp; {{ Auth::user()->email }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Country:</strong> &nbsp; {{ Auth::user()->country }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">User
                                    Name:</strong> &nbsp; {{ Auth::user()->username }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Update Your Profile</h6>
                    </div>

                    <form id="contact-form" enctype='multipart/form-data' class="form" name="enq" method="POST"
                        action="{{ route('user.update_profile') }}">
                        @csrf
                        <div class="form-group col-6 mb-3">
                            <label>Change your Phone</label>
                            <input name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
                                id="phone_number" type="text" placeholder="+1 *** ****">
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label>Change your Email</label>
                            <input name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                type="text" placeholder="example@gainersbay.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label>Upload a new Profile Photo</label><br>
                            <input name="profile_photo" id="profile_photo" type="file"
                                class=" @error('profile_photo') is-invalid @enderror">
                            @error('profile_photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br><br>

                        <div class="col-md-6 text-right">
                            <button class="btn bg-gradient-dark mb-0" type="submit" href="javascript:;"><i
                                    class="fas fa-plus"></i>&nbsp;&nbsp; Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
