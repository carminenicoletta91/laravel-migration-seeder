@extends('layout.MyCustomLayout')

@section('content')
  @foreach ($values as  $value)
    <div class="box-{{$type}}">
      <p>Name: {{$value -> name}}</p>
      <p>PhoneNumber: {{$value -> phone}}</p>
      <p>Email: {{$value -> mail}}</p>
      <p>WebSite: {{$value -> website}}</p>
      
    </div>

  @endforeach
@endsection
