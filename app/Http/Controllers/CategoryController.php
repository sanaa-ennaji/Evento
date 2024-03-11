<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
   
    public function createCategory(Request $request){
      
        $category =$request->validate([
            'title' => ['required']
        ]);
        $category['user_id'] = auth()->id();
        Category::create($category);
    //    return response()->json($category, 200);
    return redirect()->back()->with('success', 'status updated successfully');
     
    }


    public function showCategory()
    {
        $categories = Category::all();
        return view('admin.categories', ['categories' => $categories]);
              
    }
    
     public function updateCategory (Request $request , $id){

        $request->validate([
            'title' => 'required',
        ]);
       
    
        $category = Category::findOrFail($id);
        if (Auth::id() !==  $category->user_id) {
            return view('/evento');
        }
    
        $category->update(['title' => $request->input('title')]);
   
        return redirect()->back()->with('success', ' title updated successfully');
    }

    public function deleteCategory(Category $category)
    {
        $category->events()->delete();
        $category->delete();
        // if (auth()->user()->id == $category->user_id) {
        // }
    
        return redirect('/admin/category');
    }
    
}
