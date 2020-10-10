@extends('backendtemplate')
<!-- @section('title','Staff Edit') -->

@section('content')
  <h1>Boxes Edit</h1>
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
  <form method="post" action="{{route('boxes.update',$box->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
     <div class="form-group">
      <label for="InputType">Type:</label>
      <input type="text" name="type_id" class="form-control" id="InputType" value="{{$boxes->type_id}}">
    </div>

      <div class="form-group">
      <label for="InputType">Type:</label>
      <select name="type_id" class="form-control" id="InputType" value="{{$boxes->type_id}}">
        <optgroup label="Choose Type">
          @foreach($boxes as $row)
          <option value="{{$row->type_id}}">{{$row->name}}</option>
          @endforeach
        </optgroup>
      </select>
    </div>


    <div class="form-group">
      <label for="InputSize">Size:</label>
      <input type="text" name="size" class="form-control" id="InputSize" value="{{$box->size}}">
    </div>

    <div class="form-group">
      <label for="InputPrice">Price:</label>
      <input type="text" name="price" class="form-control" id="InputPrice" value="{{$box->price}}">
    </div>



    <button type="submit" class="btn btn-primary">Update</button>
     <a href="{{route('locations.index')}}" class="btn btn-primary">Back</a>
  </form>
@endsection



