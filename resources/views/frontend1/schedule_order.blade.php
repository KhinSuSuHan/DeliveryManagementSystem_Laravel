 @extends('frontend1template')
 @section('content')
 <br>
 <div class="row justify-content-center mb-5">
  <div class="col-md-7 text-center border-primary">
    <h2 class="font-weight-light text-primary">Schedule Order</h2>
    <p class="color-black-opacity-5">You can schedule your order here!</p>
  </div>
</div>
<form>

  <div class="form-group justify-content-center">
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName">
    </div>
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress">
    </div>
    <div class="form-group">
      <label for="inputPhoneno">Phone No</label>
      <input type="number" class="form-control" id="inputPhoneno">
    </div>
    <div class="form-group">
      <label for="inputLocation">Location</label>
      <input type="text" class="form-control" id="inputLocation">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection

{{--<form id="payroll" method="post" action="{{route('payrolls.store')}}">
      @csrf
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td colspan="4">
              <h5 class="text-center">MMIT Payrolls</h5>
              <p id="staff_name" class="text-center mb-0"></p>
            </td>
          </tr>
          <tr>
            <td colspan="2">Earning:</td>
            <td colspan="2">Dedution:</td>
          </tr>

          <tr>
            <td>Attendance Bonus:</td>
            <td>
              <input type="number" name="a_bonus" class="a_bonus">
            </td>
            <td>Attendance dedution:</td>
            <td>
              <input type="number" name="a_dedu" class="a_dedu">
            </td>
          </tr>

          <tr>
            <td>Other Bonus:</td>
            <td>
              <input type="number" name="o_bonus" class="o_bonus">
            </td>
            <td>Other dedution:</td>
            <td>
              <input type="number" name="o_dedu" class="o_dedu">
            </td>
          </tr>
          <tr>
            <td>Salary:</td>
            <td>
              <input type="number" name="salary" id="salary">
              <input type="hidden" name="staff_id" id="staff_id">
            </td>
            <td>SSB:</td>
            <td>
              <input type="number" name="ssb" id="ssb" >
            </td>
          </tr>

          <tr>
            <td>Earning:</td>
            <td>
              <input type="number" name="earing" class="earing" readonly>
            </td>
            <td>Dedution:</td>
            <td>
              <input type="number" name="dedution" class="dedution" readonly>
            </td>
          </tr>

          <tr>
            <td colspan="3">Total Payment:</td>
            <td>
              <input type="number" name="total" class="total" readonly>
            </td>
          </tr>
        </tbody>
      </table>

      <input type="submit" class="btn btn-success" value="Save">
   <!--  </form> -->--}}