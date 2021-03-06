 @extends('frontend1template')
 @section('content')
 <br>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Schedule Order</title>
   <style>  
    #orderform{
      margin-left: 25%;
      margin-right:25%;
      width: 50%;
    }

  :checked {
  margin-left: 25px;
  border: 3px solid #f89d13;
}

  </style> 
</head>
<body>
 <div class="row justify-content-center mb-5">
  <div class="col-md-7 text-center border-primary">
    <h2 class="font-weight-light text-primary">Schedule Order</h2>
    <p class="color-black-opacity-5">You can schedule your order here!</p>
  </div>
</div>

@if($errors->any())
<div class="alert alert-warning">
  <ol>
    @foreach($errors->all() as $error)
    <li> {{ $error }} </li>
    @endforeach
  </ol>   
</div>
@endif

<form method="post" id="orderform" action="{{route('scheduleorder.store')}}">  
  @csrf
  <div class="form-group">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">  
            <label for="inputUserid">User Name</label>
            <input type="text" class="form-control" name="inputUserid" id="inputUserid">  {{-- #f89d13 --}}
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="inputPhoneno">Phone No</label><br>
            <input id="telNo" name="inputPhoneno" type="text"
            placeholder="09-xxxx xxxxx">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <textarea class="form-control" name="inputAddress" id="inputAddress"></textarea>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="inputDate">Date</label><br>
            <input type="date" id="start" name="inputDate"
            value="2020-10-10">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="inputLocationid">Location</label>
            <select class="form-control" name="inputLocationid">
              @foreach($locations as $row)
              <option value="{{ $row ['id'] }}">
                {{ $row ['name'] }}
              </option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="InputTypeid">Type</label>
            <select class="form-control" name="inputTypeid">
              @foreach($types as $row)
              <option value="{{$row->id}}">
                {{$row->name}}
              </option>
              @endforeach
            </select>
          </div>
        </div>


        {{-- Need to test condition--}}

        {{--if choose Express --}}
        <div class="col-md-6">
          <div class="form-group">
            <label for="InputWeightid">Weight</label>
            <select class="form-control" name="InputWeightid">
              @foreach($expresses as $row)
              <option value="{{$row->id}}">
                {{$row->weight}}
              </option>
              @endforeach
            </select>
          </div>
        </div>

        {{--if choose Box --}}
        <div class="col-md-6">
          <div class="form-group">
            <label for="InputSizeid">Size</label>
            <select class="form-control" name="InputSizeid">
              @foreach($boxes as $row)
              <option value="{{$row->id}}">
                {{$row->size}}
              </option>
              @endforeach
            </select>
          </div>
        </div>


        <div class="col-md-12">
         <div class="form-group">
          <input type="checkbox" name="inputCheckbox" class="checkbox" id="opt-in">
          <label for="opt-in"><i>Check if your Percel is more than 3 <b>(Extra 2000 Charges)<b>!</i></label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="inputTotal">Total</label>
          <input type="text" class="form-control" name="inputTotal" id="inputTotal" readonly>
        </div>
      </div>

    </div> 
  </div>
</div>

<div class="wrapper" align="center">
  <button type="submit" class="btn btn-primary">Schedule Order</button>
</div>

</form><br><br>
</body>
</html>
@endsection










