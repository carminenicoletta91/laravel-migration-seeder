@extends('layout.MyCustomLayout')

@section('content')
  @foreach ($values as  $value)
    <div class="box-{{$type}}">
      <p>Name: {{$value -> name}}</p>
      <p>Address: {{$value -> address}}</p>
      <p>City: {{$value -> city}}</p>
      <p>Nation: {{$value -> nation}}</p>
      
    </div>

  @endforeach
@endsection
