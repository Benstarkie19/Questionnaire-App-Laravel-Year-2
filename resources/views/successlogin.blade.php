<head> <!-- All the styles sheets needed for the website  -->
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

<!-- Sites nav bar, look  for header.blade.php for more help -->


<style>
.card-img-top {
    width: 50%;}
</style>
  @if(isset(Auth::user()->email))
  <div class="alert alert-success" role="alert">
   <strong>Welcome {{ Auth::user()->email }}</strong>
   <br />
   <a href="{{ url('/main/logout') }}">Logout Here</a>   <!-- This is success form for when you input the right login -->
  </div>
 @else
  <script>window.location = "/main";</script>
 @endif
  <h1 style="text-align:center">Server and Client-Side Scripting</h1>
  <h2 style="text-align:center">CIS2167 CW2:23966025</h2>



<a class="nav-link" href="../questionnaire/edit"><button id ="btn">Results</button></a>



<!-- /.container -->
  </div>

  </header>

</body>
</html>
