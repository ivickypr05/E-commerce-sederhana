<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    // User
    public function transaction()
    {
        $carts = Cart::where('status', 'checkouted')->get();
        $total = Cart::join('products', 'carts.product_id', '=', 'products.id')
            ->sum(DB::raw('carts.qty * products.price'));
        return view('/user/transaction', compact('carts', 'total'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  admin
    public function index()
    {
        $carts = Cart::where('status', 'checkouted')->get();
        $total = Cart::join('products', 'carts.product_id', '=', 'products.id')
        ->sum(DB::raw('carts.qty * products.price'));
        return view('/admin/transaction/transactionlist', compact('carts', 'total'));
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
    public function update()
    {

        // $carts = Cart::where('status', 'checkouted')->get();
        $cart = Cart::where('status', null);
        // foreach ($cart as $key) {
        // $key = 1;
        //     DB::table('carts')
        //         ->where('id', $key->id)
        //         ->update(['status' => 'checkouted']);
        // }
        $cart->update([
            'status' => 'checkouted',
        ]);
        return redirect('/transaction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
