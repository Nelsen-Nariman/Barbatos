<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10)->withQueryString();
        return view('admin.manage', compact('products'));
    }

    public function indexByCategory($category_id)
    {
        $category = Category::findOrFail($category_id);
        $products = Product::where("category_id", "like", $category_id)->paginate(10)->withQueryString();

        $data = [
            'products' => $products,
            'filterTitle' => $category->name
        ];

        return view('product.filtered', $data);
    }

    public function searchProduct(Request $request)
    {
        $products = Product::where("name", "like", "%$request->search%")->paginate(10)->withQueryString();

        $data = [
            'products' => $products,
            'filterTitle' => "Search Result: \"" . $request->search . "\""
        ];

        return view('product.filtered', $data);

    }

    public function searchProductAdmin(Request $request)
    {
        $products = Product::where("name", "like", "%$request->search%")->paginate(10)->withQueryString();

        $data = [
            'products' => $products,
            'filterTitle' => 'Search Result'
        ];

        return view('admin.manage', $data);

    }

    public function addProduct(Request $request)
    {

        $request->validate([
            'productName' => 'required',
            'productCategory' => 'required',
            'productDetail' => 'required',
            'productPrice' => 'required|integer',
            'productPhoto' => 'required',
            'productPhoto.*' => 'file|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('productPhoto');
        $name = $file->getClientOriginalName();
        $filename = now()->timestamp.'_'.$name;

        $imageUrl = Storage::disk('public')->putFileAs('ListImage', $file, $filename);

        Product::create([
            'name' => $request->productName,
            'category_id' => $request->productCategory,
            'detail' => $request->productDetail,
            'price' => $request->productPrice,
            'photo' => $imageUrl,
        ]);

        return redirect()->route('admin.home');
    }

    public function updateProductForm($id){
        $product = Product::findorFail($id);
        return view('admin.updateForm', compact('product'));
    }

    public function updateProductLogic(Request $request, $id){

        $request->validate([
            'productName' => 'required',
            'productCategory' => 'required',
            'productDetail' => 'required',
            'productPrice' => 'required|integer',
            'productPhoto' => 'required',
            'productPhoto.*' => 'file|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('productPhoto');
        $name = $file->getClientOriginalName();
        $filename = now()->timestamp.'_'.$name;

        $imageUrl = Storage::disk('public')->putFileAs('ListImage', $file, $filename);
        
        Product::findOrFail($id)->update([
            'name' => $request->productName,
            'category_id' => $request->productCategory,
            'detail' => $request->productDetail,
            'price' => $request->productPrice,
            'photo' => $imageUrl,
        ]);

        return redirect()->route('admin.home');
    }

    public function deleteProduct(Request $request){
        $product = Product::find($request->id);
        $product->delete();
        
        return redirect()->route('admin.home');
    }

    public function showDetail($product_id)
    {
        $product = Product::findOrFail($product_id);

        return view('product.detail', compact('product'));
    }

}
