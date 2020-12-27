@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">

        <div class="col-12">

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($items as $row)


                    <tr>
                        
                        <td> {{$row->name}}</td>
                        <td>

                            <form action="{{ route('cart.update',$row->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="d-flex">

                                    <input type="number" class="form-control w-50" value="{{$row->quantity}}"
                                        name="quantity">
                                    <button tpy="submit " class="btn btn-primary ml-4"
                                        href="{{ route('cart.edit',$row->id) }}">Edit</button>
                                </div>
                            </form>



                        </td>
                        <td> Price $ {{$row->price}}</td>
                        <td>



                            <form action="{{ route('cart.destroy',$row->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>


                        </td>
                    </tr>




                    @endforeach





                </tbody>
            </table>


            <div class="row">
            
            <div class="col-12">
            
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Total products</th>
      <th scope="col">Total Price</th>
      <th scope="col">Checkout</th>
    </tr>
  </thead>
  <tbody>

@if(Cart::getTotal()>0)
<tr>
     
      <td> {{count(Cart::getContent())}}</td>
      <th> $ {{Cart::getTotal()}}</th>
      <td>
       <a href="{{route('cart.checkout') }}" class="btn btn-info btn-block"> CheckOut</a>
      </td>
      
    </tr>
@endif

   
  </tbody>
</table>
            
            
            </div>
            
            </div>

        </div>



    </div>





</div>
@endsection