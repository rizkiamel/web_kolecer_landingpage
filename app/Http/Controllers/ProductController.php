<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create(Request $request){
        $product = new Product;
        $product->name = 'God of War';
        $product->price = 40;

        $product->save();

        $category = Category::find([3, 4]);
        $product->categories()->attach($category);

        return 'Success';
    }

    public function show(Product $product){
        return view('product.show', compact('product'));
    }

    public function index(){
        //$product = DB::table('products')->get();
        //$product = DB::table('products')->where('name', 'Speaker')->first();
        //$product = DB::table('products')->find(2);
        //$product = DB::table('products')->pluck('name');
        //$product = DB::table('products')->pluck('name', 'price');
        //$product = DB::table('products')->count();
        //$product = DB::table('products')->max('price');
        //$product = DB::table('products')->avg('price');
        //$product = DB::table('products')->select('name', 'price as product_price')->get();
        //$product = DB::table('products')->distinct()->get();
        //$product = DB::table('products')->select('name')->addSelect('price')->get();
        $product = DB::table('users')
            ->join('phones', 'users.id', '=', 'phones.user_id')
            ->join('address', 'users.id', '=', 'address.user_id')
            ->select('users.*', 'phones.phone_number', 'address.address')
            ->get();

        return view('product.index', ['product' => $product]);
    }

    public function removeCategory(Product $product){
        $category = Category::find(3);

        $product->categories()->detach($category);

        return 'Success';
    }
}
