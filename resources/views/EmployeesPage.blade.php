@extends('layout.MyCustomLayout')

@section('content')
  @foreach ($values as  $value)
    <div class="box-{{$type}}">
      <p>FirstName: {{$value -> firstname}}</p>
      <p>LastName: {{$value -> lastname}}</p>
      <p>DateOfBirth: {{$value -> birthDay}}</p>
      <p>JobTitle: {{$value -> jobTitle}}</p>
      <p>Salary: {{$value -> salary}}$</p>
    </div>

  @endforeach
@endsection
