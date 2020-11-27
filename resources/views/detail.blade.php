@extends('master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Product detail</h1>
                <hr>
            </div>
            <div class="col-md-6">
                <img src="{{ $data['gallery'] }}" alt="Image" class="detail-image">
            </div>
            <div class="col-md-6">
                <ul>
                    <li><a href="/">Go back</a></li>
                    <li><h4>{{ $data['name'] }}</h4></li>
                    <li><b>${{ $data['price'] }}</b></li>
                    <li>Category - {{ $data['category'] }}</li>
                </ul>
                <button class="btn btn-primary">Add to Card</button>
                <button class="btn btn-success">Buy now</button>
                <hr>
                <div>Descr`</div>
                <div>{{ $data['descr'] }}</div>
            </div>
        </div>
    </div>
</section>
@endsection