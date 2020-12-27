@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">

        <div class="col-8">


            <h3>Roles</h3>


        </div>

        <div class="col-4">

            <a href="{{ route('roles.create') }}" class="btn btn-secondary float-right">New</a>

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
                    @foreach ($roles as $role)
                    <tr>
                        <th>{{$role->id}}</th>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>
                        <td>
                            <form action="{{ route('roles.destroy',$role->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>

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