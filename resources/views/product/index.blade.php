@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">

        <div class="col-8">


            <h3>Products</h3>


        </div>

        <div class="col-4">

            <a href="{{ route('products.create') }}" class="btn btn-secondary float-right">New</a>

        </div>

    </div>


    <div class="row">

        <div class="col-12 ">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Description</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th>{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>${{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach


                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection