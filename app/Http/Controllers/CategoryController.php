<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function ctreateCategory(Request $request){
      
        $category =$request->validate([
            'title' => ['required']
        ]);
        $category['user_id'] = auth()->id();
        Category::create($category);
       return response()->json($category, 200);
     
    }


    public function showCategory(){
       $categories = category::all();
       return view('creator.event' ,['categories', $categories]);

    }

    public function updateCategory (){

    }

    public function deleteCategory(){

    }
}
