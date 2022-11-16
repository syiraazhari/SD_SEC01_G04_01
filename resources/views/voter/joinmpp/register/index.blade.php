{{-- VOTER CANDIDATE REGISTRATION FORM --}}
@extends('layouts.voter')
@extends('layouts.app')

@section('content4')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
  .button {
    background-color: #f8a617;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .box {
  background-color: whitesmoke;
  border: 1px solid lightgrey;
  padding: 20px;
  margin: auto;
  margin-bottom: 50px;
  width: 80%;
  border-radius: 5px;
  }
  form {
    margin-left: 50px;
  }
 


</style>
</head>
<body>
<div class="content-margin" style="width:100%">
    <div class="row" style="padding-top: 1.5rem;margin: auto; width:100%">
      <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h2 class="card-title" style="text-align: center;">Candidate Registration Form</h2><br>
          </div>
          <div class="card-body">
            <form id="candidateRegisterForm" method="post" action="{{url('saveForm')}}">
              @csrf
              <ol type="A" style="padding-bottom: 10px;">
              <b><li style="padding-bottom: 10px;">Candidate Details</li></b><br>

              <div class="form-group row">
                <label for="fullName" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Candidate's Full Name">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="icNumber" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">IC Number</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="icNumber" placeholder="Candidate's IC Number">
                </div>
              </div>

              <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Gender</label>
                <div class="col-sm-10">
                  <select class="form-control" id="gender">
                    <option value="" disabled selected hidden>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="yearCourse" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Year / Course</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="yearCourse" id="yearCourse" placeholder="Example: 3/DDWD">
                </div>
              </div>

              <div class="form-group row">
                <label for="matricsNum" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Matrics Number</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="matricsNum" id="matricsNum" placeholder="Example: A20DW0000">
                </div>
              </div>

              <div class="form-group row">
                <label for="faculty" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Faculty</label>
                <div class="col-sm-10">
                  <select class="form-control" name="faculty" id="faculty">
                    <option value="" disabled selected hidden>Select</option>
                    <option>Azman Hashim International Business School (AHIBS)</option>
                    <option>Malaysia-Japan International Institute of Technology (MJIIT)</option>
                    <option>Razak Faculty of Technology and Informatics (FTIR)</option>
                    <option>School of Professional and Continuing Education (SPACE)</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="dateOfBirth" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Date of Birth</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="dateOfBirth">
                </div>
              </div>

              <div class="form-group row">
                <label for="phoneNum" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Phone Number</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="phoneNum" id="phoneNum" placeholder="Example: 0123456789">
                </div>
              </div>

              <div class="form-group row">
                <label for="currCGPA" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Current CGPA</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="currCGPA" placeholder="Example: 4.00">
                </div>
              </div>

              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Address</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="address" rows="3"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="seat" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">What seat will you be running for?</label>
                <div class="col-sm-10">
                  <select class="form-control" name="seat" id="seat">
                    <option value="" disabled selected hidden>Select</option>
                    <option>General</option>
                    <option>Azman Hashim International Business School (AHIBS)</option>
                    <option>Malaysia-Japan International Institute of Technology (MJIIT)</option>
                    <option>Razak Faculty of Technology and Informatics (FTIR)</option>
                    <option>School of Professional and Continuing Education (SPACE)</option>
                  </select>
                </div>
              </div>

              <br><b><li style="padding-bottom: 10px;">Proposer and Supporter Details</li></b><br>
              <b><p>Proposer</p></b>
              <div class="form-group row">
                <label for="proFullName" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="proFullName" placeholder="Proposer's Full Name">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="proIcNumber" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">IC Number</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="proIcNumber" placeholder="Proposer's IC Number">
                </div>
              </div>

              <div class="form-group row">
                <label for="proAddress" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Address</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="proAddress" rows="3"></textarea>
                </div>
              </div>

              <br><b><p>Supporter</p></b>
              <div class="form-group row">
                <label for="supFullName" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="supFullName" placeholder="Supporter's Full Name">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="supIcNumber" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">IC Number</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="supIcNumber" placeholder="Supporter's IC Number">
                </div>
              </div>

              <div class="form-group row">
                <label for="supAddress" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Address</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="supAddress" rows="3"></textarea>
                </div>
              </div>

              <div style="text-align: center; margin-right: 50px; margin-top:50px;">
                <a href= "{{ url('voter/joinmpp') }}" class ="button"> < Previous Page </a>
                {{-- <a href= "{{ url('voter/joinmpp/manifesto') }}" class ="button"> Next Page > </a> --}}
                <button type="submit" class="button">Next Page > </button>
              </div>
            </ol>
          </form>
        </div>
      </div>
    </div>
</div>
</body>
</html>
@endsection