{{-- ADMIN PROFILE CONTENT --}}
@extends('layouts.admin')
@extends('layouts.app')

@section('content2')

  <div class="padding">
         <div class="card user-card-full" style="width: 100%; height: auto;">
            <div class="row m-l-0 m-r-0" style="width:100%;">
              <div class="col-sm-4 bg-c-lite-green user-profile">
                <div class="card-block text-center text-white" style="margin-left:10px">
                  <div class="m-b-25">
                  <img src="{{ asset('assets/img/icon.png') }}" style="max-width:50%; height: auto;">
                  </div>
                  <h5 class="f-w-600">{{ Auth::user()->name }}</h5>
                  <p style="font-size: 20px;">- Admin -</p>
                  <p style="font-size: 16px;">{{ Auth::user()->email }}</p>
                  <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="card-block">
                  <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Basic Information</h6>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Full name</p>
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username" value="{{ Auth::user()->name }}">
                    </div>
                    </div>
                      <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Password</p>
                        @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" style="color: #000000; text-decoration: underline;">
                                    {{ __('Change Password') }}
                                    </a>
                        @endif
                      </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Email Address (disabled)</p>
                      <div class="form-group">
                      <input type="text" class="form-control" disabled="" placeholder="Email" value="{{ Auth::user()->email }}">
                    </div>
                      
                    </div>
                      <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Student ID</p>
                        <input type="text" class="form-control" placeholder="Add Student ID" value="{{ Auth::user()->studID }}">
                      </div>
                  </div>
                  
                  <div class="row" style="margin-bottom: 5%;">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Year</p>
                      <input type="text" class="form-control" placeholder="Add Year" value="{{ Auth::user()->year }}">
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Course</p>
                      <input type="text" class="form-control" placeholder="Add Course" value="{{ Auth::user()->course }}">
                    </div>
                  
                  </div>
                  
                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Additional Information</h6>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Phone number</p>
                      <input type="text" class="form-control" placeholder="Add Phone number" value="{{ Auth::user()->number }}">
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Gender</p>
                      <input type="text" class="form-control" placeholder="Add Gender" value="{{ Auth::user()->gender }}">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-round" style="background-color: #f8a617; color: white;">Update Profile</button>
                </div>
              </div>
                </div>
             </div>
          </div>
        </div>
    </div>

@endsection