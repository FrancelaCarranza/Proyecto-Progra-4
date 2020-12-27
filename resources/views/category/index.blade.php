@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">

        <div class="col-8">


            <h3>Categories</h3>


        </div>

        <div class="col-4">

            <a href="{{ route('categories.create') }}" class="btn btn-secondary float-right">New</a>

        </div>

    </div>


    <div class="row">

        <div class="col-12 ">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            <form action="{{ route('categories.destroy',$category->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>

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