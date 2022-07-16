<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Style;
use App\Models\Type;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
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

    public function deleteProduct(Request $request)
    {
        try {
            $deleteProduct = DB::table('products')
                ->where('productID', $request->id)
                ->delete();
            return redirect('admin/product')->with('success_message', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect('admin/product')->with('error_message', 'Xóa không thành công');
        }
    }

    public function viewProductDetails($id)
    {
        $product = Product::where('productID', $id)->first();

        return view('admin.product.details', compact('product'));
    }

    public function editProduct($id) {
        $product = Product::where('productID', $id)->first();

        return view('admin.product.edit', compact('product'));
    }

    public function updateProduct(Request $request) {
        try {
            $updatedProduct = DB::table('products')
                ->where('productID', $request->id)
                ->update([
                    'title' => $request->title,
                    'desc' => $request->desc,
                    'price' => $request->price,
                ]);
            return redirect('admin/edit-product/' . $request->id)->with('success_message', 'Chinh sua thanh cong');
        } catch (\PDOException $e) {
            return redirect('admin/edit-style/' . $request->id)->with('error_message', 'Chinh sua khong thanh cong');
        }
    }
}
