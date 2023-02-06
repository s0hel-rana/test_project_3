<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class AddController extends Controller
{
 protected $imageUrl;
    public function add(){
        return view('backend.product.add_product');
    }

    public function storeProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->sub_category = $request->sub_category;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->image = $this->saveImage($request);
        $product->save();
        return back();

    }

    public function saveImage($request){
        $image =$request->file('image');
        $imageName =rand().'.'.$image->extension();

        $directory ='admin/upload-image/product-image/';
        $imageUrl = $directory.$imageName;
        $image->move($directory.$imageName);
        return $imageUrl;


    }

}
