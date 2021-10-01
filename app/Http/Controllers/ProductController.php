<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $product = ProductModel::create($data);
        return response()->json($product);
    }

    public function show($id)
    {
        $product = ProductModel::find($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = ProductModel::find($id);
        $product->update($data);
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = ProductModel::find($id);
        $deleted = $product->delete();
        return response()->json($deleted);
    }
}
