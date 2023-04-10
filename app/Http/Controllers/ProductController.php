<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function home()
    {
        $products = Product::with('category')->get();
        return view('/user/home', compact('products'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('/admin/product/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('/admin/product/add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'description' => 'required|string|min:5|max:255',
            'price' => 'required|integer',
            'photo' => 'required|mimes:jpeg,jpg,png,gif',
            'category_id' => 'required|integer|exists:categories,id',
        ]);
        $photo = $request->file('photo')->store('product-photo', 'public');
        // $photo = $request->file('photo')->storeAs('product-photo', 'public');
        $validatedData['photo'] = $photo;

        Product::create($validatedData);
        return redirect('/product')->with('toast_success', 'Product Created Successfully!');
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
        $data['categories'] = Category::all();
        $data['product'] = Product::find($id);
        return view('admin/product/edit', $data);
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
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'description' => 'required|string|min:5|max:255',
            'price' => 'required|integer',
            'photo' => 'mimes:jpg,png,jpeg,gif',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $product = Product::find($id);
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('product-photo', 'public');
            File::delete('storage/' .  $product->photo);
            $validatedData['photo'] = $photo;
        }
        $product->update($validatedData);

        return redirect('/product')->with('toast_success', 'Product Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        File::delete('storage/' .  $product->photo);
        $product->delete();
        return redirect('/product')->with('toast_success', 'Data successfully deleted');
    }
}
