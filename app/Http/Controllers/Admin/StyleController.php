<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StyleController extends Controller
{
    public function index()
    {
        $styles = Style::latest()->get();
        return view('admin.style.index', compact('styles'));
    }

    public function createStyle()
    {
        return view('admin.style.create');
    }

    public function insertStyle(Request $request)
    {
        $style = new Style();
        $style->title = $request->title;
        $style->desc = $request->title;
        $style->slug = Str::of($request->title)->slug('-');

        $rules = [
            'title' => ['required', 'max:20', 'unique:styles'],
            'slug' => 'unique:styles'
        ];

        $customMessages = [
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không được quá 20 ký tự',
            'slug.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
            'title.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $style->save();
            return redirect('admin/create-style')->with('success_message', 'Thêm thành công');
        } catch (\Exception $e) {
            return redirect('admin/create-style')->with('error_message', 'Tiêu đề đã được sử dụng! Vui lòng nhập tiêu đề khác');
        }
    }

    public function editStyle($id)
    {
        $style = Style::where('styleID', $id)->first();
        return view('admin.style.edit', ['style' => $style]);
    }

    public function updateStyle(Request $request)
    {
        $rules = [
            'title' => ['required', 'max:20', 'unique:styles'],
            'slug' => 'unique:styles'
        ];

        $customMessages = [
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không được quá 20 ký tự',
            'slug.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
            'title.unique' => 'Tiêu đề này đã được tạo! Vui lòng nhập tiêu đề khác',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $newStyle = DB::table('styles')
                ->where('styleID', $request->id)
                ->update([
                    'title' => $request->title,
                    'desc' => $request->title,
                    'slug' => Str::of($request->title)->slug('-')
                ]);
            return redirect('admin/edit-style/' . $request->id)->with('success_message', 'Thêm thành công');
        } catch (\Exception $e) {
            return redirect('admin/edit-style/' . $request->id)->with('error_message', 'Tiêu đề đã được sử dụng! Vui lòng nhập tiêu đề khác');
        }
    }

    public function deleteStyle(Request $request)
    {
        try {
            $deleteStyle = DB::table('styles')
                ->where('styleID', $request->id)
                ->delete();
            return redirect('admin/style')->with('success_message', 'Xóa thành công');
        } catch (\Exception $e) {
            return redirect('admin/style')->with('error_message', 'Xóa không thành công');
        }
    }
}
