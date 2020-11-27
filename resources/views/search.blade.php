@extends('master')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3 mb-3 text-center">
              <h3>Search Products</h3>
              <a href="#">Filter</a>
            </div>

            @foreach ($data as $product)
            <div class="col-lg-3 col-md-6 mb-5 text-center">
                <a href="detail/{{ $product['id'] }}">
                  <div class="product-bg">
                    <img src="{{ $product['gallery'] }}" class="product-image" alt="Image">
                    <div>
                      <h5>{{ $product['name'] }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection