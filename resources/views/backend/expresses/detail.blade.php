@extends('backendtemplate')
<!-- @section('title','Staff Detail') -->

 @section('content')
  <h1>Express Detail</h1>
  <p>Type: {{$express-> type_id}}</p>
  <p>Weight: {{$express->weight}}</p>
  <p>Price: {{$express->price}}</p>

  <a href="{{route('express.index')}}" class="btn btn-primary">Back</a>
@endsection


  