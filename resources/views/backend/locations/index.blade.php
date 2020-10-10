@extends('backendtemplate')
<!-- @section('title','Staff List') -->

@section('content')
<div class="row">
  <div class="col-md-12">
  <h1>Locations List</h1>
  <a href="{{route('locations.create')}}" class="btn btn-success">Add New Locations</a>
  {{-- Table --}}
  <table class="table my-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($locations as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->name}}</td>
          <td>{{$row->price}}</td>
          <td>
            <a href="{{route('locations.show',$row->id)}}" class="btn btn-info">Detail</a>
            <a href="{{route ('locations.edit',$row->id)}}" class="btn btn-warning">Edit</a>
            <form method="post" action="{{ route('locations.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
              @csrf
              @method('DELETE')
              <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection