@extends('backendtemplate')
<!-- @section('title','Staff Edit') -->

@section('content')
  <h1>Express Edit</h1>
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
  <form method="post" action="{{route('express.update',$expresses->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
     <div class="form-group">
      <label for="InputType">Type:</label>
      <input type="text" name="type_id" class="form-control" id="InputType" value="{{$boxes->type_id}}">
    </div>

      <div class="form-group">
      <label for="InputType">Type:</label>
      <select name="type_id" class="form-control" id="InputType" value="{{$expresses->type_id}}">
        <optgroup label="Choose Type">
          @foreach($expresses as $row)
          <option value="{{$row->type_id}}">{{$row->name}}</option>
          @endforeach
        </optgroup>
      </select>
    </div>

   <div class="form-group">
      <label for="InputWeight">Weight:</label>
      <input type="text" name="weight" class="form-control" id="InputWeight" value="{{$expresses->weight}}">
    </div>

    <div class="form-group">
      <label for="InputPrice">Price:</label>
      <input type="text" name="price" class="form-control" id="InputPrice" value="{{$expresses->price}}">
    </div>



    <button type="submit" class="btn btn-primary">Update</button>
     <a href="{{route('expresses.index')}}" class="btn btn-primary">Back</a>
  </form>
@endsection



