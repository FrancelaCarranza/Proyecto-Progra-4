@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-12 col-md-9 mx-auto">

            <form action="{{ route('product.search') }}" method="get" class="form-inline float-right my-2 my-lg-0">
                <input class="form-control   mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                    name="productname" autocomplete="off">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>

    </div>




    <div class="row">


        @foreach ($products as $product)
        <div class="col-12 col-md-4  my-2">

            <div class="card mx-auto" style="width: 18rem;">
                <img src="{{$product->image}}" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text">Price: ${{$product->price}}</p>


                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="number" name="quantity" class="form-control" placeholder="Quantity">
                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <a class="btn btn-info mt-2" href="{{ route('products.show',$product->id) }}">View Product</a>
                        <button type="submit" class="btn btn-secondary float-right mt-2">Add to cart</button>

                    </form>
                </div>
            </div>



        </div>
        @endforeach

    </div>
</div>



@endsection