<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::latest()->get();
        return view('admin.type.index', compact('types'));
    }

    public function createType()
    {
        return view('admin.type.create');
    }

    public function insertType(Request $request)
    {
        $type = new Type();
        $type->title = $request->title;
        $type->desc = $request->title;
        $type->slug = Str::of($request->title)->slug('-');

        $rules = [
            'title' => ['required', 'max:20', 'unique:types'],
            'slug' => 'unique:types'
        ];

        $customMessages = [
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không được quá 20 ký tự',
            'slug.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
            'title.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $type->save();
            return redirect('admin/create-type')->with('success_message', 'Thêm thành công');
        } catch (\Exception $e) {
            return redirect('admin/create-type')->with('error_message', 'Tiêu đề đã được sử dụng! Vui lòng nhập tiêu đề khác');
        }
    }

    public function editType($id)
    {
        $type = Type::where('typeID', $id)->first();
        return view('admin.type.edit', ['type' => $type]);
    }

    public function updateType(Request $request)
    {
        $rules = [
            'title' => ['required', 'max:20', 'unique:types'],
            'slug' => 'unique:types'
        ];

        $customMessages = [
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không được quá 20 ký tự',
            'slug.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
            'title.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $newType = DB::table('types')
                ->where('typeID', $request->id)
                ->update([
                    'title' => $request->title,
                    'desc' => $request->title,
                    'slug' => Str::of($request->title)->slug('-')
                ]);
            return redirect('admin/edit-type/' . $request->id)->with('success_message', 'Thêm thành công');
        } catch (\Exception $e) {
            return redirect('admin/edit-type/' . $request->id)->with('error_message', 'Tiêu đề đã được sử dụng! Vui lòng nhập tiêu đề khác');
        }
    }

    public function deleteType(Request $request)
    {
        try {
            $deleteType = DB::table('types')
            ->where('typeID', $request->id)
                ->delete();
            return redirect('admin/type')->with('success_message', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect('admin/type')->with('error_message', 'Xóa không thành công');
        }
    }
}
