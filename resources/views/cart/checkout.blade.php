@extends('layouts.app')

@section('content')
<div class="container">





    <div class="row">

        <div class="col-12 col-md-6 mx-auto ">

            <h3>Checkout</h3>

        

            <form action="{{ route('orders.store') }}" method="POST">
            @csrf
       
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Complete name" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Contact Number</label>
                    <input type="text" class="form-control" id="name" placeholder="Contact number"
                        name="contact_number">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name="email">
                </div>

                <div class="form-group">
                    <label for="addrress">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="addrress"></textarea>
                </div>

                <button type="submit" class="btn btn-secondary btn-block">Pay Now</button>
            </form>

        </div>
    </div>
</div>
@endsection