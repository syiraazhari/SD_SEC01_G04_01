{{-- ADMIN VIEW FEEDBACK CONTENT --}}
@extends('layouts.admin')
@extends('layouts.app')

@section('content2')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../assets/css/contactus.css">
    
<style>
    .banner {
        width: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url(../assets/img/hero-2.jpg);
        height: 300px;
        background-color: purple;
        background-position: center;
        background-size: 100% 405px; 
        background-repeat:no-repeat;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
    <div class="row" style="margin:auto;">
      
        <div class="col-md-12">
        <!--Section: Contact v.2-->

            <div class="banner">
                <div class="centertext">
                    <h1 style="font-size:50px">Feedback</h1>
                </div>
            </div>

            <section class="mb-4 card card-body" style="border:white">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Recently Received Feedback</h2>
        
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Feedback that was recently submitted by various users.
                </p>

                <!--Grid row-->
                <div class="row" style="margin:auto">

                    <table class="table table-hover" style="border:1px solid lightgrey">
                        <thead style="background-color:#81163F; color:white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type of User</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedback as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    @if ($item->user == "0")
                                        <td>Voter</td>
                                    @endif
                                    @if ($item->user == "2")
                                        <td>Candidate</td>
                                    @endif
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    {{-- <td>{{ $item->rating }}</td> --}}
                                    @if ($item->good == "1")
                                        <td>Good</td>
                                    @endif
                                    @if ($item->average == "1")
                                        <td>Average</td>
                                    @endif
                                    @if ($item->poor == "1")
                                        <td>Poor</td>
                                    @endif
                                    <td>{{ $item->comment }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- <tbody>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody> --}}
                    </table>
                </div>
            </section>
        </div>
    </div> 
</body>
</html>
@endsection