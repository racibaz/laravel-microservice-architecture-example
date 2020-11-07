<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\ProductCreated;
use App\Jobs\ProductDeleted;
use App\Jobs\ProductUpdated;
use App\Models\Product;
use Illuminate\Http\{Request, Response};

/**
 * @group Product Management
 *
 * APIs for managing products
 */
class ProductController extends Controller
{
    /**
     * Get all products
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show a product.
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Create a product.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->only('title', 'image'));

        ProductCreated::dispatch($product->toArray());

        return response($product, Response::HTTP_CREATED);
    }

    /**
     * Update a product.
     */
    public function update($id, Request $request)
    {
        $product = Product::find($id);

        $product->update($request->only('title', 'image'));

        ProductUpdated::dispatch($product->toArray());

        return response($product, Response::HTTP_ACCEPTED);
    }

    /**
     * Delete a product.
     */
    public function destroy($id)
    {
        Product::destroy($id);

        ProductDeleted::dispatch($id);

        return \response(null, Response::HTTP_NO_CONTENT);
    }
}
