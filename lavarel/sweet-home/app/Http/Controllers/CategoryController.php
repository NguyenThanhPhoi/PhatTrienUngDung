<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required|string|max:255', // 'name' là bắt buộc, phải là chuỗi và tối đa 255 ký tự
        ]);
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect()->back()->with('status', 'Thêm thành công danh mục!');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect() -> back() -> with('status', 'Cập nhật thành công!');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect() -> back() -> with('status', 'Xóa thành công!');
    }
}
