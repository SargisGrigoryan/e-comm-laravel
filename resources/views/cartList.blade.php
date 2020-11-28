@extends('master')
@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <h2>Your cart list</h2>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td><img class="cart-image" src="{{ $product->gallery }}" alt="Image"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td><button class="btn btn-warning"><span class="material-icons">delete</span></button></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection