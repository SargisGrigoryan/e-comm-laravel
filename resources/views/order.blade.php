@extends('master')
@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-12 mb-3">
            <h2>Your order</h2>
        </div>
        <div class="col-12">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>${{ $data }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>${{ $data + 10 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 mt-3">
            <h2>Payment</h2>
            <hr>
        </div>
        <div class="col-12">
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input2">Delivery address</label>
                    <input type="text" name="address" class="form-control" id="input2">
                </div>
                <div class="form-group">
                    <h5>Select method</h5>
                    <hr>
                    <ul>
                        <li><label><input type="radio" name="payment" value="cash"><span> Online payment</span></label></li>
                        <li><label><input type="radio" name="payment" value="cash"><span> EMI payment</span></label></li>
                        <li><label><input type="radio" name="payment" value="cash"><span> Payment on delivery</span></label></li>
                    </ul>
                </div>
                <button type="submit" class="btn btn-success">Pay now</button>
            </form>
        </div>
    </div>
</div>
@endsection