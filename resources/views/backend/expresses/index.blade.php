@extends('backendtemplate')
<!-- @section('title','Staff List') -->

@section('content')
<div class="row">
  <div class="col-md-12">
  <h2>Express Weight List</h2>
  <a href="{{route('express.create')}}" class="btn btn-success">Add New Express (Weight) </a>
  {{-- Table --}}
  <table class="table my-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Type</th>
        <th>Weight</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($expresses as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->type_id}}</td>
          <td>{{$row->weight}}</td>
          <td>{{$row->price}}</td>
          <td>
            <a href="{{route('express.show',$row->id)}}" class="btn btn-info">Detail</a>
            <a href="{{route ('express.edit',$row->id)}}" class="btn btn-warning">Edit</a>
            <form method="post" action="{{ route('express.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
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