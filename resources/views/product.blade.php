@extends('master')

@section('content')
    <div class="container body_content product_body_content">
        <div class="row">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">

                    @foreach ($products as $item)
                         <div class="carousel-item {{$item['id']==1? 'active' : ''}}">
                          <a href="/detail/{{$item['id']}}">
                            <img src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>{{$item['name']}}</h5>
                            <p>{{$item['description']}}</p>
                            </div>
                          </a>
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
        <div class="row trending_product">
            <div class="col-sm-12 py-2"><h2>Trending Products</h2></div>
            @foreach ($products as $item)
                @if ($item['id'] == 5)
                    @break
                @endif
                <div class="col-sm-3">
                  <a href="/detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" />
                  </a>
                    <p class="text-justify">{{$item['name']}}</p>
                </div>
            @endforeach            
        </div>
    </div>
@endsection
