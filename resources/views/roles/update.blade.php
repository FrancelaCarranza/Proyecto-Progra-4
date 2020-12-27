@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-md-6 mx-auto">

            <form action="{{ route('roles.update',$role->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="role name" name="name"
                        value="{{$role->name}}">
                </div>


                <div class="form-group">
                    <label for="description">Example textarea</label>
                    <textarea class="form-control" id="description" rows="3"
                        name="description">{{$role->description}}</textarea>
                </div>

                <button type="submit" class="btn btn-secondary float-right">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection