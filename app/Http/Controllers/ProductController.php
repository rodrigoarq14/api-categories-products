<?php

namespace App\Http\Controllers;

use App\Constants\HttpResponseStatusCode;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'success' => true,
            'message' => 'Products data retrieved successfully.',
            'data' => $products
        ], HttpResponseStatusCode::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Product data stored successfully.',
            'data' => $product
        ], HttpResponseStatusCode::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if ($product) {
            return response()->json([
                'success' => true,
                'message' => 'Product data retrieved successfully.',
                'data' => $product
            ], HttpResponseStatusCode::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => 'Product data not found.',
            'data' => null
        ], HttpResponseStatusCode::HTTP_NOT_FOUND);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->category_id = $request->category_id;
            $product->save();

            return response()->json([
                'success' => true,
                'message' => 'Product data updated successfully.',
                'data' => $product
            ], HttpResponseStatusCode::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => 'Product data not found.',
            'data' => null
        ], HttpResponseStatusCode::HTTP_NOT_FOUND);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response()->json([
                'success' => true,
                'message' => 'Product data deleted successfully.',
                'data' => $product
            ], HttpResponseStatusCode::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => 'Product data not found.',
            'data' => null
        ], HttpResponseStatusCode::HTTP_NOT_FOUND);
    }
}
