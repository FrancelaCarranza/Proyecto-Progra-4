@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">

        <div class="col-8">


            <h3>orders</h3>


        </div>

        <div class="col-4">

        </div>

    </div>


    <div class="row">

        <div class="col-12 ">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>

                        @if ( Auth::user()->role_id == 1)

                        <th scope="col">Option</th>



                        @endif


                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <th>{{$order->id}}</th>
                        <td>{{$order->name}}</td>

                        <td>

                            @if($order->status==0)
                            Pending
                            @else
                            In progress
                            @endif
                        </td>
                        @if ( Auth::user()->role_id == 1)

                        <td>


                            <form action="{{ route('orders.update',$order->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Verify</button>


                            </form>
                            <form action="{{ route('orders.destroy',$order->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>



                                @csrf


                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>



                        @endif


                    </tr>

                    @endforeach




                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection