<html>
<head>  <!-- All the styles sheets needed for the website  -->
  <meta name ="viewport" content="width=device-width, initial-scale=1"/>
    <title>Coursework2_WebApp</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
<body>



@include('questionnaire.header')
<!-- Sites nav bar, look  for header.blade.php for more help -->


<style>
.card-img-top {
    width: 50%;}
</style>



@if(isset(Auth::user()->email))
<div class="alert alert-danger success-block">
 <strong>Welcome {{ Auth::user()->email }}</strong>
 <br />
 <a href="{{ url('/main/logout') }}">Logout</a>
</div>
@else
<script>window.location = "/main";</script>
@endif


<!-- container for the main page  -->
  <div class="container">
    <h1 style="text-align:center">Server and Client-Side Scripting</h1>
    <h2 style="text-align:center">CIS2167 CW2:23966025</h2>
  <div class="row">  <!-- bootstrap cards with the questionaire   -->
    <div class="col-sm">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
<div class="col mb-4">
  <div class="card">
    <img src="{{asset('img/1.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Capturing online feedback for primary research</p>
      <div class="dropdown">
  <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Questionnaire
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ url('/questionnaire/create') }}">Start Main Questionnaire</a>
    <a class="dropdown-item" href="{{ url('/questionnaire/create2') }}">Start New Questionnaire</a>  <!-- drop down menu for the  questionaire and the admin    -->
    <a class="dropdown-item" href="{{ url('/questionnaire/') }}">Admin</a>
  </div>
</div>
    </div>
  </div>
</div>
</div>
</div>
<div class="col mb-4">
  <div class="card">
    <img src="{{asset('img/2.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">Exploring the modes and methods of education across</p>
      <div class="dropdown">
  <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Results
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ url('/questionnaire') }}">See Your Anwsers/Results</a>  <!-- drop down menu for the  questionaire and the admin    -->
    <a class="dropdown-item" href="{{ url('/questionnaire/') }}">Admin</a>
  </div>
</div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

<!-- /.container -->
  </div>

  </header>
</body>
</html>
