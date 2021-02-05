@extends('master') <!-- Sites nav bar, look  for header.blade.php for more help -->

<!-- Sites nav bar, look  for header.blade.php for more help -->
@include('questionnaire.header')
@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h1 aling="center">Code Editors</h1>

  <p aling="center">This little survey should only take about a couple of minutes to complete and there's no right or wrong it's all about your experience With Questionaire Design and it's use in research when doing work.
If you wish to opt out just contact the site admin.</p>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('questionnaire')}}">
     {{csrf_field()}}
     <div class="form-group">
       <h3> How important is questionnaire design based on research you've done in the past?</h3>
         <p>Answer on the based of 1 = Extremely Important, 2 = Very Important, 3 = Somewhat Important, 4 = Not Very Important, 5 = Not at all Important]</p>
      <input type="number" name="answer1" class="form-control form-control-lg" placeholder="Answer 1"  min="1" max="5" />
     </div>

     <h3> Have you not finshed a question in the past due to it being long, not short and simple?</h3>
     <p>1 = Yes   2 = No </p>

     <div class="form-group">
      <input type="number" name="answer2" class="form-control form-control form-control-lg" placeholder="Answer 2"  min="1" max="5" />
     </div>
<h3> Would you be more likely to answer a questionnaire with bright colors?</h3>
<p>1 = Yes   2 = No </p>

     <div class="form-group">
      <input type="number" name="answer3" class="form-control form-control form-control-lg" placeholder="Answer 3" min="1" max="2" />
     </div>

<h3> Has emotional language changed your opinion on answering a question in the past?</h3>
<p>1 = Yes   2 = No </p>

     <div class="form-group">
      <input type="number" name="answer4" class="form-control form-control form-control-lg" placeholder="Answer 4" min="1" max="2" />
     </div>

     <h3> What type of questions do you find is the best to answer in a questionnaire?</h3>
     <p>1 = Open-End 2 = Closed  End 3 = Multiple Choice </p>
     <div class="form-group">
      <input type="number" name="number" class="form-control  form-control form-control-lg"  min="1" max="3" placeholder="Answer 5" />
     </div>

     <div class="form-group">
      <input type="submit"   class="btn btn-primary" />
     </div>
    </form>
   </div>
  </div>
  @endsection
