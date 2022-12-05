<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    public function store(StoreProductRequest $request)
    {
        $this->authorize('create', Product::class);

        $product = Product::create($request->all());
        
        return new ProductResource($product);
    }

    public function show(Product $product)
    {

        return new ProductResource($product->load('orders'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->authorize('update', Product::class);

        $product->update($request->all());
        
        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', Product::class);

        $product->delete();

        return response(null, 204);
    }
}
