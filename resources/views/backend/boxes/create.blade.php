@extends('backendtemplate')
<!-- @section('title','Staff Create') -->

@section('content')
  <h1>Boxes Create</h1>
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
  <form method="post" action="{{route('boxes.store')}}" enctype="multipart/form-data">
    @csrf


   <div class="form-group">
      <label for="InputType">Type:</label>
      <select name="type_id" class="form-control" id="InputType">
        <optgroup label="Choose Type">
          @foreach($types as $row)
          <option value="{{$row->id}}">{{$row->name}}</option>
          @endforeach
        </optgroup>
      </select>
    </div>


    <div class="form-group">
      <label for="InputSize">Size:</label>
      <input type="text" name="size" class="form-control" id="InputSize">
    </div>

    <div class="form-group">
      <label for="InputPrice">Price:</label>
      <input type="text" name="price" class="form-control" id="InputPrice">
    </div>


    <button type="submit" class="btn btn-primary">Create</button>
     <a href="{{route('boxes.index')}}" class="btn btn-primary">Back</a>
  </form>
@endsection