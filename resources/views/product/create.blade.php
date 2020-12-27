@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="product name" name="name">
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" class="form-control" id="image" placeholder="url image" name="image">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="product price" name="price">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" placeholder="stock" name="stock">
                </div>

                <div class="form-group">
                    <label for="description">Example textarea</label>
                    <textarea class="form-control" id="description" rows="3" name="description"
                        placeholder="description"></textarea>
                </div>

                <button type="submit" class="btn btn-secondary float-right">Save</button>
            </form>

        </div>
    </div>
</div>
@endsection