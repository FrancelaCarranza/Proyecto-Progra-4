@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-md-6 mx-auto">



            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="category name" name="name"
                    value="{{$category->name}}">
            </div>


            <div class="form-group">
                <label for="description">Example textarea</label>
                <textarea class="form-control" id="description" rows="3"
                    name="description">{{$category->description}}</textarea>
            </div>
            <a href="/categories" type="submit" class="btn btn-secondary float-right">Back</a>



        </div>
    </div>
</div>
@endsection