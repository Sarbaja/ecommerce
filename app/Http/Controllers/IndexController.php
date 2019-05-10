<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class IndexController extends Controller
{
    public function index(){
        //$products= Product::get();
        //$products = Product::inRandomOrder()->get(); 
        $products = Product::inRandomOrder()->where('feature_item', 1)->where('status', 1)->paginate(4);
        $categories = Category::with('categories')->where(['parent_id'=> 0])->get();

        /*$categories = Category::where(['parent_id'=> 0])->get();
        $categories = json_decode(json_encode($categories));
        echo "<pre>"; print_r($categories); die;
        foreach($categories as $cat){
            echo $cat->name;
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach($sub_categories as $subcat){
                echo $subcat->name;
            }
        }*/
        
        $meta_title= "Burgeon.com: E-commerce Website";
        $meta_description = "Burgeon.com: Online Marketplace for fashion and beauty";
        $meta_keywords = "eshop website, online shopping, women clothing, fashion, trendy, makeup";
        return view('frontend.index')->with('products', $products)->with('categories', $categories)->with('meta_title', $meta_title)->with('meta_description', $meta_description)->with('meta_keywords', $meta_keywords);
    }
    
}
