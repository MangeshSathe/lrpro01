@extends('master')
@section('main_content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form class="row g-3" name="chartform" id="chartform" method="post" action="{{route('save')}}">
    @csrf
  <div class="col-md-3">
    <label for="inputbirthdate" class="form-label">Birth date</label>
    <input type="text" id="birthdate" name="birthdate" value = "21-02-1984" placeholder="DD-MM-YYYY [21-02-1984]" class="form-control form-control-sm">
  </div>
  
  <div class="col-md-3">
    <label for="inputbirthtime" class="form-label">Birth time</label>
    <input type="text" class="form-control form-control-sm" id="birthtime" value = "17:22:00" name="birthtime" placeholder="HH:MM:SS [17:22:00]">
  </div>
  <div class="col-md-3">
    <label for="inputbirthplace" class="form-label">Birth place</label>
    <input type="text" class="form-control form-control-sm" id="birthplace" value="Pune" name="birthplace" placeholder = "Pune">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Gender</label>
    <select id="gender" name ="gender" class="form-select form-select-sm">
      <option selected>Choose...</option>
      <option value="male" selected>Male</option>
      <option value="female">Female</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary form-control-sm">Submit</button>
  </div>
</form>
@endsection