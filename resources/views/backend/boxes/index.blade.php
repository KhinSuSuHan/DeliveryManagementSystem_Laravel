@extends('backendtemplate')
<!-- @section('title','Staff List') -->

@section('content')
<div class="row">
  <div class="col-md-12">
  <h1>Boxes List</h1>
  <a href="{{route('boxes.create')}}" class="btn btn-success">Add New Boxes</a>
  {{-- Table --}}
  <table class="table my-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Type</th>
        <th>Size</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($boxes as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->type_id}}</td>
          <td>{{$row->size}}</td>
          <td>{{$row->price}}</td>
          <td>
            <a href="{{route('boxes.show',$row->id)}}" class="btn btn-info">Detail</a>
            <a href="{{route ('boxes.edit',$row->id)}}" class="btn btn-warning">Edit</a>
            <form method="post" action="{{ route('boxes.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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