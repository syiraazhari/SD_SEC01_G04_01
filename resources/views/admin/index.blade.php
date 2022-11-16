{{-- MAIN ADMIN CONTENT --}}
@extends('layouts.admin')
@extends('layouts.app')
@section('content2')
    <style>
        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;
        }

        #success {
            display: none;
        }

        #history {
            display: none;
        }

        #edithistory {
            display: none;
        }
    </style>

    {{-- first four column --}}
    <div class="content-margin">
        <div class="row" style="padding-top: 1.5rem; margin: auto; width:100%">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class='bx bx-bar-chart-alt-2'></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">User<br>Registered</p>
                                    <p class="card-title">{{ $user->count() }}
                                    <p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i>
                            Update Now
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class='bx bx-bar-chart-alt-2'></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Voter<br>Registered</p>
                                    <p class="card-title">{{ $voter->count() }}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i>
                            Update now
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class='bx bx-bar-chart-alt-2'></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Candidate Registered</p>
                                    <p class="card-title">{{ $candidate->count() }}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i>
                            Update now
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class='bx bx-bar-chart-alt-2'></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total<br>Visitor</p>
                                    <p class="card-title">127
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i>
                            In the last 24 hour
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">

                <div id="success" style="background-color: #CFFBCF; border: 1px solid black; padding: 10px;">
                    <h3>Success!</h3>
                    <p>Announcement Succesfully Posted to Homepage.</p>
                </div>

                <div class="card">
                    <div class="card-header ">
                        <h3 class="card-title">Post An Announcement</h3>
                        <p class="card-category">*Announcements will be displayed at User's Homepage (One Announcement at a
                            time)</p>
                        <form>

                            <label>
                                <h5>Enter Subject</h5>
                            </label><br>

                            <textarea style="height: 50px" placeholder="Enter Subject"></textarea>
                            <br>
                            <label>
                                <h5 style="margin-top: 15px;">Enter Comment</h5>
                            </label><br>
                            <textarea placeholder="Enter Comment"></textarea>

                            <button type="button" onclick="document.getElementById('success').style.display='block'"
                                style="height: 40px; width: 80px; margin-top: 12px; margin-bottom: 12px; background-color: #f8a617; color: white; border: none;">Submit</button>

                            <button type="reset" onclick="document.getElementById('success').style.display='none'"
                                style="height: 40px; width: 80px; margin-top: 12px; margin-bottom: 25px; background-color: #f8a617; color: white; border: none;">Clear</button>

                        </form>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header ">
                        <h5>Active Announcements:</h5>
                        <button type="button" onclick="document.getElementById('history').style.display='block'"
                            style="height: 40px; width: 130px; margin-top: 12px; margin-bottom: 12px; background-color: #f8a617; color: white; border: none;">View</button>

                        <button type="button" onclick="document.getElementById('edithistory').style.display='block'"
                            style="height: 40px; width: 130px; margin-top: 12px; margin-bottom: 12px; background-color: #f8a617; color: white; border: none;">Edit
                            / Confirm</button>

                        <div id="history"
                            style="background-color: white; border: 1px solid black; padding: 10px; margin-bottom: 20px">

                            <h3>DON'T FORGET TO VOTE</h3>
                            <p>Your vote counts.</p>

                        </div>

                        <div id="edithistory"
                            style="background-color: white; border: 1px solid black; padding: 10px; margin-bottom: 20px">

                            <textarea>DON'T FORGET TO VOTE
Your vote counts.</textarea>

                        </div>
                    </div>
                </div>

            </div>


            {{-- <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h5 class="card-title">Users Behavior</h5>
                        <p class="card-category">24 Hours performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
@endsection
