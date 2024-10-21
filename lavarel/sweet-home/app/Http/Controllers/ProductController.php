<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('backend.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('backend.product.create', compact('categories', 'products'));
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $product = new Product();
        $product-> name = $request-> input('name');
        $product-> category_id = $request-> input('category');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file-> move('uploads/products/', $filename);
            $product-> image = $filename;
        }
        $product-> price = $request-> input('price');
        $product-> stock = $request-> input('stock');
        $product-> sale = $request-> input('sale');
        $product-> description = $request-> input('description');
        $product-> save();
        return redirect()->back()->with('status', 'Thêm sản phẩm thành công!');
    }

    public function edit($id){
        $categories = Category::all();
        $product = Product::find($id);
        return view('backend.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product-> name = $request-> name;
        $product-> category_id = $request-> category;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file-> move('uploads/products/', $filename);
            $product-> image = $filename;
        }
        $product-> price = $request-> price;
        $product-> stock = $request-> stock;
        $product-> sale = $request-> sale;
        $product-> description = $request-> description;
        $product-> save();
        return redirect() -> back() -> with('status', 'Cập nhật sản phẩm thành công!');
    }

    public function delete($id){
        $product = Product::find($id);
        if($product){
            if($product->image){
                $oldImage = 'uploads/products/'.$product->image;
                if(file::exists($oldImage)){
                    file::delete($oldImage);
                }
            }
            $product->delete();
            return redirect() -> back() -> with('status', 'Xóa sản phẩm thành công!');
        }
        else{
            return redirect() -> back() -> with('error', 'Không tìm thấy sản phẩm!');
        }
        
    }
}
