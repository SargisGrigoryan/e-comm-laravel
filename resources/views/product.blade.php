@extends('master')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            
              <ol class="carousel-indicators">

              @for ($i = 0; $i < 4; $i++)

                  @if ($i == 0)
                      <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}" class="active"></li>
                  @else       
                      <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}"></li>
                  @endif

              @endfor
              </ol>


              <div class="carousel-inner">
                  @for ($i = 0; $i < 4; $i++)
                    <div class="carousel-item {{ $data[$i]['id']==1?'active':'' }}">
                      <a href="detail/{{ $data[$i]['id'] }}">
                        <img src="{{ $data[$i]['slider'] }}" class="d-block w-100 slider-img" alt="Image">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>{{ $data[$i]['name'] }}</h5>
                        </div>
                      </a>
                    </div>
                  @endfor
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
            <div class="col-12 mt-3 mb-3 text-center">
              <h3>Top Products</h3>
            </div>

            @for ($i = 0; $i < 6; $i++)
              <div class="col-lg-2 col-md-4 mb-3 text-center">
                <a href="detail/{{ $data[$i]['id'] }}">
                  <img src="{{ $data[$i]['gallery'] }}" class="top-product-image" alt="Image">
                  <div>
                    <h5>{{ $data[$i]['name'] }}</h5>
                  </div>
                </a>
              </div>
            @endfor

            <div class="col-12 mt-5 mb-5 text-center">
              <h2>All Products</h2>
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