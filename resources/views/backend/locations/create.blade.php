@extends('backendtemplate')
<!-- @section('title','Staff Create') -->

@section('content')
  <h1>Locations Create</h1>
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
  <form method="post" action="{{route('locations.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName">
    </div>

    <div class="form-group">
      <label for="InputPrice">Price:</label>
      <input type="text" name="price" class="form-control" id="InputPrice">
    </div>


    <button type="submit" class="btn btn-primary">Create</button>
     <a href="{{route('locations.index')}}" class="btn btn-primary">Back</a>
  </form>
@endsection