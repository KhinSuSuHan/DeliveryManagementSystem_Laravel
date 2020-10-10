@extends('backendtemplate')
<!-- @section('title','Staff Edit') -->

@section('content')
  <h1>Locations Edit</h1>
  {{-- Error --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- Form --}}
  <form method="post" action="{{route('locations.edit',$location->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
     <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName" value="{{$locations->name}}">
    </div>

    <div class="form-group">
      <label for="InputPrice">Price:</label>
      <input type="text" name="price" class="form-control" id="InputPrice" value="{{$locations->price}}">
    </div>


    <button type="submit" class="btn btn-primary">Update</button>
     <a href="{{route('locations.index')}}" class="btn btn-primary">Back</a>
  </form>
@endsection