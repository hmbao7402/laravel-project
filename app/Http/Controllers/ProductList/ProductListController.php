<?php

namespace App\Http\Controllers\ProductList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function viewProductList() {
        return view('product-list.product-list');
    }
}
