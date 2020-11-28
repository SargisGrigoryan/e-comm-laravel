@extends('master')
@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-12 mb-3">
            <h2>Your order list</h2>
        </div>
        <div class="col-12">
            <table class="table">
                <tbody>
                    @foreach ($data as $order)
                    <tr>
                        <th><a href="detail/{{ $order->id }}"><img class="cart-image" src="{{ $order->gallery }}" alt="Image"></a></th>
                        <td>
                            <ul>
                                <li>Name: <b>{{ $order->name }}</b></li>
                                <li>Price ${{ $order->price }}</li>
                                <li>Status: <i>{{ $order->status }}</i></li>
                                <li>Address: {{ $order->address }}</li>
                                <li>Pay. Method: {{ $order->payment_method }}</li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection