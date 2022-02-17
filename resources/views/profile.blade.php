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
                        <img src="{{ asset('dashboard/img/bruce-mars.jpg') }}" alt="..."
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Alec Thompson
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
                                    Name:</strong> &nbsp; Alec M. Thompson</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                                &nbsp; alecthompson@mail.com</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Country:</strong> &nbsp; USA</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">User
                                    Name:</strong> &nbsp; Aleco123</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Update Your Profile</h6>
                    </div>

                    <form id="contact-form" class="form" name="enq" method="POST" action="">
                        <div class="form-group col-6 mb-3">
                            <label>Change your Phone</label>
                            <input name="amount" class="form-control" id="email" required="required" type="text"
                                placeholder="+1 *** ****">
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label>Change your Email</label>
                            <input name="amount" class="form-control" id="email" required="required" type="text"
                                placeholder="Example@gainers bay.com">
                        </div>
                        <div>
                            <label>Upload a new Profile Photo</label><br>
                            <input name="proof" id="cphoto" type="file" required="required">
                        </div><br><br>

                        <div class="col-md-6 text-right">
                            <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                    class="fas fa-plus"></i>&nbsp;&nbsp; Update</a>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection
