<html>
<head>
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
  <div class="container">
    <h1 style="text-align:center">Server and Client-Side Scripting</h1>
    <h2 style="text-align:center">Login</h2>

    <p> Test login details are: </p>
    <p> ben_apple@gmail.com</p>
    <p> password </p>



    @if(isset(Auth::user()->email))
       <script>window.location="/main/successlogin";</script>
      @endif



    @if ($message = Session::get('error'))
   <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif
 <!-- AUTH for if the login is wrong   -->
    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
         @endforeach
         </ul>
        </div>
       @endif

    <form method="post" action="{{ url('/main/checklogin') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Email</label>
     <input type="email" name="email" class="form-control" /> <!-- Form for the login  -->
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" />  <!-- Form for the login  -->
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-success" value="Login" />  <!-- Form for the login   with green btn-->
    </div>
   </form>


   <p> ADMIN ONLY: </p>
   <p> admin@gmail.com</p>  <!-- PASSWORD FOR ADMIN -->
   <p> password </p>
  </div>



<!-- /.container -->
  </div>

  </header>

  <div id="module-info"></div>

  <script src="main.js"></script>
</body>
</html>
