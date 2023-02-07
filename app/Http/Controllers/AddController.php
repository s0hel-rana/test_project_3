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
        $product->image = $this->saveImage($request);
        $product->save();
        return back();

        // Bar Code//
        $number = mt_rand(10000000000,99999999999);

        if ($this->productCodeExists($number)) {
            $number = mt_rand(1000000000,9999999999);

        }
        $request['product_code'] = $number;
        Product::create($request->all());

        return redirect('/');

    }

// image upload////
   public function saveImage($request){
    $image =$request->file('image');
    $imageName =rand().'.'.$image->extension();
    $directory ='admin/upload-image/product-image/';
    $imageUrl = $directory.$imageName;
    $image->move($directory,$imageName);
    return $imageUrl;
}

// Product code//
public function productCodeExists($number){
    return product::whereProductCode($number)->exists();
}

   public function pList(){
    $c_list = Product::all();

    return view('backend.product.product_list',compact('c_list'));
   }


   public function delete(Request $request)
    {
        $product = Product::find($request->product_id);

        if($product->image){
            if (file_exists($product->image)) {
                unlink($product->image);
            }
        }
        $product->delete();
        return back();
    }

    public function edit($id) {
        $data = Product::findOrFail($id);
        return view('backend.product.edit',['data'=>$data]);

    }


    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'sub_category' => 'required|max:300',
            'code' => 'required|max:30',
            'image' => 'required|max:100',
            'price' => 'required|max:200'


        ]);
        if ( $validator->passes() ){
            $data = Product::find($id);
            $data->name = $request->name;
            $data->sub_category = $request->sub_category;
            $data->code = $request->code;
            $data->image = $request->image;
            $data->price = $request->price;
            $data->save();
            return redirect()->route('product_list');

        } else {
            return redirect()->route('backend.product.edit',$id)->withErrors($validator)->withInput();

        }

    }

    // Bar Code....////






}


