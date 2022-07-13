<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Style;
use App\Models\Type;
use COM;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    public function createProduct()
    {
        $styles = Style::latest()->get();
        $types = Type::latest()->get();
        $collections = Collection::latest()->get();

        return view('admin.product.create', [
            'styles' => $styles,
            'types' => $types,
            'collections' => $collections
        ]);
    }

    public function insertProduct(Request $request)
    {

        $product = new Product();
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->styleID = $request->style;
        $product->typeID = $request->type;
        $product->collectionID = $request->collection;
        $product->gender = $request->gender;
        $product->avg_rating = 0;

        // echo $request->image; 
        // echo $request->file('image')->getClientOriginalName();
        // die;

        $file = $request->file('image');
        $fileName = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
        $product->img = $fileName;


        try {
            $product->save();
            return redirect('admin/create-product')->with('success_message', 'Thêm thành công');
        } catch (\Exception $e) {
            return redirect('admin/create-product')->with('error_message', 'them khong thanh cong');
        }
    }

    public function index() {
        $products = Product::latest()->get();
        return view('admin.product.index');
    }
}
