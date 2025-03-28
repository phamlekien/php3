<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255|unique:products',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        Product::create($request->only(['name', 'price', 'description']));

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm!');
    }

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $product->id,
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $product->update($request->only(['name', 'price', 'description']));

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật!');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã bị xóa!');
    }
}
