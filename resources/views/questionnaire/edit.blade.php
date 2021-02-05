@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('questionnaireController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="answer1" class="form-control" value="{{$questionnaire->answer1}}" placeholder="Question 1" />
   </div>
   <div class="form-group">
    <input type="text" name="answer2" class="form-control" value="{{$questionnaire->answer2}}" placeholder="Question 2" />
   </div>
   <div class="form-group">
    <input type="text" name="answer3" class="form-control" value="{{$questionnaire->answer3}}" placeholder="Question 3" />
   </div>
   <div class="form-group">
    <input type="text" name="answer4" class="form-control" value="{{$questionnaire->answer4}}" placeholder="Question 4" />
   </div>
   <div class="form-group">
    <input type="text" name="number" class="form-control" value="{{$questionnaire->number}}" placeholder="Question 5" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection
