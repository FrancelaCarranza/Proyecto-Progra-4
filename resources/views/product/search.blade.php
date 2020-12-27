@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if(!$products->isEmpty())
        @foreach ($products as $product)
        <div class="col-12 col-md-4  my-2">

            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{$product->image}}" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>


                </div>
            </div>



        </div>



        @endforeach

        @else
        <div class="alert alert-danger mx-auto" role="alert">
            Sorry we couldn't find any product with the name: {{$product}}
        </div>



        @endif

    </div>
</div>
@endsection