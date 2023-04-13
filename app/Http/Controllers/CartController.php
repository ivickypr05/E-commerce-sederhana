<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $carts = Cart::with('product')->where('status', null)->get();
        $total = Cart::join('products', 'carts.product_id', '=', 'products.id')->where('status', null)
            ->sum(DB::raw('carts.qty * products.price'));
        return view('/user/cart', compact('carts', 'total', 'products'));
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
        $validated = $request->validate(
            [
                'product_id' => 'required',
                'qty' => 'required|integer|min:1',
            ]
        );
        $cek = Cart::where('product_id', $request->product_id)->first();
        // dd($cek);
        Cart::create($validated);
        // if ($cek) {

        // } elseif ($cek->status == '') {
        //     Cart::where('id', $cek->id)->update(['qty' => $cek->qty + $request->qty]);
        // } else {
        //     Cart::create($validated);
        // }
        return redirect('/cart')->with('success', 'successfully added to cart');
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
        // return view('/user/cart');
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
        $cart = Cart::findOrFail($id);
        $cart->update([
            'qty' => $request->qty,
        ]);
        return redirect('/cart')->with('toast_success', 'Quantity Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect('/cart')->with('toast_success', 'Cart Deleted Successfully!');
    }
}
