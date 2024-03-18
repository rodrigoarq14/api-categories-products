<?php

namespace App\Http\Controllers;

use App\Constants\HttpResponseStatusCode;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json([
            'success' => true,
            'message' => 'Categories data retrieved successfully.',
            'data' => $categories
        ], HttpResponseStatusCode::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Category data stored successfully.',
            'data' => $category
        ], HttpResponseStatusCode::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        if ($category) {
            return response()->json([
                'success' => true,
                'message' => 'Category data retrieved successfully.',
                'data' => $category
            ], HttpResponseStatusCode::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => 'Category data not found.',
            'data' => null
        ], HttpResponseStatusCode::HTTP_NOT_FOUND);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();

            return response()->json([
                'success' => true,
                'message' => 'Category data updated successfully.',
                'data' => $category
            ], HttpResponseStatusCode::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => 'Category data not found.',
            'data' => null
        ], HttpResponseStatusCode::HTTP_NOT_FOUND);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return response()->json([
                'success' => true,
                'message' => 'Category data deleted successfully.',
                'data' => $category
            ], HttpResponseStatusCode::HTTP_OK);
        }
        return response()->json([
            'success' => false,
            'message' => 'Category data not found.',
            'data' => null
        ], HttpResponseStatusCode::HTTP_NOT_FOUND);
    }
}
