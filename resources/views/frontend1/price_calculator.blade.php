 @extends('frontend1template')
 @section('content')
 <br>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Price Calculator</title>
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
    <h2 class="font-weight-light text-primary">Price Calculator</h2>
    <p class="color-black-opacity-5">You can calculate here for the charges before you order!</p>
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

<form id="orderform">
  @csrf
  <div class="form-group">
    <div class="panel-body">
      <div class="row">

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
            <select class="form-control" name="inputTypeid" id="inputTypeid">
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
            <select class="form-control" name="InputWeightid" id="InputWeightid">
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
            <select class="form-control" name="InputSizeid" id="InputSizeid">
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
            <label for="inputTotal">Total is: </label>
            <input type="text" class="form-control" name="inputTotal" id="inputTotal" readonly>
          </div>
        </div>

      </div> 
    </div>
  </div>

  <div class="wrapper" align="center">
    <button type="submit" class="btn btn-primary" id="btnCal">Calculate</button>
  </div>

</form><br><br>
</body>
</html>
@endsection


@section('script')
<script type="text/javascript">

  $('#inputTypeid').change(function () {
    if ($(this).find('option:selected').text() = 'express') {
        $('#InputWeightid').prop('disabled', false);
    } else {
        $('#InputWeightid').prop('disabled', true)
    }
});

  $('#inputTypeid').change(function () {
    if ($(this).find('option:selected').text() = 'box') {
        $('#InputSizeid').prop('disabled', false);
    } else {
        $('#InputSizeid').prop('disabled', true)
    }
});

 {{--  $('#btnCal').focus(function (argument) {
    var location_price = parseInt($('.location_price').val());
    var weight_price = parseInt($('.weight_price').val());
    var size_price = parseInt($('.size_price').val());
    var extra_charges = parseInt($('.extra_charges').val());

    var total1 = location_price+weight_price;

    var total2 = location_price+weight_price+extra_charges;

    var total3 = location_price+size_price;

    var total4 = location_price+size_price+extra_charges;

    /*$(this).val(total);*/
  }) --}}
 
</script>
@endsection 
