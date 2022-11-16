{{-- VOTER JOIN MPP CONTENT --}}
@extends('layouts.voter')
@extends('layouts.app')

@section('content4')
<!DOCTYPE html>
<html>
<head>
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
table, td, th {
  border: 1px solid lightgrey;
  text-align: center;
}

table {
  width: 80%;
  border-collapse: collapse;
  margin:auto;
  margin-bottom: 50px;
}
.paddingli{
  padding-bottom: 10px;
}

</style>
</head>
<body>
<div class="content-margin" style="width:100%">
    <div class="row" style="padding-top: 1.5rem;margin: auto; width:100%">
      <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h2 class="card-title" style="text-align: center;">Eligibility To Be Nominated As An MPP Candidate</h2><br>
          </div>
          <div class="card-body">
            <div class="box">
              <ol type="1">
                <li class="paddingli">Registered under clause 1.2</li>
                <li class="paddingli">Sat for the first final examination caused by UTM and obtain;</li>
    
                <ul style="list-style-type:disc;">
                  <li class="paddingli">Undergraduate: a CGPA of not less than 3.00</li>
                  <li class="paddingli">Postgraduate: a satisfactory standing (MM)</li>
                </ul>
              
                <li class="paddingli">Free from any misconduct and debt</li>
                <li class="paddingli">Have at least two full semesters of study in UTM</li>
                <li class="paddingli">Not undergoing Gap Year / Teaching Practice / Industrial Training</li>
                <li class="paddingli">Not a commitee or secretariat of JPMPP session 2022/2023</li>
              </ol>
            </div>
            <div class="card-header">
            <h2 class="card-title" style="text-align: center;">No. Of Seats Contested</h2><br>
          </div>
          <div class="card-body">
            
            <table>
              <tr style="background-color:whitesmoke">
                <th>Seat</th>
                <th>No. of Seats Contested</th>
              </tr>
              <tr>
                <td>General</td>
                <td>1</td>
              </tr>
              <tr>
                <td>Azman Hashim International Business School</td>
                <td>1</td>
              </tr>
              <tr>
                <td>Malaysia-Japan International Institute of Technology</td>
                <td>1</td>
              </tr>
              <tr>
                <td>Razak Faculty of Technology and Informatics</td>
                <td>1</td>
              </tr>
              <tr>
                <td>School of Professional and Continuing Education</td>
                <td>1</td>
              </tr>
            </table>

          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">Steps To Register As An MPP Candidate</h2><br>
          </div>
          <div class="card-body">
            <div class="box">
              <ol type="1">
                <li class="paddingli">Fill in the candidate registration form</li>
                <li class="paddingli">Payment of RM150 for general seat or RM100 for faculty seat must be made after filling in the registration form.</li>
                <li class="paddingli">Candidate registration confirmation will be sent by JPMPP to the candidate's email. Further process will be conducted via email.</li>
                <li class="paddingli">Please contact JPMPP if you have any enquiries.</li>
              </ol>
            </div>
            <div class="container" style="text-align: center;">  
              <a href= "{{ url('voter/joinmpp/register') }}" class ="button"> Register as a Candidate now! </a>
            </div>  
          
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>
@endsection