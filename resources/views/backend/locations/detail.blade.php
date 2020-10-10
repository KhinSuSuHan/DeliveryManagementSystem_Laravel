


@extends('backendtemplate')
<!-- @section('title','Staff Detail') -->

@section('content')
<h1>Locations Detail</h1>

<div class="card mb-3">
  <div class="row no-gutters">

    <div class="col-md-8">
      <div class="card-body">
       <!--  <h4 class="card-title">Locations Detail</h4> -->
       <p class="card-text">Name: {{$location->name}}</p>
       <p class="card-text">Price: {{$location->price}}</p>
     </div>
   </div>
 </div>
</div>
<a href="{{route('locations.index')}}" class="btn btn-primary mb-2">Back</a>

@endsection