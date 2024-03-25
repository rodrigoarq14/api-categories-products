<?php

namespace App\Http\Controllers;

use App\Constants\HttpResponseStatusCode;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $dataResponse = [
            'category_count' => Category::count(),
            'product_count' =>  Product::count()
        ];

        return response()->json([
            'success' => true,
            'message' => 'Dashboard data retrieved successfully.',
            'data' => $dataResponse
        ], HttpResponseStatusCode::HTTP_OK);
    }
}
