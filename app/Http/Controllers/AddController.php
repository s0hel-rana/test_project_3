<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;



class AddController extends Controller
{

    public function add(){
        return view('backend.product.add_product');
    }






    public function storeProduct(Request $request){

        $product = new Product();
        $product->name = $request->name;
        $product->sub_category = $request->sub_category;
        $product->code = $request->code;
        $product->price = $request->price;
        // $product->image = $this->saveImage($request);
        $product->save();
        return back();

    if ($request->image) {
        $ext = $request->image->getClientOrginalExtension();
        $newFileName = time().'.'.$ext;
        $request->image->move(public_path().'/uploads/product/',$newFileName);
        $product->image = $newFileName;
        $product->save();
    }

   }

   public function pList(){
    $c_list = Product::all();

    return view('backend.product.product_list',compact('c_list'));
   }




}


