{{-- VOTER SUBMIT MANIFESTO --}}
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
ol, li {
  padding-bottom: 10px;
}
form {
  margin-left: 50px;
}


</style>
</head>
<body>
    <div class="row" style="padding-top: 1.5rem; padding-left: 1.5rem;">
      
      <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h2 class="card-title" style="text-align: center;">Submit Manifesto</h2><br>
          </div>
          <div class="card-body">
            <form>
            <ol type="A" start="3">
            <b><li>Attach Documents</li></b><br>

              <div class="form-group row">
                <label for="formalPhoto" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem; padding-top: 0px">Formal Passport Photo</label>
                <div class="custom-file col-sm-10">
                  <input type="file" class="custom-file-input col-sm-2 col-form-label" id="formalPhoto">
                  <label class="custom-file-label" for="formalPhoto">Choose file</label>
                </div>
              </div>

              <div class="form-group row">
                <label for="matricsCard" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem; padding-top: 0px">Copy of Matrics Card</label>
                <div class="custom-file col-sm-10">
                  <input type="file" class="custom-file-input col-sm-2 col-form-label" id="matricsCard">
                  <label class="custom-file-label" for="matricsCard">Choose file</label>
                </div>
              </div>

              <div class="form-group row">
                <label for="manifesto" class="col-sm-2 col-form-label text-dark" style="font-size:1.0rem">Manifesto</label>
                <div class="col-sm-10" style="padding-left: 0px; padding-right: 0px">
                  <textarea class="form-control" id="manifesto" rows="10"></textarea>
                </div>
              </div>

              <div style="text-align: center; margin-right: 50px; margin-top:50px;">
                <a href= "{{ url('voter/joinmpp/register') }}" class ="button"> < Previous Page </a>
                <a href= "{{ url('voter/joinmpp/payment') }}" class ="button"> Proceed to Payment Page > </a>
                <!--<button type="submit" class="button">Proceed to Payment Page</button>-->
              </div>
              </ol>
            </form>
        </div>
      </div>
    </div>
    
</body>
</html>
@endsection