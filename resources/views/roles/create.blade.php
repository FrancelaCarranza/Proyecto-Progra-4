@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Role name" name="name">
                </div>


                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-secondary float-right">Save</button>
            </form>

        </div>
    </div>
</div>
@endsection