
@extends('frontend1template')
@section('content')


 <div class="row justify-content-center mb-5">
  <div class="col-md-7 text-center border-primary">
    <h2 class="font-weight-light text-primary">Location List</h2>
    <p class="color-black-opacity-5">Here are township we deliver now!</p>
     <p class="color-black-opacity-5">Check the price!</p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
 
 
  {{-- Table --}}
  <table class="table my-3">
  	
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($locations as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->name}}</td>
          <td>{{$row->price}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
<div class="container" align="center">
 {{ $locations ->links() }}
 </div>

@endsection


