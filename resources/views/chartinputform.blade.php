@extends('master')
@section('main_content')
<form class="row g-3" name="chartform" id="chartform">
    @csrf
  <div class="col-md-3">
    <label for="inputbirthdate" class="form-label">Birth date</label>
    <input type="text" id="birthdate" name="birthdate" placeholder="DD-MM-YYYY [21-02-1984]" class="form-control form-control-sm">
  </div>
  
  <div class="col-md-3">
    <label for="inputbirthtime" class="form-label">Birth time</label>
    <input type="text" class="form-control form-control-sm" id="birthtime" name="birthtime" placeholder="HH:MM:SS [17:22:00]">
  </div>
  <div class="col-md-3">
    <label for="inputbirthplace" class="form-label">Birth place</label>
    <input type="text" class="form-control form-control-sm" id="birthplace" name="birthplace" placeholder = "Pune">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Gender</label>
    <select id="gender" class="form-select form-select-sm">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
   
  <div class="col-12">
    <button type="submit" class="btn btn-primary form-control-sm">Submit</button>
  </div>
</form>
@endsection