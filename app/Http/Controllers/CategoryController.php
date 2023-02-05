<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('backend.Category.create_category');
    }

    public function store(Request $request)
    {
        $category = new Category();
            //    dd($request);
                $category->name =$request->name;
                $category->select_cat =$request->select_cat;
                $category->description =$request->description;
                $category->save();
                return back();

    }

    public function createList()
    {

      $c_list = Category::all();

       return view('backend.category.category_list',compact('c_list'));
    }

}
