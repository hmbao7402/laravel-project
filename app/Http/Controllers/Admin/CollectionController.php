<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::latest()->get();
        return view('admin.collection.index', compact('collections'));
    }

    public function createCollection()
    {
        return view('admin.collection.create');
    }

    public function insertCollection(Request $request)
    {
        $collection = new Collection();
        $collection->title = $request->title;
        $collection->desc = $request->title;
        $collection->slug = Str::of($request->title)->slug('-');

        $rules = [
            'title' => ['required', 'max:20', 'unique:collections'],
            'slug' => 'unique:collections'
        ];

        $customMessages = [
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không được quá 20 ký tự',
            'slug.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
            'title.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $collection->save();
            return redirect('admin/create-collection')->with('success_message', 'Thêm thành công');
        } catch (\Exception $e) {
            return redirect('admin/create-collection')->with('error_message', 'Tiêu đề đã được sử dụng! Vui lòng nhập tiêu đề khác');
        }
    }

    public function editCollection($id)
    {
        $collection = Collection::where('collectionID', $id)->first();
        return view('admin.collection.edit', ['collection' => $collection]);
    }

    public function updateCollection(Request $request)
    {
        $rules = [
            'title' => ['required', 'max:20', 'unique:collections'],
            'slug' => 'unique:collections'
        ];

        $customMessages = [
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không được quá 20 ký tự',
            'slug.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
            'title.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $newCollection = DB::table('collections')
            ->where('collectionID', $request->id)
            ->update([
                'title' => $request->title,
                'desc' => $request->title,
                'slug' => Str::of($request->title)->slug('-')
            ]);
            return redirect('admin/edit-collection/'.$request->id)->with('success_message', 'Thêm thành công');
        } catch (\Exception $e) {
            return redirect('admin/edit-collection/'.$request->id)->with('error_message', 'Tiêu đề đã được sử dụng! Vui lòng nhập tiêu đề khác');
        }
    }

    public function deleteCollection(Request $request)
    {
        try {
            $deleteCollection = DB::table('collections')
            ->where('collectionID', $request->id)
            ->delete();
            return redirect('admin/collection')->with('success_message', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect('admin/collection')->with('error_message', 'Xóa không thành công');
        }
    }
}
