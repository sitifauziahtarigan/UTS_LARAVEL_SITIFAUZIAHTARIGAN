<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all()
        ]);
    }

    public function store(Request $request)
    {
        Product::create([

            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,

        ]);

        return redirect('/products');
    }
    public function update(Request $request, Product $product)
{
    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'stock' => $request->stock,
    ]);

    return redirect('/products');
}
public function destroy(Product $product)
{
    $product->delete();

    return redirect('/products');
}
}