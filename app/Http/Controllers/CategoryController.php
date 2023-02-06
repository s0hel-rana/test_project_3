<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('backend.Category.create_category');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            // 'select_cat' => 'required',
            'description' => 'required|max:255'

        ]);
        if ( $validator->passes() ){

            $data = new Category();
            $data->name = $request->name;
            $data->description = $request->description;
            $data->save();


        return redirect()->route('backend.Category.create_category.index');


        } else {
            return redirect()->route('create_category')->withErrors($validator)->withInput();

        }
        $category = new Category();
            //    dd($request);
                $category->name =$request->name;
                // $category->select_cat =$request->select_cat;
                $category->description =$request->description;
                $category->save();
                return back();

    }

    public function createList()
    {

      $c_list = Category::all();

       return view('backend.category.category_list',compact('c_list'));
    }

    public function delete(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->delete();
        return back();
    }

    public function edit($id) {
        $data = Category::findOrFail($id);
        return view ('backend.category.edit',['data'=>$data]);
    }

    // update.......

    public function update($id, Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            // 'select_cat' => 'required',
            'description' => 'required|max:255'

        ]);
        if ( $validator->passes() ){
            $data = Category::find($id);
            // $data = new Category();
            $data->name = $request->name;
            $data->description = $request->description;
            $data->save();
            return redirect()->route('category_list');

        } else {
            return redirect()->route('backend.Category.edit',$id)->withErrors($validator)->withInput();

        }


    }




}
