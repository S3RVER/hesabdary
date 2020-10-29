<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCount;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('products.create', compact('colors', 'categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

        $request->validate([
            'title' => 'required',
            'code' => 'required',
            'count' => 'required',
            'color.*' => 'required',
            'category.*' => 'required',
            'brand.*' => 'required',
        ]);
        $product = Product::create([
            'title' => $request->title,
            'code' => $request->code,
            'color_id' => $request->color,
            'brand_id' => $request->brand,
            'category_id' => $request->category,
            'user_id' => 1,
        ]);


        ProductCount::create([
            'product_id' => $product->id,
            'count' => $request->count,
        ]);

//        $product->productcount()->create([
//            'count' => $request->count,
//        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
        //
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

    public function increment($id)
    {
        ProductCount::where('product_id' ,$id)->increment('count');
        return redirect(route('products.index'))->with(['success' => 'Deleted Color']);
    }
    public function decrement($id)
    {
        ProductCount::where('product_id' ,$id)->decrement('count');
        return redirect(route('products.index'))->with(['success' => 'Deleted Color']);
    }
}
