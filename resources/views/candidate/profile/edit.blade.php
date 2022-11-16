{{-- CANDIDATE EDIT PROFILE CONTENT --}}
@extends('layouts.candidate')
@extends('layouts.app')

@section('content3')
    <div class="padding">
        <div class="card user-card-full" style="width: 100%; height: auto;">
            <div class="row m-l-0 m-r-0" style="width:100%;">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                    <div class="card-block text-center text-white" style="margin-left:10px">
                        <div class="m-b-25">
                            <img src="{{ asset('assets/img/icon.png') }}" style="max-width:50%; height: auto;">
                        </div>
                        <h5 class="f-w-600">{{ Auth::user()->name }}</h5>
                        <p style="font-size: 20px;">- Candidate -</p>
                        <p style="font-size: 16px;">{{ Auth::user()->email }}</p>
                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                    </div>
                </div>
                <div class="col-sm-8">
                    <form id="update-profile" name="update-profile" action="{{ url('updateProfile/' . $profile->user_id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-block">
                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Edit Basic Information</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Full name</p>
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Password</p>
                                    <input type="password" class="form-control" disabled="true" value="11111111">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Email Address (disabled)</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" disabled="true"
                                            value="{{ Auth::user()->email }}">
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Student ID</p>
                                    <input type="text" id="studID" name="studID" class="form-control"
                                        value="{{ $profile->studID }}">
                                </div>
                            </div>

                            <div class="row" style="margin-bottom: 5%;">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Year</p>
                                    <input type="text" id="year" name="year" class="form-control"
                                        value="{{ $profile->year }}">
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Course</p>
                                    <input type="text" id="course" name="course" class="form-control"
                                        value="{{ $profile->course }}">
                                </div>
                            </div>

                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Edit Additional Information</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Phone number</p>
                                    <input type="text" id="phoneNum" name="phoneNum" class="form-control"
                                        value="{{ $profile->phoneNum }}">
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Gender</p>
                                    <input type="text" id="gender" name="gender" class="form-control"
                                        value="{{ $profile->gender }}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-round"
                                        style="background-color: #f8a617; color: white;">Save Profile</button>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('change.password') }}" class="btn btn-round"
                                            style="background-color: #f8a617; color: white;">{{ __('Change Password') }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
