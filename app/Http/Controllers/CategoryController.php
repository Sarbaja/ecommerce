<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function viewCategory(){
        $categories = Category::get();
        return view ('admin.categories.view_category')->with('categories', $categories);
    }

    public function createCategory(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data);die;

            if(empty($data['status'])){
                $status=0;
            }
            else{
                $status=1;
            }

           $category = new Category;
           $category->name = $data['category_name'];
           $category->parent_id = $data['parent_id'];
           $category->description = $data['description'];
           $category->url = $data['url'];
           $category->status = $status;
           $category->save();

           return redirect('/admin/category')->with('message_success', 'Category added successfully');
        }

        $categorylevel = Category::where(['parent_id' => 0])->get();

        return view('admin.categories.create_category')->with('categorylevel', $categorylevel);
    }

    public function editCategory(Request $request, $id = null){

        if($request->isMethod('post')){
            $data= $request->all();

            if(empty($data['status'])){
                $status=0;
            }
            else{
                $status=1;
            }

            Category::where(['id' => $id])->update(['name' => $data['category_name'], 'description' => $data['description'], 'url' => $data['url'], 'parent_id' => $data['parent_id'], 'status' => $status]);
            return redirect('/admin/category')->with('message_success', 'Category update successfully');
        }
        $categoryDetails = Category::where(['id' => $id])->first();
        $categorylevel = Category::where(['parent_id' => 0])->get();

        return view('admin.categories.edit_category')->with('categoryDetails', $categoryDetails)->with('categorylevel', $categorylevel);
    }

    public function deleteCategory(Request $request, $id = null){

        if(!empty($id)){
            Category::where(['id' => $id])->delete();
            return redirect()->back()->with('message_success', 'Category deleted successfully');
        }
    }

    
}
