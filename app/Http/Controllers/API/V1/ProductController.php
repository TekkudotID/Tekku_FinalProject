<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        $product = new Product();
        $product-> name = $request ->name;
        $product->image_link = $request -> image_link;
        $product->save();

        return response([
            'id'=>$product->id,
            'name'=>$product->name,
            'image_link'=>$product->image_link
        ]);
    }

    public function index()
    {
        $product = Product::all();

        return response(['data'=>$product]);
    }

    public function searchByCategory(Category $category)
    {
        $product=$category->products();
        return response(['data'=> $product]);
    }
}
