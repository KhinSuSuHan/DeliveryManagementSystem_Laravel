@extends('backendtemplate')
<!-- @section('title','Staff Detail') -->

 @section('content')
  <h1>Boxes Detail</h1>
  <p>Type: {{$box-> type_id}}</p>
  <p>Size: {{$box->size}}</p>
  <p>Price: {{$box->price}}</p>

  <a href="{{route('boxes.index')}}" class="btn btn-primary">Back</a>
@endsection


  