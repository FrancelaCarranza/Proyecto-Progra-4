<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use Cart;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Cart::getContent();
     
    // dd($items);
        return view('cart.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity,
            ),
          ));

          return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // delete an item on cart
Cart::remove($id);
return back();
    }



    public function add(Request $request){

        $product = product::find($request->product_id);
// add the product to cart
Cart::add(array(
    'id' =>$product->id,
    'name' => $product->name,
    'image' => $product->image,
    'price' => $product->price,
    'quantity' => $request->quantity,
));



return redirect()->route('cart.index');


    }


    public function checkout(){




return view('cart.checkout');


    }


}