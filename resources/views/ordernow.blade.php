@extends('master')
@section("content")
<div class="trending" style="margin: 50px">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <th scope="row">Amount</th>
                <td>{{$total}} $</td>
              </tr>
              <tr>
                <th scope="row">Tax</th>
                <td>0 $</td>
              </tr>
              <tr>
                <th scope="row">Delivery</th>
                <td>10 $</td>
              </tr>
              <tr>
                <th scope="row" style="font-size: 20px">Total</th>
                <td style="font-size: 18px">{{$total + 10}} $</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group" style="margin-top: 150px">
                  <label for="exampleFormControlTextarea1">your address</label>
                  <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" style="font-weight: bold">Payment Method</label><br><br>
                    <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br><br>
                    <input type="radio" value="cash" name="payment"> <span>EMI Payment</span><br><br>
                    <input type="radio" value="cash" name="payment"> <span>Payment On Delivery</span><br><br>
                  </div>
                  <button type="submit" class="btn btn-success">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection
