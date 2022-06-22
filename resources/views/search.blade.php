@extends('master')

@section('content')
    <div class="container body_content product_body_content">
        <div class="col-sm-12 py-2"><h2>{{$_GET['q']}}</h2></div>            
        @foreach ($data_r as $item)
            <div class="row trending_product">      
                <div class="col-sm-3">
                  <a href="/detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" />
                  </a>
                </div>
                <div class="col-sm-9">
                    <p class="text-justify"><a href="/detail/{{$item['id']}}">{{$item['name']}}</a></p>
                    <br>
                    <span>{{$item['description']}}</span>
                </div>
            </div>
        @endforeach        
    </div>
@endsection
