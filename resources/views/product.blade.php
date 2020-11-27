@extends('master')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            
              <ol class="carousel-indicators">

              @for ($i = 0; $i < count($data); $i++)

                  @if ($i == 0)
                      <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}" class="active"></li>
                  @else       
                      <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}"></li>
                  @endif

              @endfor
              </ol>


              <div class="carousel-inner">
                  @foreach ($data as $product)
                  <div class="carousel-item {{ $product['id']==1?'active':'' }}">
                    <img src="{{ $product['gallery'] }}" class="d-block w-100 slider-img" alt="Image">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{{ $product['name'] }}</h5>
                      <p>{{ $product['descr'] }}</p>
                    </div>
                  </div>
                  @endforeach
              </div>


              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-12 mt-5 mb-5 text-center">
              <h2>Trending Products</h2>
            </div>

            @foreach ($data as $product)
              <div class="col-4 mb-3">
                <img src="{{ $product['gallery'] }}" class="product-image" alt="Image">
                <div class="">
                  <h5>{{ $product['name'] }}</h5>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</section>
@endsection