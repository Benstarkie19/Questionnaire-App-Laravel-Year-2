@extends('master')

@include('questionnaire.header')
<!-- Sites nav bar, look  for header.blade.php for more help -->

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Questionnaire Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('questionnaire.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>QUESTION: 1</th>
    <th>QUESTION: 2</th>
    <th>QUESTION: 3</th>
    <th>QUESTION: 4</th>
    <th>QUESTION: 5</th>
   </tr>
   @foreach($questionnaire as $row)
   <tr>
    <td>{{$row['answer1']}}</td>
    <td>{{$row['answer2']}}</td>
    <td>{{$row['answer3']}}</td>
    <td>{{$row['answer4']}}</td>
    <td>{{$row['number']}}</td>
    <td><a href="{{action('questionnaireController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('questionnaireController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection
