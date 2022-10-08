
{{-- ADMIN MPP ALUMNI CONTENT --}}
@extends('layouts.admin')
@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Admin MPP Alumni Content</h1>

{{-- ADMIN VOTING CONTENT (1)--}}
@extends('layouts.admin')
@extends('layouts.app')
@section('content2')
    {{-- first four column --}}
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
</style>
</head>
<body>
    <div class="row" style="padding-top: 1.5rem; padding-left: 1.5rem;">
      
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title" style="text-align: center;">GENERAL SEATS</h2>
          </div>
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Please vote (2) seats</h4><br>
            
        

            <div class="container" style="text-align: center;">  
              <a href= "{{ url('aboutmpp') }}" class ="button"> Vote </a>
            </div>  
          
          </div>
          <div class="card-footer">
            <hr>
          </div>

        </div>
      </div>
    </div>
    
</body>
</html>
@endsection