@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12">

            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{$product->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="/products" type="submit" class="btn btn-secondary float-right">Back</a>
                </div>
            </div>

           


        </div>
    </div>
</div>
@endsection