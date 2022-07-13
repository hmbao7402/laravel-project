<?php

namespace App\Http\Controllers\ProductList;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function viewProductList() {
        $products = Product::latest()->get();
        return view('product-list.product-list', compact('products'));
    }

    public function viewProductDetail($id) {
        $product=  Product::where('productID', $id)->first();
        return view('product-details.product-details', compact('product'));
    }
}
