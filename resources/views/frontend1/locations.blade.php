
@extends('frontend1template')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Locations List</title>
  <style>    
    .table, th, td {    
      border: 2px solid #f89d13;  
      margin-left: auto;  
      margin-right: auto;  
      border-collapse: collapse;    
      width: 800px;  
      text-align: center;  
      font-size: 17px; 
    }   
  </style> 
</head>
<body>
  <div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center border-primary">
      <h2 class="font-weight-light text-primary">Location List</h2>
      <p class="color-black-opacity-5">Here are townships we deliver now!</p>
      <p class="color-black-opacity-5">Check the price!</p>
    </div>
  </div>
  <div class="row">
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
          <td><b>{{$row->id}}</b></td>
          <td><b>{{$row->name}}</b></td>
          <td><b>{{$row->price}}</b></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="col-md-6 offset-md-5">
     {{ $locations ->links() }}
   </div>
 </body>
 </html>
 @endsection


